<?php

namespace App\Controllers;

use App\Models\BarangModel;
use App\Models\FotoModel;

class Barang extends BaseController
{
    protected $barangModel;
    public function __construct()
    {
        $this->barangModel = new BarangModel();
        $this->fotoModel = new FotoModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Daftar Barang',
            'barang' => $this->barangModel->getBarang()
        ];
        return view('barang/index', $data);
    }

    public function detail($slug)
    {
        $data = [
            'title' => 'Detail Barang',
            'barang' => $this->barangModel->getBarang($slug)
        ];

        // jika barang tdk ad di tbl
        if (empty($data['barang'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException("Barang {$slug} tidak ditemukan.");
        }

        return view('barang/detail', $data);
    }

    public function create()
    {
        $data = [
            'title' => 'Tambah Barang',
            'validation' => \Config\Services::validation()
        ];

        return view('barang/create', $data);
    }

    public function save()
    {
        // jika field nama tdk diisi
        if (!$this->validate([
            'foto[0]' => [
                'rules' => 'uploaded[foto.0]|max_size[foto.0,1024]|is_image[foto.0]|mime_in[foto.0,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'uploaded' => 'Foto barang harus diisi.',
                    'max_size' => 'Ukuran foto harus kurang dari 1 MB.',
                    'is_image' => 'File bukan gambar.',
                    'mime_in' => 'File bukan gambar.'
                ]
            ],
            'foto[1]' => [
                'rules' => 'max_size[foto.1,1024]|is_image[foto.1]|mime_in[foto.1,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'max_size' => 'Ukuran foto harus kurang dari 1 MB.',
                    'is_image' => 'File bukan gambar.',
                    'mime_in' => 'File bukan gambar.'
                ]
            ],
            'foto[2]' => [
                'rules' => 'max_size[foto.2,1024]|is_image[foto.2]|mime_in[foto.2,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'max_size' => 'Ukuran foto harus kurang dari 1 MB.',
                    'is_image' => 'File bukan gambar.',
                    'mime_in' => 'File bukan gambar.'
                ]
            ],
            'foto[3]' => [
                'rules' => 'max_size[foto.3,1024]|is_image[foto.3]|mime_in[foto.3,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'max_size' => 'Ukuran foto harus kurang dari 1 MB.',
                    'is_image' => 'File bukan gambar.',
                    'mime_in' => 'File bukan gambar.'
                ]
            ],
            'foto[4]' => [
                'rules' => 'max_size[foto.4,1024]|is_image[foto.4]|mime_in[foto.4,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'max_size' => 'Ukuran foto harus kurang dari 1 MB.',
                    'is_image' => 'File bukan gambar.',
                    'mime_in' => 'File bukan gambar.'
                ]
            ],
            'nama' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Nama barang harus diisi.'
                ]
            ]
        ])) {

            return redirect()->to('/barang/create')->withInput();
        }

        // taruh gambar ke folder
        $fileFoto = $this->request->getFileMultiple('foto');
        foreach ($fileFoto as $foto) {
            $newName = $foto->getRandomName();
            $foto->move('img/uploads/barang',$newName);
            $this->fotoModel->save([
                'slug' => url_title($this->request->getPost('nama'), '-', true),
                'foto' => $newName
            ]);
        }

        $this->barangModel->save([
            'nama' => $this->request->getPost('nama'),
            'slug' => url_title($this->request->getPost('nama'), '-', true),
            'kategori' => $this->request->getPost('kategori'),
            'deskripsi' => $this->request->getPost('deskripsi'),
            'harga' => $this->request->getPost('harga'),
            'berat' => $this->request->getPost('berat')
        ]);

        session()->setFlashdata('pesan', 'Barang berhasil ditambahkan.');

        return redirect()->to('/barang');
    }

    public function delete($id)
    {
        // ambil data barang
        $barang = $this->barangModel->find($id);

        // hapus file gambar dr server
        unlink('img/uploads/barang/' . $barang['foto']);

        // hapus data dr db
        $this->barangModel->delete($id);
        session()->setFlashdata('pesan', 'Barang berhasil dihapus.');

        return redirect()->to('/barang');
    }

    public function edit($slug)
    {
        $data = [
            'title' => 'Edit Barang',
            'validation' => \Config\Services::validation(),
            'barang' => $this->barangModel->getBarang($slug)
        ];

        return view('barang/edit', $data);
    }

    public function update($id)
    {
        // jika field nama tdk diisi
        if (!$this->validate([
            'foto' => [
                'rules' => 'max_size[foto,1024]|is_image[foto]|mime_in[foto,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'max_size' => 'Ukuran foto harus kurang dari 1 MB.',
                    'is_image' => 'File bukan gambar.',
                    'mime_in' => 'File bukan gambar.'
                ]
            ],
            'nama' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Nama barang harus diisi.'
                ]
            ]
        ])) {

            return redirect()->to('/barang/edit/' . $this->request->getPost('slug'))->withInput();
        }

        // ambil data barang
        $barang = $this->barangModel->find($id);

        // ambil gambar baru jika ada
        $fileFoto = $this->request->getFile('foto');

        // jika tdk ada foto yg dipilih
        if ($fileFoto->getError() == 4) {
            // pakai nama foto lama
            $foto = $barang['foto'];
        } else {
            // pakai nama foto baru
            $foto = $fileFoto->getName();
            // pindahkan file foto baru ke folder img/uploads/barang
            $fileFoto->move('img/uploads/barang');
            // hapus file lama
            unlink('img/uploads/barang/' . $barang['foto']);
        }

        $this->barangModel->save([
            'foto' => $foto,
            'id' => $id,
            'nama' => $this->request->getPost('nama'),
            'slug' => url_title($this->request->getPost('nama'), '-', true),
            'kategori' => $this->request->getPost('kategori'),
            'deskripsi' => $this->request->getPost('deskripsi'),
            'harga' => $this->request->getPost('harga'),
            'berat' => $this->request->getPost('berat')
        ]);

        session()->setFlashdata('pesan', 'Barang berhasil diupdate.');

        return redirect()->to('/barang');
    }
}
