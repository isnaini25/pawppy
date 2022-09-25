<?php

namespace App\Controllers\Admin;

use App\Models\Admin\GroupUserModel;
use App\Controllers\BaseController;
use App\Models\ProfileModel;


class Auth extends BaseController
{
    protected $profileModel;
    protected $groupUserModel;
    public function __construct()
    {
        $this->profileModel = new ProfileModel();
        $this->groupUserModel = new GroupUserModel();
    }



    public function index()
    {

        $currentPage = $this->request->getVar('page_profile') ? $this->request->getVar('page_profile') : 1;

        $keyword = $this->request->getVar('keyword');
        if ($keyword) {
            $profile = $this->groupUserModel->search($keyword)->paginate();
        } else {
            $profile = $this->groupUserModel->getUser()->orderBy('group_id', 'ASC')->paginate(10, 'profile');
        }

        $data = [
            'title' => 'Profile',
            'profile' => $profile,
            'pager' => $this->groupUserModel->pager,
            'currentPage' => $currentPage
        ];

        // dd($data);

        if (empty($profile)) {
            session()->setFlashdata('message_auth', 'Data tidak ditemukan');
        } else {
            session()->unmarkFlashdata('message_auth');
        }

        return view('admin/auth/index', $data);
    }

    public function update()
    {
        $id_profile = $this->request->getVar('id_user');
        $id_group = $this->request->getVar('role');

        // dd($id_group . " " . $id_profile);
        $this->groupUserModel->where('user_id', $id_profile)->set([
            'group_id' => $id_group
        ])->update();

        session()->setFlashdata('pesan', 'diubah');

        return redirect()->to('/admin/auth/index');
    }
}