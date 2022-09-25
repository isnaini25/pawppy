<?php

namespace App\Models\Admin;

use CodeIgniter\Model;

class BasisPengetahuanModel extends Model
{

    protected $table = 'basis_pengetahuan';
    protected $useTimestamps = true;
    protected $allowedFields = ['id_penyakit', 'id_gejala', 'cf'];
    protected $primaryKey = 'id_pengetahuan';

    public function getBasisPengetahuan($id = false)
    {

        if ($id == false) {
            return $this->table('basis_pengetahuan')
                ->join('penyakit', 'penyakit.id_penyakit = basis_pengetahuan.id_penyakit')
                ->join('gejala', 'gejala.id_gejala = basis_pengetahuan.id_gejala');
        } else if (is_array($id) == true) {

            return $this->table('basis_pengetahuan')
                ->whereIn('id_gejala', $id)->find();
        } else {

            return $this->table('basis_pengetahuan')
                ->join('penyakit', 'penyakit.id_penyakit = basis_pengetahuan.id_penyakit')
                ->join('gejala', 'gejala.id_gejala = basis_pengetahuan.id_gejala')
                ->where(['basis_pengetahuan.id_penyakit' => $id])->find();
        }
    }

    public function countBasisPengetahuan($keyword = false)
    {

        if ($keyword == false) {
            return $this->table('basis_pengetahuan')
                ->join('penyakit', 'penyakit.id_penyakit = basis_pengetahuan.id_penyakit')
                ->select('*, COUNT("basis_pengetahuan.id_penyakit") AS jumlah')
                ->groupBy('basis_pengetahuan.id_penyakit')
                ->orderBy('basis_pengetahuan.id_penyakit', 'DESC')->find();
        } else {
            return $this->table('basis_pengetahuan')
                ->join('penyakit', 'penyakit.id_penyakit = basis_pengetahuan.id_penyakit')
                ->join('gejala', 'gejala.id_gejala = basis_pengetahuan.id_gejala')
                ->select('*, COUNT("basis_pengetahuan.id_penyakit") AS jumlah')
                ->groupBy('basis_pengetahuan.id_penyakit')
                ->like('penyakit.nama', $keyword)->orLike('penyakit.deskripsi', $keyword)->orLike('penyakit.saran', $keyword)->orLike('gejala.keterangan', $keyword);
        }
    }

    public function getGejala($id = false)
    {


        return $this->table('basis_pengetahuan')
            ->join('penyakit', 'penyakit.id_penyakit = basis_pengetahuan.id_penyakit')
            ->join('gejala', 'gejala.id_gejala = basis_pengetahuan.id_gejala')
            ->where(['basis_pengetahuan.id_penyakit' => $id])->findAll();
    }

    public function search($keyword)
    {
        return $this->table('basis_pengetahuan')
            ->join('penyakit', 'penyakit.id_penyakit = basis_pengetahuan.id_penyakit')
            ->join('gejala', 'gejala.id_gejala = basis_pengetahuan.id_gejala')
            ->like('nama', $keyword)->orLike('deskripsi', $keyword)->orLike('saran', $keyword)->orLike('keterangan', $keyword);
    }


    // public function check($id_penyakit = false, $id_gejala = false, $id = false)
    // {
    //     $array = ['id_gejala' => $id_gejala, 'id_penyakit' => $id_penyakit];
    //     return $this->table('basis_pengetahuan')
    //         ->where($array)
    //         ->whereNotIn('id_pengetahuan', [$id])
    //         ->countAllResults(false);
    // }
}