<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ProfileModel;
use Myth\Auth\Password;

class Profile extends BaseController
{
    protected $profileModel;
    public function __construct()
    {
        $this->profileModel = new ProfileModel();
    }


    public function index()
    {

        $data = [
            'title' => 'Profil',
            'user' => $this->profileModel->getUser(user_id()),
            'validation' => \Config\Services::validation()
        ];

        return view('profile/index', $data);
    }


    public function password()
    {

        $data = [
            'title' => 'Ubah Kata Sandi',
            'user' => $this->profileModel->getUser(user_id()),
            'validation' => \Config\Services::validation()
        ];

        return view('profile/password', $data);
    }

    public function update($id_user)
    {
        $valid = $this->validate([
            'fullname' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Nama lengkap harus diisi',
                ]
            ],
            'gambar' => [
                'rules' => 'max_size[gambar,2048]|is_image[gambar]|mime_in[gambar,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'max_size' => 'Ukuran gambar terlau besar (Max.2MB)',
                    'is_image' => 'Yang Anda pilih bukan gambar',
                    'mime_in' => 'Yang Anda pilih bukan gambar'
                ]
            ]
        ]);

        if (!$valid) {
            return redirect()->to('/profile/index')->withInput();
        }

        $fileGambar = $this->request->getFile('gambar');
        $fileGambarLama = $this->request->getVar('gambarLama');

        //cek gambar, apakah tetap gambar lama
        if ($fileGambar->getError() == 4) {
            $namaGambar = $fileGambarLama;
        } else {
            //generate nama random
            $namaGambar = $fileGambar->getRandomName();
            //pindah gambar
            $fileGambar->move('img', $namaGambar);
            //hapus file lama

            if ($fileGambarLama != 'pict_user.jpg') {
                //hapus gambar
                unlink('img/' . $fileGambarLama);
            }
        }

        $this->profileModel->save([
            'id'             => $id_user,
            'email'          => $this->request->getVar('email'),
            'fullname'       => $this->request->getVar('fullname'),
            'user_image'     => $namaGambar,
        ]);

        session()->setFlashdata('pesan', 'diubah');

        return redirect()->to('profile/index');
    }

    public function changePassword($id)
    {
        $current_password = $this->request->getVar('current_password');
        $new_password = $this->request->getVar('new_password');
        $data['user'] = $this->profileModel->getUser($id);
        $valid = $this->validate([
            'new_password'  => [
                'rules'     => 'required|min_length[6]',
                'errors'    => [
                    'required'      => 'Kata sandi harus diisi',
                    'min_length'    => 'Kata sandi minimal 6 karakter',
                ]
            ],
            'repeat_password' => [
                'rules'       => 'required|min_length[6]|matches[new_password]',
                'errors'      => [
                    'required'      => 'Kata sandi harus diisi',
                    'min_length'    => 'Kata sandi minimal 6 karakter',
                    'matches'       => 'Kata sandi tidak cocok',
                ]
            ],
            'current_password' => [
                'rules'       => 'required',
                'errors'      => [
                    'required'      => 'Kata sandi harus diisi',
                ]
            ],

        ]);
        // dd($data['user']);
        if (!$valid) {
            return redirect()->to('/profile/password')->withInput();
        }

        if (!Password::verify($current_password, $data['user']['password_hash'])) {
            session()->setFlashdata('message', 'Kata sandi lama salah');
            return redirect()->to('/profile/password')->withInput();
        } else {
            $this->profileModel->save([
                'id'            => $id,
                'password_hash' => Password::hash($new_password),
            ]);

            session()->setFlashdata('pesan', 'diubah');
            return redirect()->to('/profile/password');
        }
    }
}