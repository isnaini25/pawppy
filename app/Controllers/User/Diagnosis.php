<?php

namespace App\Controllers\User;


use App\Controllers\BaseController;
use App\Models\Admin\BasisPengetahuanModel;
use App\Models\Admin\GejalaModel;
use App\Models\Admin\PenyakitModel;
use App\Models\DiagnosisModel;

use function PHPUnit\Framework\isEmpty;

class Diagnosis extends BaseController
{
    protected $diagnosisModel;
    protected $gejalaModel;
    protected $penyakitModel;
    protected $basisPengetahuan;
    public function __construct()
    {
        $this->diagnosisModel = new DiagnosisModel();
        $this->gejalaModel = new GejalaModel();
        $this->basisPengetahuan = new BasisPengetahuanModel();
        $this->penyakitModel = new PenyakitModel();
    }



    public function index()
    {

        $data = [
            'title' => 'Diagnosis',
            'basisPengetahuan' => $this->basisPengetahuan->getBasisPengetahuan()->find(),
            'validation' => \Config\Services::validation()
        ];
        // dd($this->basisPengetahuan->getData()->groupBy('basis_pengetahuan.id_gejala')->findAll());

        return view('user/diagnosis/index', $data);
    }

    public function simpan()
    {

        $diagnosis['id_gejala'] = $this->request->getVar('id_gejala');
        $diagnosis['nilai'] = $this->request->getVar('nilai');
        if (logged_in()) {
            $id = user_id();
        } else {
            $id = 0;
        }

        //mengecek apakah user tidak memilih gejala dan nilai kepercayaan
        $tmp = array_filter($diagnosis['nilai']);
        if (empty($tmp)) {
            session()->setFlashdata('pesan', 'Pilih gejala yang sesuai dan pilih kondisi!');
            return redirect()->to('/user/diagnosis/index');
        }

        //menghilangkan nilai 0
        $size = count($diagnosis['nilai']);
        for ($i = 0; $i <  $size - 1; $i++) {

            $cari = array_search(0, $diagnosis['nilai']);

            if (is_int($cari)) {
                array_splice($diagnosis['id_gejala'], $cari, 1);
                array_splice($diagnosis['nilai'], $cari, 1);
            }
        }


        //mencari basis pengetahuan yang cocok dengan gejala yang ada
        $cariPengetahuan = $this->basisPengetahuan->getBasisPengetahuan($diagnosis['id_gejala']);

        $idPenyakitLama = '';
        $cfGejalaLama = 0;
        foreach ($cariPengetahuan as $c) {
            //cari posisi array diagnosis['nilai'] yang sama dengan id_gejala
            $cari = array_search($c['id_gejala'], $diagnosis['id_gejala']);

            //cfGejala = cfPakar * cfUser ($diagnosis[nilai][posisi array yang sama dengan posisi id_gejala])
            $cfGejala = $c['cf'] * $diagnosis['nilai'][$cari];

            //perhitungan Cf gabungan/pararel
            if ($idPenyakitLama == $c['id_penyakit']) {
                //cf1 dan cf2 bernilai positif
                if ($cfGejalaLama >= 0 && $cfGejala >= 0) {
                    $cfGejalaLama = $cfGejalaLama + ($cfGejala * (1 - $cfGejalaLama));
                    //cf1 dan cf2 bernilai negatif
                } else if ($cfGejalaLama <= 0 && $cfGejala <= 0) {
                    $cfGejalaLama = $cfGejalaLama  + ($cfGejala * (1 + $cfGejalaLama));
                    //cf1 atau cf2 salah satu bernilai negatif
                } else if ($cfGejala * $cfGejalaLama < 0) {
                    $cfGejalaLama = ($cfGejalaLama + $cfGejala) / (1 - min(abs($cfGejalaLama), abs($cfGejala)));
                }
            } else {
                //jika gejala pilihan hanya 1
                $cfGejalaLama = $cfGejala;
            }

            $idPenyakitLama = $c['id_penyakit'];
            $daftarPenyakit[] = $idPenyakitLama;
            $daftarNilai[] = number_format($cfGejalaLama, 2);
            $penyakitAkhir = array_combine($daftarPenyakit, $daftarNilai);
        }

        $nilaiMax = max($penyakitAkhir);


        $this->diagnosisModel->save([
            'id_user' => $id,
            'penyakit' => json_encode($penyakitAkhir),
            'gejala' => json_encode($diagnosis),
            'id_hasil' => array_search($nilaiMax, $penyakitAkhir),
            'nilai' => $nilaiMax
        ]);

        return redirect()->to('user/diagnosis/hasil');
    }

