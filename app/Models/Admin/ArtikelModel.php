<?php

namespace App\Models\Admin;

use CodeIgniter\Model;

class ArtikelModel extends Model
{

    protected $table = 'artikel';
    protected $useTimestamps = true;
    protected $allowedFields = ['id_penulis', 'judul', 'teks', 'gambar'];
    protected $primaryKey = 'id_artikel';

    public function getArtikel($id = false)
    {

        if ($id == false) {
            return $this->table('artikel')
                ->select('*, artikel.created_at AS tanggal')
                ->join('users', 'artikel.id_penulis = users.id');
        }

        return $this->table('artikel')
            ->select('*, artikel.created_at AS tanggal')
            ->join('users', 'artikel.id_penulis = users.id')
            ->where(['id_artikel' => $id])->first();
    }

    public function recommendation($id)
    {
        return $this->table('artikel')
            ->select('*, artikel.created_at AS tanggal')
            ->join('users', 'artikel.id_penulis = users.id')
            ->where('id_artikel !=', $id);
    }
    public function search($keyword)
    {
        // $builder = $this->table('gejala');
        // $builder->like('keterangan', $keyword);
        // return $this->findAll();
        return $this->table('artikel')
            ->select('*, artikel.created_at AS tanggal')
            ->join('users', 'artikel.id_penulis = users.id')
            ->like('teks', $keyword)->orLike('judul', $keyword);
    }

    // public function checkGejala($id)
    // {
    //     return $this->where('basis_pengetahuan.id_gejala', $id)->from('basis_pengetahuan')->countAllResults();
    // }
}
