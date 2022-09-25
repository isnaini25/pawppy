<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\Admin\BasisPengetahuanModel;
use App\Models\Admin\GejalaModel;
use App\Models\Admin\PenyakitModel;

class BasisPengetahuan extends BaseController
{
    protected $basisPengetahuanModel;
    protected $penyakitModel;
    protected $gejalaModel;
    public function __construct()
    {
        $this->basisPengetahuanModel = new BasisPengetahuanModel();
        $this->penyakitModel = new PenyakitModel();
        $this->gejalaModel = new GejalaModel();
    }


    public function index()
    {
        // $currentPage = $this->request->getVar('page_basis_pengetahuan') ? $this->request->getVar('page_basis_pengetahuan') : 1;

        $keyword = $this->request->getVar('keyword');

        if ($keyword) {
            $basisPengetahuan = $this->basisPengetahuanModel->search($keyword)->paginate();
            $group = $this->basisPengetahuanModel->countBasisPengetahuan($keyword)->find();
            $first = $this->basisPengetahuanModel->countBasisPengetahuan($keyword)->first();
            // dd($group);
        } else {
            $basisPengetahuan = $this->basisPengetahuanModel->getBasisPengetahuan()
                ->orderBy('basis_pengetahuan.id_penyakit', 'DESC')->findAll();
            $group = $this->basisPengetahuanModel->countBasisPengetahuan();
            $first = $this->basisPengetahuanModel->getBasisPengetahuan()->first();
        }


        $data = [
            'title' => 'Basis Pengetahuan',
            'basisPengetahuan' => $basisPengetahuan,
            'group' => $group,

        ];

        if (isset($first)) {
            $data['first'] = $first;
        }
        if (empty($basisPengetahuan)) {
            session()->setFlashdata('message_basis', 'Data tidak ditemukan');
        } else {
            session()->unmarkFlashdata('message_basis');
        }
        return view('admin/basis-pengetahuan/index', $data);
    }

    // public function detail($id)
    // {
    //     $data = [
    //         'title' => 'Detail Basis Pengetahuan',
    //         'parent' => 'Basis Pengetahuan',
    //         'basisPengetahuan' => $this->basisPengetahuanModel->getBasisPengetahuan($id),
    //         'gejalaLain' => $this->basisPengetahuanModel->getGejalaLain($id)
    //     ];

    //     //dd($data);
    //     if (empty($data['basisPengetahuan'])) {
    //         throw new \CodeIgniter\Exceptions\PageNotFoundException('Basis Pengetahuan tidak ditemukan');
    //     }

    //     return view('admin/basis-pengetahuan/detail', $data);
    // }

    public function tambah()
    {


        $penyakit = $this->penyakitModel->findAll();
        $gejala = $this->gejalaModel->findAll();
        $data = [
            'title' => 'Tambah Basis Pengetahuan',
            'parent' => 'Basis Pengetahuan',
            'validation' => \Config\Services::validation(),
            'penyakit' => $penyakit,
            'gejala'  => $gejala
        ];


        return view('admin/basis-pengetahuan/tambah', $data);
    }

    public function fetch_penyakit()
    {

        $output = '';
        $query = '';

        if ($this->request->getVar('query')) {
            $query = $this->request->getVar('query');
        }
        $data = $this->penyakitModel->search($query)->paginate();
        $output .= '
            <div class="table-responsive">
            <table class="table table-bordered table-sm">
                <thead>
                    <tr class="text-center d-flex">
                        <th class="col-1">#</th>
                        <th class="col-6">Penyakit</th>
                        <th class="col-5">Aksi</th>

                    </tr>
                </thead>
         ';

        if ($this->penyakitModel->search($query)->countAllResults() > 0) {
            $no = 1;
            foreach ($data as $row) {
                // dd($data);
                $output .= '
             <tr class="d-flex">
              <td class="col-1">' . $no++ . '</td>
              <td class="col-6">' . $row['nama'] . '</td>
              <td class="col-5">  <div class="selectgroup selectgroup-pills">
              <label class="selectgroup-item">
                  <input type="radio" name="value" value="" data-id="' . $row['id_penyakit'] . '" data-nama="' . $row['nama'] . '" id="penyakit-' . $row['id_penyakit'] . '"  class="selectgroup-input pilih">
                  <span class="selectgroup-button">Pilih <i class="fas fa-check"></i></span>
              </label>
          </div>
        </td>
             </tr>
           ';
            }
        } else {
            $output .= '<tr>
              <td colspan="3">Data tidak ditemukan</td>
             </tr>';
        }
        $output .= '</table>';
        echo $output;
    }

