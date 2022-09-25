<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\Admin\ArtikelGambarModel;
use App\Models\Admin\ArtikelModel;


class Artikel extends BaseController
{
    protected $artikelModel;
    // protected $artikelGambarModel;
    public function __construct()
    {
        $this->artikelModel = new ArtikelModel();
        // $this->artikelGambarModel = new ArtikelGambarModel();
    }



    public function index()
    {

        $currentPage = $this->request->getVar('page_artikel') ? $this->request->getVar('page_artikel') : 1;

        $keyword = $this->request->getVar('keyword');
        if ($keyword) {
            $artikel = $this->artikelModel->search($keyword)->paginate();
        } else {
            $artikel = $this->artikelModel->getArtikel()->orderBy('id_artikel', 'DESC')->paginate(10, 'artikel');
        }

        $data = [
            'title' => 'Artikel',
            'artikel' => $artikel,
            'pager' => $this->artikelModel->pager,
            'currentPage' => $currentPage
        ];

        if (empty($artikel)) {
            session()->setFlashdata('message_artikel', 'Data tidak ditemukan');
        } else {
            session()->unmarkFlashdata('message_artikel');
        }

        return view('admin/artikel/index', $data);
    }

    public function tambah()
    {

        $data = [
            'title' => 'Tambah Artikel',
            'parent' => 'Artikel',
            'validation' => \Config\Services::validation()
        ];


        return view('admin/artikel/tambah', $data);
    }

    public function simpan()
    {
        $valid = $this->validate([
            'teks' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'konten artikel harus diisi',
                ]
            ],
            'judul' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Judul artikel harus diisi',
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

            return redirect()->to('admin/artikel/tambah')->withInput();
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

        $this->artikelModel->save([
            'id_penulis' => user()->id,
            'judul'        => $this->request->getVar('judul'),
            'teks'        => $this->request->getVar('teks'),
            'gambar'        => $namaGambar,
        ]);

        session()->setFlashdata('pesan', 'ditambahkan');

        return redirect()->to('admin/artikel/index');
    }



    public function ubah($id_artikel)
    {

        $data = [
            'title' => 'Ubah Data Artikel',
            'parent' => 'Artikel',
            'validation' => \Config\Services::validation(),
            'artikel' => $this->artikelModel->getArtikel($id_artikel)
        ];

        return view('admin/artikel/ubah', $data);
    }


    public function update($id_artikel)
    {
        $valid = $this->validate([
            'teks' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'konten artikel harus diisi',
                ]
            ],
            'judul' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Judul artikel harus diisi',
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
            return redirect()->to('/admin/artikel/ubah/' . $this->request->getVar('id_artikel'))->withInput();
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

        $this->artikelModel->save([
            'id_artikel' => $id_artikel,
            'id_penulis' => user()->id,
            'judul'        => $this->request->getVar('judul'),
            'teks'        => $this->request->getVar('teks'),
            'gambar'        => $namaGambar,
        ]);

        session()->setFlashdata('pesan', 'diubah');

        return redirect()->to('admin/artikel/index');
    }

    public function detail($id_artikel)
    {
        $artikel = $this->artikelModel->getArtikel($id_artikel);
        $data = [
            'title' => 'Artikel Detail',
            'parent' => 'Artikel',
            'artikel' => $artikel
        ];

        return view('admin/artikel/detail', $data);
    }


    public function hapus($id_artikel)
    {

        $this->artikelModel->delete($id_artikel);
        session()->setFlashdata('pesan', 'dihapus');
        return redirect()->to('/admin/artikel/index');
    }
}