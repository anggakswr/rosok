<?php

namespace App\Controllers;

use App\Models\UsersModel;
use App\Models\LokasiModel;
use App\Models\SukaPenjualModel;

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
                    'validateUser' => 'Username atau password salah.'
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
            'foto' => $user['foto'],
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
                'username' => 'required|min_length[3]|max_length[20]|is_unique[users.username]',
                'lokasi' => 'required|is_not_unique[lokasi.nama]',
                'email' => 'required|min_length[6]|max_length[50]|valid_email|is_unique[users.email]',
                'password' => 'required|min_length[8]|max_length[255]',
                'password2' => 'matches[password]'
            ];

            $errors = [
                'username' => [
                    'required' => 'Username harus diisi.',
                    'min_length' => 'Username terlalu pendek.',
                    'max_length' => 'Username terlalu panjang.',
                    'is_unique' => 'Username sudah ada.'
                ],
                'lokasi' => [
                    'required' => 'Lokasi harus diisi.',
                    'is_not_unique' => 'Lokasi tidak ada.'
                ],
                'email' => [
                    'required' => 'Email harus diisi.',
                    'min_length' => 'Email terlalu pendek.',
                    'max_length' => 'Email terlalu panjang.',
                    'valid_email' => 'Email tidak valid.'
                ],
                'password' => [
                    'required' => 'Password harus diisi.',
                    'min_length' => 'Password terlalu pendek.',
                    'max_length' => 'Password terlalu panjang.'
                ],
                'password2' => [
                    'matches' => 'Password tidak cocok.'
                ]
            ];

            // jika ada input yg melanggar rules
            if (!$this->validate($rulesUsers, $errors)) {
                return redirect()->to('/users/daftar')->withInput();
            } else {
                // simpan user ke db
                $data = [
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
            'title' => 'Edit Profile',
            'user' => $this->usersModel->where('id', session()->get('id'))->first(),
            'validation' => \Config\Services::validation(),
            'lokasi' => $this->lokasiModel->findAll()
        ];

        if ($this->request->getMethod() == 'post') {
            // validation rules
            $rulesUsers = [
                'foto' => 'max_size[foto,1024]|is_image[foto]|mime_in[foto,image/jpg,image/jpeg,image/png]',
                'username' => 'required|min_length[3]|max_length[20]',
                'lokasi' => 'required|is_not_unique[lokasi.nama]'
            ];

            // jika password diisi
            if ($this->request->getPost('password') != '') {
                // tambahkan rules utk password
                $rulesUsers['password'] = 'required|min_length[8]|max_length[255]';
                $rulesUsers['password2'] = 'matches[password]';
            }

            $errors = [
                'foto' => [
                    'max_size' => 'Ukuran foto harus dibawah 1MB.',
                    'is_image' => 'File bukan gambar.',
                    'mime_in' => 'Format gambar harus jpg, jpeg, atau png.'
                ],
                'username' => [
                    'required' => 'Username harus diisi.',
                    'min_length' => 'Username terlalu pendek.',
                    'max_length' => 'Username terlalu panjang.'
                ],
                'lokasi' => [
                    'required' => 'Lokasi harus diisi.',
                    'is_not_unique' => 'Lokasi tidak ada.'
                ],
                'email' => [
                    'required' => 'Email harus diisi.',
                    'min_length' => 'Email terlalu pendek.',
                    'max_length' => 'Email terlalu panjang.',
                    'valid_email' => 'Email tidak valid.'
                ],
                'password' => [
                    'required' => 'Password harus diisi.',
                    'min_length' => 'Password terlalu pendek.',
                    'max_length' => 'Password terlalu panjang.'
                ],
                'password2' => [
                    'matches' => 'Password tidak cocok.'
                ]
            ];

            // jika ada input yg melanggar rules
            if (!$this->validate($rulesUsers, $errors)) {
                return redirect()->to('/users/profile')->withInput();
            } else {
                // ambil foto yg ad diinput jg ad
                $foto = $this->request->getFile('foto');

                // jika ada foto yg diupload
                if ($foto->isValid() && !$foto->hasMoved()) {
                    $namaFoto = $foto->getName();
                    $foto->move('img/uploads/user');
                } else {
                    $namaFoto = session()->get('foto');
                }

                // simpan user ke db
                $data = [
                    'id' => session()->get('id'),
                    'foto' => $namaFoto,
                    'username' => $this->request->getPost('username'),
                    'lokasi' => $this->request->getPost('lokasi')
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

    // --------------------------------------------------------

    public function sukaPenjual($penjual_id)
    {
        // jika user sdh login
        if (session()->get('id') != null) {
            $sukaPenjualModel = new SukaPenjualModel();
            // cek apa brg sdh disukai / blm
            $cekSuka = $sukaPenjualModel
                ->where('penjual_id', $penjual_id)
                ->where('users_id', session()->get('id'))->first();


            // jika user sdh pernah like
            if ($cekSuka) {
                // kasih tau
                session()->setFlashdata('error', 'Penjual sudah pernah disukai.');
                return redirect()->to(previous_url());
            } else {
                // like brg
                $sukaPenjualModel->save([
                    'penjual_id' => $penjual_id,
                    'users_id' => session()->get('id')
                ]);
                session()->setFlashdata('pesan', 'Penjual telah disukai.');
                return redirect()->to(previous_url());
            }
        } else {
            // suruh login
            return redirect()->to('/users');
        }
    }

    // --------------------------------------------------------

    public function unsukaPenjual($cekSuka_id)
    {
        $sukaPenjualModel = new SukaPenjualModel();
        $sukaPenjualModel->delete($cekSuka_id);
        session()->setFlashdata('pesan', 'Batal suka penjual.');
        return redirect()->to(previous_url());
    }
}
