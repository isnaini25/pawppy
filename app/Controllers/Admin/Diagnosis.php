<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\Admin\GejalaModel;
use App\Models\Admin\PenyakitModel;
use App\Models\DiagnosisModel;
use App\Controllers\Admin\Report;

class Diagnosis extends BaseController
{
    protected $diagnosisModel;
    protected $gejalaModel;
    protected $penyakitModel;
    public function __construct()
    {
        $this->diagnosisModel = new DiagnosisModel();
        $this->gejalaModel = new GejalaModel();
        $this->penyakitModel = new PenyakitModel();
    }



    public function index()
    {

        $currentPage = $this->request->getVar('page_diagnosis') ? $this->request->getVar('page_diagnosis') : 1;

        $keyword = $this->request->getVar('keyword');
        if ($keyword) {
            $diagnosis = $this->diagnosisModel->search($keyword)->paginate();
        } else {
            $diagnosis = $this->diagnosisModel->getDiagnosis()->orderBy('id_diagnosis', 'DESC')->paginate(20, 'diagnosis');
        }

        $data = [
            'title' => 'Hasil Diagnosis',
            'diagnosis' => $diagnosis,
            'pager' => $this->diagnosisModel->pager,
            'currentPage' => $currentPage
        ];

        if (empty($diagnosis)) {
            session()->setFlashdata('message_diagnosis', 'Data tidak ditemukan');
        } else {
            session()->unmarkFlashdata('message_diagnosis');
        }

        return view('admin/diagnosis/index', $data);
    }

    public function detail($id)
    {
        //ambil data diagnosis yang dimasukkan

        $get = $this->diagnosisModel->getHistoryDetail($id);
        $title = 'Detail Diagnosis';
        $parent = 'Diagnosis';

        //decode data gejala dari data diagnosis yang telah diambil
        $gejala_decode = (json_decode($get['gejala'], true));
        //decode data penyakit dari data diagnosis yang telah diambil
        $penyakit_decode = (json_decode($get['penyakit'], true));

        //ambil data gejala dari database Gejala berdasarkan gejala (decode) pada data diagnosis 
        $gejala = $this->gejalaModel->getGejala($gejala_decode['id_gejala']);
        // ambil data penyakit dari database Penyakit berdasarkan penyakit (decode) pada data diagnosis
        // array_keys digunakan untuk mengambil id_penyakit (digunakan sebagai key array)
        $penyakit = $this->penyakitModel->getPenyakit(array_keys($penyakit_decode));


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
            if ($g['id_gejala'] == $gejala_decode['id_gejala'][$i]) {
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
            'diagnosis'     => $get

        ];

        if (isset($penyakitLain)) {
            $data['penyakitLain'] = $penyakitLain;
        }



        return view('admin/diagnosis/detail', $data);
    }

    public function report()
    {
        $report = new Report();
        $report->run()->render();
    }
}
