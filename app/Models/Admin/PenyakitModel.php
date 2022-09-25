<?php

namespace App\Models\Admin;

use CodeIgniter\Model;

class PenyakitModel extends Model
{

    protected $table = 'penyakit';
    protected $useTimestamps = true;
    protected $allowedFields = ['nama', 'deskripsi', 'saran', 'gambar'];
    protected $primaryKey = 'id_penyakit';
    public function getPenyakit($id = false)
    {

        if ($id == false) {
            return $this->findAll();
        } else if (is_array($id)) {
            return $this
                ->table('penyakit')
                ->whereIn('id_penyakit', $id)->find();
        }
        return $this->where(['id_penyakit' => $id])->first();;
    }

    public function search($keyword)
    {
        return $this->table('penyakit')->like('nama', $keyword)->orLike('deskripsi', $keyword)->orLike('saran', $keyword);
    }

    public function checkPenyakit($id)
    {
        return $this->where('basis_pengetahuan.id_penyakit', $id)->from('basis_pengetahuan')->countAllResults();
    }
}