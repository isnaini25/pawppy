<?php

namespace App\Models\Admin;

use CodeIgniter\Model;

class GroupUserModel extends Model
{

    protected $table = 'auth_groups_users';
    protected $useTimestamps = false;
    protected $allowedFields = ['group_id', 'user_id'];

    public function getUser($id = false)
    {

        if ($id == false) {
            return $this->table('auth_groups_users')
                ->join('auth_groups', 'auth_groups.id = auth_groups_users.group_id')
                ->join('users', 'users.id = auth_groups_users.user_id');
        }
        // return $this->table('users')->join('auth_groups_users', 'users.id = auth_groups_users.user_id')->where(['id' => $id])->first();;
    }

    public function search($keyword)
    {
        return $this->table('auth_groups_users')
            ->join('auth_groups', 'auth_groups.id = auth_groups_users.group_id')
            ->join('users', 'users.id = auth_groups_users.user_id')
            ->like('fullname', $keyword)->orLike('email', $keyword)->orLike('username', $keyword);
    }
}