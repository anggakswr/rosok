<?php

namespace App\Controllers;

use App\Models\UsersModel;
use App\Models\LokasiModel;

class Users extends BaseController
{
    public function __construct()
    {
        $this->usersModel = new UsersModel();
        $this->lokasiModel = new LokasiModel();
    }

    // --------------------------------------------------------

    public function index()
    {
        $data = [
            'title' => 'Login',
            'validation' => \Config\Services::validation()
        ];

        if ($this->request->getMethod() == 'post') {
            // validation rules
            $rulesUsers = [
                'email' => 'required|min_length[6]|max_length[50]|valid_email',
                'password' => 'required|min_length[8]|max_length[255]|validateUser[email,password]'
            ];

            $errors = [
                'email' => [
                    'required' => 'Email harus diisi.',
                    'min_length' => 'Email terlalu pendek.',
                    'max_length' => 'Email terlalu panjang.',
                    'valid_email' => 'Email tidak valid.'
                ],
                'password' => [
                    'required' => 'Password harus diisi.',
                    'min_length' => 'Password terlalu pendek.',
                    'max_length' => 'Password terlalu panjang.',
                    'validateUser' => 'Password tidak atau password salah.'
                ]
            ];

            // jika ada input yg melanggar rules
            if (!$this->validate($rulesUsers, $errors)) {
                return redirect()->to('/users')->withInput();
            } else {
                $user = $this->usersModel->where('email', $this->request->getPost('email'))->first();

                // assign session
                $this->setUserSession($user);

                // redirect to homepage
                return redirect()->to('/');
            }
        }

        return view('users/index', $data);
    }

    // --------------------------------------------------------

    private function setUserSession($user)
    {
        $data = [
            'id' => $user['id'],
            'username' => $user['username'],
            'email' => $user['email'],
            'isLoggedIn' => true
        ];

        session()->set($data);
        return true;
    }

    // --------------------------------------------------------

    public function daftar()
    {
        $data = [
            'title' => 'Daftar',
            'validation' => \Config\Services::validation(),
            'lokasi' => $this->lokasiModel->findAll()
        ];

        if ($this->request->getMethod() == 'post') {
            // validation rules
            $rulesUsers = [
                'foto' => 'max_size[foto,1024]|is_image[foto]|mime_in[foto,image/jpg,image/jpeg,image/png]',
                'username' => 'required|min_length[3]|max_length[20]|is_unique[users.username]',
                'lokasi' => 'required|is_not_unique[lokasi.nama]',
                'email' => 'required|min_length[6]|max_length[50]|valid_email|is_unique[users.email]',
                'password' => 'required|min_length[8]|max_length[255]',
                'password2' => 'matches[password]'
            ];

            // ambil foto yg ad diinput jg ad
            // $foto = $this->request->getFile('foto');

            // jika ada foto yg diupload
            if ($img = $this->request->getFile('foto')) {
                if ($img->isValid() && !$img->hasMoved()) {
                    $img->move(WRITEPATH . 'img/uploads/user');
                    $namaFoto = $img->getName();
                }
            } else {
                $namaFoto = 'user.png';
            }

            // jika tdk ad foto profil yg di upload
            // if ($foto->getError() == 4) {
            //     $namaFoto = 'user.png';
            // } else {
            //     $foto->move('img/uploads/user');
            //     $namaFoto = $foto->getName();
            // }

            // taruh gambar ke folder
            // if (!empty($foto)) {
            //     $foto->move('img/uploads/user');
            //     $namaFoto = $foto->getName();
            // } else {
            //     $namaFoto = 'user.png';
            // }

            // jika ada input yg melanggar rules
            if (!$this->validate($rulesUsers)) {
                return redirect()->to('/users/daftar')->withInput();
            } else {
                // simpan user ke db
                $data = [
                    'foto' => $namaFoto,
                    'username' => $this->request->getPost('username'),
                    'lokasi' => $this->request->getPost('lokasi'),
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

    // --------------------------------------------------------

    public function profile()
    {
        $data = [
            'title' => 'Daftar',
            'user' => $this->usersModel->where('id', session()->get('id'))->first(),
            'validation' => \Config\Services::validation()
        ];

        if ($this->request->getMethod() == 'post') {
            // validation rules
            $rulesUsers = [
                'username' => 'required|min_length[3]|max_length[20]'
            ];

            // jika password diisi
            if ($this->request->getPost('password') != '') {
                // tambahkan rules utk password
                $rulesUsers['password'] = 'required|min_length[8]|max_length[255]';
                $rulesUsers['password2'] = 'matches[password]';
            }

            // jika ada input yg melanggar rules
            if (!$this->validate($rulesUsers)) {
                return redirect()->to('/users/daftar')->withInput();
            } else {
                // simpan user ke db
                $data = [
                    'id' => session()->get('id'),
                    'username' => $this->request->getPost('username')
                ];

                // jika password diisi
                if ($this->request->getPost('password') != '') {
                    // update password ke db
                    $data['password'] = $this->request->getPost('password');
                }

                $this->usersModel->save($data);
                session()->setFlashdata('pesan', 'Update profile berhasil.');
                return redirect()->to('/users/profile');
            }
        }

        return view('users/profile', $data);
    }

    // --------------------------------------------------------

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/');
    }
}