    // public function fetch_gejala()
    // {

    //     $output = '';
    //     $query = '';

    //     if ($this->request->getVar('query')) {
    //         $query = $this->request->getVar('query');
    //     }
    //     $data = $this->gejalaModel->search($query)->paginate();
    //     $output .= '
    //         <div class="table-responsive">
    //         <table class="table table-bordered table-sm">
    //             <thead>
    //                 <tr class="text-center d-flex">
    //                     <th class="col-1">#</th>
    //                     <th class="col-6">Keterangan</th>
    //                     <th class="col-5">Aksi</th>

    //                 </tr>
    //             </thead>
    //      ';

    //     if ($this->gejalaModel->search($query)->countAllResults() > 0) {
    //         $no = 1;
    //         foreach ($data as $row) {
    //             $output .= '
    //          <tr class="d-flex">
    //           <td class="col-1">' . $no++ . '</td>
    //           <td class="col-6">' . $row['keterangan'] . '</td>
    //           <td class="col-5">  <div class="selectgroup selectgroup-pills">
    //           <label class="selectgroup-item">
    //               <input type="radio" name="value" value="" data-id="' . $row['id_gejala'] . '" data-keterangan="' . $row['keterangan'] . '" id="gejala-' . $row['id_gejala'] . '"  class="selectgroup-input pilih-gejala">
    //               <span class="selectgroup-button">Pilih <i class="fas fa-check"></i></span>
    //           </label>
    //       </div>
    //     </td>
    //          </tr>
    //        ';
    //         }
    //     } else {
    //         $output .= '<tr>
    //           <td colspan="3">Data tidak ditemukan</td>
    //          </tr>';
    //     }
    //     $output .= '</table>';
    //     echo $output;
    // }

    public function fetch_gejala()
    {
        $output = '';
        $gejala = $this->gejalaModel->getGejala();

        $k = $this->request->getVar('no');
        $no = $k + 1;
        $output .= '<div class="row" id="row' . $k . '">
        <div class="col-lg-5 col-md-6 form-group form-penyakit ">
            
            <select class="form-control pilih-gejala select2" name="gejala[]" id="gejala' . $no . '">';
        foreach ($gejala as $g) :
            $output .= '<option value="' . $g['id_gejala'] . '">' . $g['keterangan'] . '</option>';
        endforeach;
        $output .= '</select> </div>';
        $output .= ' <div class="col-lg-5 col-md-6 form-group">
        
            <select class="form-control pilihkondisi" id="select<' . $no . '"
                data-id="<' . $no . '" name="nilai[]">';
        for ($i = 0; $i < 8; $i++) {
            $nilai = [-1, -0.8, -0.6, -0.4, 0.4, 0.6, 0.8, 1];
            $ket = [
                'Pasti tidak',
                'Hampir pasti tidak',
                'Kemungkinan besar tidak',
                'Mungkin tidak',
                'Mungkin ya',
                'Kemungkinan besar ya',
                'Hampir  pasti ya',
                'Pasti ya'
            ];
            $output .= '<option value="' . $nilai[$i] . '" data-id="' . $no . '">' . $ket[$i] . '</option>';
        };
        $output .= ' </select></div>

        <div class="col-lg-2 form-group d-flex align-items-end">
            <button class="btn btn-danger mb-1 remove" type="button" id="' . $k . '">-</button>
        </div>
    </div>';

        echo $output;
    }

