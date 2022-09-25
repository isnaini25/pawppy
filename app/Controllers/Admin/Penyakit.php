<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\Admin\PenyakitModel;

class Penyakit extends BaseController
{
    protected $penyakitModel;
    public function __construct()
    {
        $this->penyakitModel = new PenyakitModel();
    }


    public function index()
    {

        $currentPage = $this->request->getVar('page_penyakit') ? $this->request->getVar('page_penyakit') : 1;

        $keyword = $this->request->getVar('keyword');
        if ($keyword) {
            $penyakit = $this->penyakitModel->search($keyword)->paginate();
        } else {
            $penyakit = $this->penyakitModel->orderBy('id_penyakit', 'DESC')->paginate(10, 'penyakit');
        }

        $data = [
            'title' => 'Penyakit',
            'penyakit' => $penyakit,
            'pager' => $this->penyakitModel->pager,
            'currentPage' => $currentPage
        ];

        if (empty($penyakit)) {
            session()->setFlashdata('message_penyakit', 'Data tidak ditemukan', 3);
        } else {
            session()->unmarkFlashdata('message_penyakit');
        }
        return view('admin/penyakit/index', $data);
    }

    public function detail($id_penyakit)
    {
        $data = [
            'title' => 'Detail Penyakit',
            'parent' => 'Penyakit',
            'penyakit' => $this->penyakitModel->getPenyakit($id_penyakit)
        ];

        if (empty($data['penyakit'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Penyakit tidak ditemukan');
        }

        return view('admin/penyakit/detail', $data);
    }

    public function tambah()
    {

        $data = [
            'title' => 'Tambah Penyakit',
            'parent' => 'Penyakit',
            'validation' => \Config\Services::validation()
        ];

        return view('admin/penyakit/tambah', $data);
    }

    public function simpan()
    {

        $valid = $this->validate([
            'nama' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Nama penyakit harus diisi',
                ]
            ],
            'gambar' => [
                'rules' => 'max_size[gambar,2048]|is_image[gambar]|mime_in[gambar,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'max_size' => 'Ukuran gambar terlau besar (Max.2MB)',
                    'is_image' => 'Yang Anda pilih bukan gambar',
                    'mime_in' => 'Yang Anda pilih bukan gambar'
                ]
            ]
        ]);
        if (!$valid) {

            return redirect()->to('admin/penyakit/tambah')->withInput();
        }

        //ambil gambar
        $fileGambar = $this->request->getFile('gambar');
        //apakah tidak ada gambar yang diupload


        if ($fileGambar->getError() == 4) {
            $namaGambar = 'default.png';
        } else {
            //generate nama Gambar random
            $namaGambar = $fileGambar->getRandomName();
            //pindahkkan ke folder img
            $fileGambar->move('img', $namaGambar);
        }

        $this->penyakitModel->save([
            'nama' => $this->request->getVar('nama'),
            'deskripsi' => $this->request->getVar('deskripsi'),
            'saran' => $this->request->getVar('saran'),
            'gambar' => $namaGambar
        ]);

        session()->setFlashdata('pesan', 'ditambahkan');
        $id_penyakit = $this->penyakitModel->getInsertID();
        return redirect()->to('admin/penyakit/detail/' . $id_penyakit);
    }


    public function ubah($id_penyakit)
    {

        $data = [
            'title' => 'Ubah Data penyakit',
            'parent' => 'Penyakit',
            'validation' => \Config\Services::validation(),
            'penyakit' => $this->penyakitModel->getPenyakit($id_penyakit)
        ];

        return view('admin/penyakit/ubah', $data);
    }


    public function update($id_penyakit)
    {
        $valid = $this->validate([
            'nama' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Nama penyakit harus diisi',
                ]
            ],
            'gambar' => [
                'rules' => 'max_size[gambar,2048]|is_image[gambar]|mime_in[gambar,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'max_size' => 'Ukuran gambar terlau besar (Max.2MB)',
                    'is_image' => 'Yang Anda pilih bukan gambar',
                    'mime_in' => 'Yang Anda pilih bukan gambar'
                ]
            ]
        ]);

        if (!$valid) {
            return redirect()->to('/admin/penyakit/ubah/' . $this->request->getVar('id_penyakit'))->withInput();
        }

        $fileGambar = $this->request->getFile('gambar');
        $fileGambarLama = $this->request->getVar('gambarLama');

        //cek gambar, apakah tetap gambar lama
        if ($fileGambar->getError() == 4) {
            $namaGambar = $fileGambarLama;
        } else {
            //generate nama random
            $namaGambar = $fileGambar->getRandomName();
            //pindah gambar
            $fileGambar->move('img', $namaGambar);
            //hapus file lama

            if ($fileGambarLama != 'default.png') {
                //hapus gambar
                unlink('img/' . $fileGambarLama);
            }
        }

        $this->penyakitModel->where('id_penyakit', $id_penyakit)->set([
            'nama' => $this->request->getVar('nama'),
            'deskripsi' => $this->request->getVar('deskripsi'),
            'saran' => $this->request->getVar('saran'),
            'gambar' => $namaGambar
        ])->update();



        session()->setFlashdata('pesan', 'diubah');

        return redirect()->to('admin/penyakit');
    }

    public function hapus($id_penyakit)
    {

        if ($this->penyakitModel->checkPenyakit($id_penyakit) > 0) {
            session()->setFlashdata('pesan', 'danger');
            return redirect()->to('/admin/penyakit/index');
        } else {
            //cari gambar berdasarkan id_penyakit
            $penyakit = $this->penyakitModel->find($id_penyakit);

            //cek file gambar default.png
            if ($penyakit['gambar'] != 'default.png') {

                //hapus gambar
                unlink('img/' . $penyakit['gambar']);
            }

            $this->penyakitModel->delete($id_penyakit);
            session()->setFlashdata('pesan', 'dihapus');
            return redirect()->to('/admin/penyakit/index');
        }
    }
}