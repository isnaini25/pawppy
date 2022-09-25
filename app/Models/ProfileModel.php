<?php

namespace App\Models;

use CodeIgniter\Model;

class ProfileModel extends Model
{

    protected $table = 'users';
    protected $useTimestamps = true;
    protected $allowedFields = ['email', 'username', 'fullname', 'user_image', 'password_hash'];
    protected $primaryKey = 'id';



    public function getUser($id = false)
    {

        if ($id == false) {
            return $this->table('users')
                ->join('auth_groups_users', 'users.id = auth_groups_users.user_id');
        }
        return $this->table('users')->join('auth_groups_users', 'users.id = auth_groups_users.user_id')->where(['id' => $id])->first();;
    }

    public function findGeneralUser()
    {
        return $this->table('users')->join('auth_groups_users', 'users.id = auth_groups_users.user_id')->where(['group_id' => 2])->findAll();;
    }
}