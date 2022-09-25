<?php

namespace App\Controllers\User;

use App\Controllers\BaseController;
use App\Models\Admin\ArtikelModel;

class Home extends BaseController
{
    protected $artikelModel;

    public function __construct()
    {
        $this->artikelModel = new ArtikelModel();
    }

    public function index()
    {
        $keyword = $this->request->getVar('keyword');
        if ($keyword) {
            $artikel = $this->artikelModel->search($keyword)->paginate();
        } else {
            $artikel = $this->artikelModel->getArtikel()->orderBy('id_artikel', 'DESC')->paginate(10, 'artikel');
        }
        $currentPage = $this->request->getVar('page_artikel') ? $this->request->getVar('page_artikel') : 1;
        $data = [
            'title' => 'Home',
            'artikel' => $artikel,
            'pager' => $this->artikelModel->pager,
            'currentPage' => $currentPage
        ];


        if (empty($artikel)) {
            session()->setFlashdata('warning', 'Artikel tidak ditemukan');
        }
        return view('user/index', $data);
    }

    public function artikel($id)
    {
        $recommendation = $this->artikelModel->recommendation($id)->orderBy('id_artikel', 'DESC')->limit(4)->find();
        $artikel = $this->artikelModel->getArtikel($id);
        $data = [
            'title' => 'Artikel Detail',
            'artikel' => $artikel,
            'rekomendasi' => $recommendation,
        ];

        return view('user/artikel-detail', $data);
    }
}
