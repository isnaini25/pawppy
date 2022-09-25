<?php

namespace App\Models\Admin;

use CodeIgniter\Model;

class GejalaModel extends Model
{

    protected $table = 'gejala';
    protected $useTimestamps = true;
    protected $allowedFields = ['keterangan'];
    protected $primaryKey = 'id_gejala';
    public function getGejala($id = false)
    {

        if ($id == false) {
            return $this->findAll();
        } else if (is_array($id)) {
            return $this
                ->table('gejala')
                ->whereIn('id_gejala', $id)->find();
        }
        return $this->where(['id_gejala' => $id])->first();;
    }

    public function search($keyword)
    {
        // $builder = $this->table('gejala');
        // $builder->like('keterangan', $keyword);
        // return $this->findAll();
        return $this->table('gejala')->like('keterangan', $keyword);
    }

    public function checkGejala($id)
    {
        return $this->where('basis_pengetahuan.id_gejala', $id)->from('basis_pengetahuan')->countAllResults();
    }
}