    public function hasil($id = false)
    {

        //ambil data diagnosis yang dimasukkan
        if ($id == false) {
            $get = $this->diagnosisModel->getData();
            $title = 'Hasil Diagnosis';
            $parent = 'Diagnosis';
        } else {
            $get = $this->diagnosisModel->getHistoryDetail($id);
            $title = 'Riwayat Diagnosis';
            $parent = 'Riwayat';
        }

        //decode data gejala dari data diagnosis yang telah diambil
        $gejala_decode = (json_decode($get['gejala'], true));
        //decode data penyakit dari data diagnosis yang telah diambil
        $penyakit_decode = (json_decode($get['penyakit'], true));

        //ambil data gejala dari database Gejala berdasarkan gejala (decode) pada data diagnosis 
        $gejala = $this->gejalaModel->getGejala($gejala_decode['id_gejala']);
        // ambil data penyakit dari database Penyakit berdasarkan penyakit (decode) pada data diagnosis
        // array_keys digunakan untuk mengambil id_penyakit (digunakan sebagai key array)
        $penyakit = $this->penyakitModel->getPenyakit(array_keys($penyakit_decode));

        $gejalaPenyakit = $this->basisPengetahuan->getGejala($get['id_hasil']);

        $i = 0;

        foreach ($penyakit as $p) {
            // echo $p['nama'] . '->' . $penyakit_decode[$p['id_penyakit']] . '<br>';   
            if ($p['id_penyakit'] == $get['id_hasil']) {
                $hasilPenyakit = $p;
            } else {
                $penyakitLain[] = array($p['nama'], $penyakit_decode[$p['id_penyakit']], $p['id_penyakit']);
            }
        }
        // dd($penyakitLain);

        foreach ($gejala as $g) {
    
            // if ($g['id_gejala'] == $gejala_decode['id_gejala'][$i]) {
            if (in_array($g['id_gejala'], $gejala_decode['id_gejala'])) {
                // echo $g['keterangan'] . '->' . $gejala_decode['nilai'][$i] . '<br>';
                $gejalaTerpilih[] = array($g['keterangan'], $gejala_decode['nilai'][$i]);
            }

            $i++;
        }
        

        $data = [
            'title'         => $title,
            'parent'        => $parent,
            'hasilPenyakit' => $hasilPenyakit,
            'nilai'         => $get['nilai'],
            'gejala'        => $gejalaTerpilih,
            'gejalaPenyakit' => $gejalaPenyakit,

        ];

        if (isset($penyakitLain)) {
            $data['penyakitLain'] = $penyakitLain;
        }


        if ($id == false) {
            return view('user/diagnosis/detail', $data);
        } else {
            return view('user/diagnosis/riwayat-detail', $data);
        }
    }


    public function riwayat()
    {

        $riwayat = $this->diagnosisModel->getHistory(user_id());


        $data = [
            'title' => 'Riwayat',
            'riwayat' => $riwayat,
        ];

        return view('user/diagnosis/riwayat', $data);
    }



    // public function ubah($id_gejala)
    // {

    //     $data = [
    //         'title' => 'Ubah Data Gejala',
    //         'parent' => 'Gejala',
    //         'validation' => \Config\Services::validation(),
    //         'gejala' => $this->gejalaModel->getGejala($id_gejala)
    //     ];

    //     return view('admin/gejala/ubah', $data);
    // }


    // public function update($id_gejala)
    // {
    //     $valid = $this->validate([
    //         'keterangan' => [
    //             'rules' => 'required',
    //             'errors' => [
    //                 'required' => 'Keterangan gejala harus diisi',
    //             ]
    //         ]
    //     ]);

    //     if (!$valid) {

    //         return redirect()->to('/admin/gejala/ubah/' . $this->request->getVar('id_gejala'))->withInput();
    //     }


    //     $this->gejalaModel->where('id_gejala', $id_gejala)->set([
    //         'keterangan' => $this->request->getVar('keterangan')
    //     ])->update();

    //     session()->setFlashdata('pesan', 'diubah');

    //     return redirect()->to('/admin/gejala/index');
    // }

    // public function hapus($id_gejala)
    // {

    //     if ($this->gejalaModel->checkGejala($id_gejala) > 0) {
    //         session()->setFlashdata('pesan', 'danger');
    //         return redirect()->to('/admin/gejala/index');
    //     } else {
    //         $this->gejalaModel->delete($id_gejala);
    //         session()->setFlashdata('pesan', 'dihapus');
    //         return redirect()->to('/admin/gejala/index');
    //     }
    // }
}