    public function simpan()
    {
        $id_penyakit = $this->request->getVar('id_penyakit');
        $gejala['id_gejala'] = $this->request->getVar('gejala');
        $gejala['cf'] = $this->request->getVar('nilai');
        $size = count($gejala['id_gejala']);


        $valid = $this->validate([
            'nama' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Nama penyakit harus diisi',
                ]
            ],
        ]);
        if (!$valid) {
            return redirect()->to('admin/basisPengetahuan/tambah')->withInput();
        }

        // $check = count($gejala['id_gejala']) > count(array_unique($gejala['id_gejala']));
        // dd($check);

        // if ($check == true) {
        //     session()->setFlashdata('pesan', 'warning');
        //     return redirect()->to('admin/basisPengetahuan/tambah')->withInput();
        // } else {
        for ($i = 0; $i <  $size; $i++) {
            $this->basisPengetahuanModel->save([
                'id_penyakit' => $id_penyakit,
                'id_gejala' => $gejala['id_gejala'][$i],
                'cf' => $gejala['cf'][$i]
            ]);
        }
        session()->setFlashdata('pesan', 'ditambahkan');
        // $id = $this->basisPengetahuanModel->getInsertID();
        // return redirect()->to('admin/basisPengetahuan/detail/' . $id);
        return redirect()->to('admin/basispengetahuan');
        // }
    }


    public function ubah($id)
    {
        $penyakit = $this->penyakitModel->findAll();
        $gejala = $this->gejalaModel->findAll();


        $data = [
            'title' => 'Ubah Data Basis Pengetahuan',
            'parent' => 'Basis Pengetahuan',
            'validation' => \Config\Services::validation(),
            'penyakit' => $penyakit,
            'gejala'  => $gejala,
            'basisPengetahuan' => $this->basisPengetahuanModel->getBasisPengetahuan($id)
        ];
        // dd($data);

        return view('admin/basis-pengetahuan/ubah', $data);
    }


    public function update()
    {
        $id = $this->request->getVar('id_pengetahuan');
        $id_penyakit = $this->request->getVar('id_penyakit');

        $gejala['id_gejala_old'] = $this->request->getVar('gejala_old');
        $gejala['cf_old'] = $this->request->getVar('nilai_old');
        $size = count($id);


        $valid = $this->validate([
            'nama' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Nama penyakit harus diisi',
                ]
            ],
        ]);
        if (!$valid) {
            return redirect()->to('admin/basisPengetahuan/ubah/' . $id)->withInput();
        }


        // $check = $this->basisPengetahuanModel->check($id_penyakit, $id_gejala, $id);


        // if ($check > 0) {
        //     session()->setFlashdata('pesan', 'warning');
        //     return redirect()->to('admin/basisPengetahuan/ubah/' . $id)->withInput();
        // } else {
        for ($i = 0; $i <  $size; $i++) {
            $this->basisPengetahuanModel->save([
                'id_pengetahuan' => $id[$i],
                'id_penyakit' => $id_penyakit,
                'id_gejala' => $gejala['id_gejala_old'][$i],
                'cf' => $gejala['cf_old'][$i],
            ]);
        }

        $gejala['id_gejala'] = $this->request->getVar('gejala');
        $gejala['cf'] = $this->request->getVar('nilai');
        if ($gejala['cf']) {
            $size_new = count($gejala['id_gejala']);
            for ($i = 0; $i <  $size_new; $i++) {
                $this->basisPengetahuanModel->save([
                    'id_penyakit' => $id_penyakit,
                    'id_gejala' => $gejala['id_gejala'][$i],
                    'cf' => $gejala['cf'][$i],
                ]);
            }
        }
        session()->setFlashdata('pesan', 'diubah');
        return redirect()->to('admin/basispengetahuan');
        // }
    }

    public function hapus()
    {
        $id = $this->request->getVar('id');
        $this->basisPengetahuanModel->delete($id);
    }

    public function deleteAll($id)
    {
        $pengetahuan = $this->basisPengetahuanModel->getBasisPengetahuan($id);
        for ($i = 0; $i < count($pengetahuan); $i++) {
            $this->basisPengetahuanModel->delete($pengetahuan[$i]['id_pengetahuan']);
        }

        session()->setFlashdata('pesan', 'dihapus');
        return redirect()->to('/admin/basispengetahuan');
    }
}