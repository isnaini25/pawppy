<?php

namespace App\Models;

use CodeIgniter\Model;

class DiagnosisModel extends Model
{

    protected $table = 'diagnosis';
    protected $useTimestamps = true;
    protected $allowedFields = ['id_user', 'penyakit', 'gejala', 'id_hasil', 'nilai'];
    protected $primaryKey = 'id_diagnosis';

    public function getData()
    {

        // mengambil satu id terakhir yg disimpan
        return $this->table('diagnosis')
            ->select('*, diagnosis.created_at AS tanggal')
            ->join('penyakit', 'penyakit.id_penyakit = diagnosis.id_hasil')
            ->orderBy('id_diagnosis', 'DESC')->first();
    }

    public function getHistory($id)
    {

        return $this->table('diagnosis')
            ->select('*, diagnosis.created_at AS tanggal')
            ->join('penyakit', 'penyakit.id_penyakit = diagnosis.id_hasil')
            ->orderBy('id_diagnosis', 'DESC')->where(['id_user' => $id])->find();
    }

    public function getHistoryDetail($id)
    {
        return $this->table('diagnosis')
            ->select('*, diagnosis.created_at AS tanggal')
            ->join('penyakit', 'penyakit.id_penyakit = diagnosis.id_hasil')->join('users', 'users.id = diagnosis.id_user', 'left')
            ->orderBy('id_diagnosis', 'DESC')
            ->where(['id_diagnosis' => $id])->first();
    }

    public function findDiagnosis()
    {
        return $this->table('diagnosis')->findAll();
    }

    public function getDiagnosis()
    {

        return $this->table('diagnosis')
            ->select('*, diagnosis.created_at AS tanggal')
            ->join('penyakit', 'penyakit.id_penyakit = diagnosis.id_hasil')
            ->join('users', 'users.id = diagnosis.id_user', 'left')
            ->orderBy('id_diagnosis', 'DESC');
    }
    // public function getPenyakit($id = false)
    // {

    //     if ($id == false) {
    //         return $this->findAll();
    //     }
    //     return $this->where(['id_penyakit' => $id])->first();;
    // }

    // public function search($keyword)
    // {
    //     return $this->table('penyakit')->like('nama', $keyword)->orLike('deskripsi', $keyword)->orLike('saran', $keyword);
    // }

    // public function checkPenyakit($id)
    // {
    //     return $this->where('basis_pengetahuan.id_gejala', $id)->from('basis_pengetahuan')->countAllResults();
    // }
}
