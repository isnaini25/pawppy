<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\Admin\ArtikelModel;
use App\Models\Admin\PenyakitModel;
use App\Models\DiagnosisModel;
use App\Models\ProfileModel;

class Home extends BaseController
{
    protected $artikelModel;
    protected $profileModel;
    protected $diagnosisModel;
    protected $penyakitModel;

    public function __construct()
    {
        $this->artikelModel = new ArtikelModel();
        $this->profileModel = new ProfileModel();
        $this->diagnosisModel = new DiagnosisModel();
        $this->penyakitModel = new PenyakitModel();
    }
    public function index()
    {
        $data = [
            'title'              => 'Dashboard',
            'artikel'            => count($this->artikelModel->getArtikel()->findAll()),
            'users'              => count($this->profileModel->findGeneralUser()),
            'diagnosis'          => count($this->diagnosisModel->findDiagnosis()),
            'penyakit'           => count($this->penyakitModel->getPenyakit()),
            'latestDiagnosis'    => $this->diagnosisModel->getDiagnosis()->limit(5)->find(),
            'latestArtikel'    => $this->artikelModel->getArtikel()->limit(5)->find(),
        ];

        return view('admin/index', $data);
    }
}