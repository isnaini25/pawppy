<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\Admin\GejalaModel;


class Gejala extends BaseController
{
    protected $gejalaModel;
    public function __construct()
    {
        $this->gejalaModel = new GejalaModel();
    }



    public function index()
    {

        $currentPage = $this->request->getVar('page_gejala') ? $this->request->getVar('page_gejala') : 1;

        $keyword = $this->request->getVar('keyword');
        if ($keyword) {
            $gejala = $this->gejalaModel->search($keyword)->paginate();
        } else {
            $gejala = $this->gejalaModel->orderBy('id_gejala', 'DESC')->paginate(10, 'gejala');
        }

        $data = [
            'title' => 'Gejala',
            'gejala' => $gejala,
            'pager' => $this->gejalaModel->pager,
            'currentPage' => $currentPage
        ];

        if (empty($gejala)) {
            session()->setFlashdata('message_gejala', 'Data tidak ditemukan');
        } else {
            session()->unmarkFlashdata('message_gejala');
        }

        return view('admin/gejala/index', $data);
    }

    public function tambah()
    {

        $data = [
            'title' => 'Tambah Gejala',
            'parent' => 'Gejala',
            'validation' => \Config\Services::validation()
        ];

        return view('admin/gejala/tambah', $data);
    }

    public function simpan()
    {

        $valid = $this->validate([
            'keterangan' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Keterangan gejala harus diisi',
                ]
            ]
        ]);
        if (!$valid) {
            // $validation = \Config\Services::validation();
            // return redirect()->to('admin/gejala/tambah')->withInput()->with('validation', $validation);
            return redirect()->to('admin/gejala/tambah')->withInput();
        }

        $this->gejalaModel->save([
            'keterangan' => $this->request->getVar('keterangan')
        ]);

        session()->setFlashdata('pesan', 'ditambahkan');

        return redirect()->to('admin/gejala');
    }


    public function ubah($id_gejala)
    {

        $data = [
            'title' => 'Ubah Data Gejala',
            'parent' => 'Gejala',
            'validation' => \Config\Services::validation(),
            'gejala' => $this->gejalaModel->getGejala($id_gejala)
        ];

        return view('admin/gejala/ubah', $data);
    }


    public function update($id_gejala)
    {
        $valid = $this->validate([
            'keterangan' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Keterangan gejala harus diisi',
                ]
            ]
        ]);

        if (!$valid) {

            return redirect()->to('/admin/gejala/ubah/' . $this->request->getVar('id_gejala'))->withInput();
        }


        $this->gejalaModel->where('id_gejala', $id_gejala)->set([
            'keterangan' => $this->request->getVar('keterangan')
        ])->update();

        session()->setFlashdata('pesan', 'diubah');

        return redirect()->to('/admin/gejala/index');
    }

    public function hapus($id_gejala)
    {

        if ($this->gejalaModel->checkGejala($id_gejala) > 0) {
            session()->setFlashdata('pesan', 'danger');
            return redirect()->to('/admin/gejala/index');
        } else {
            $this->gejalaModel->delete($id_gejala);
            session()->setFlashdata('pesan', 'dihapus');
            return redirect()->to('/admin/gejala/index');
        }
    }
}
