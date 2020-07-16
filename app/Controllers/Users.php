<?php

namespace App\Controllers;

use App\Models\UsersModel;

class Users extends BaseController
{
    public function __construct()
    {
        $this->usersModel = new UsersModel();
    }


    public function index()
    {
        $data = [
            'title' => 'Login'
        ];
        return view('users/index', $data);
    }

    public function daftar()
    {
        $data = [
            'title' => 'Daftar',
            'validation' => \Config\Services::validation(),
        ];

        if ($this->request->getMethod() == 'post') {
            // validation rules
            $rulesUsers = [
                'nama' => 'required|min_length[3]|max_length[20]',
                'email' => 'required|min_length[6]|max_length[50]|valid_email|is_unique[users.email]',
                'password' => 'required|min_length[8]|max_length[255]',
                'password2' => 'matches[password]'
            ];

            // jika ada input yg melanggar rules
            if (!$this->validate($rulesUsers)) {
                return redirect()->to('/users/daftar')->withInput();
            } else {
                // simpan user ke db
                $data = [
                    'nama' => $this->request->getPost('nama'),
                    'email' => $this->request->getPost('email'),
                    'password' => $this->request->getPost('password')
                ];
                $this->usersModel->save($data);
                session()->setFlashdata('pesan', 'Pendaftaran berhasil.');
                return redirect()->to('/users');
            }
        }

        return view('users/daftar', $data);
    }
}
