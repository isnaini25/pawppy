<?php

namespace App\Controllers;

use App\Models\Admin\ArtikelModel;

class Home extends BaseController
{
    protected $artikelModel;
    protected $config;
    protected $session;
    protected $auth;

    public function __construct()
    {
        $this->session = service('session');
        $this->config = config('Auth');
        $this->auth = service('authentication');
        $this->artikelModel = new ArtikelModel();
    }


    public function index()
    {
        $artikel = $this->artikelModel->getArtikel()->orderBy('id_artikel', 'DESC')->limit(3)->find();

        if (logged_in(true)) {
            if (in_groups('admin')) {
                return redirect()->to('admin/home/index');
            } else if (in_groups('user')) {
                return redirect()->to('user/home/index');
            }
        }
        $data = [
            'title' => 'Home',
            'artikel' => $artikel
        ];
        return view('index', $data);
    }

    public function login()
    {
        if (logged_in(true)) {
            if (in_groups('admin')) {
                return redirect()->to('admin/home/index');
            } else if (in_groups('user')) {
                return redirect()->to('user/home/index');
            }
        }
        $data = [
            'title' => 'Login',
            'config' => $this->config
        ];
        return view('auth/login', $data);
    }



    public function register()
    {
        if (logged_in(true)) {
            if (in_groups('admin')) {
                return redirect()->to('admin/home/index');
            } else if (in_groups('user')) {
                return redirect()->to('user/home/index');
            }
        }
        $data = [
            'title' => 'Daftar',
            'config' => $this->config
        ];
        return view('auth/register', $data);
    }
}