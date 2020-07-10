<?php

namespace App\Controllers;

use App\Models\BarangModel;

class Barang extends BaseController
{
    protected $model;
    public function __construct()
    {
        $this->model = new BarangModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Daftar Barang',
            'barang' => $this->model->getBarang()
        ];
        return view('barang/index', $data);
    }

    public function detail($slug)
    {
        $data = [
            'title' => 'Detail Barang',
            'barang' => $this->model->getBarang($slug)
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
            'foto' => [
                'rules' => 'uploaded[foto]|max_size[foto,1024]|is_image[foto]|mime_in[foto,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'uploaded' => 'Foto barang harus diisi.',
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
        $fileFoto = $this->request->getFile('foto');
        $fileFoto->move('img/foto-barang-user');

        $this->model->save([
            'foto' => $fileFoto->getName(),
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
        $barang = $this->model->find($id);

        // hapus file gambar dr server
        unlink('img/foto-barang-user/' . $barang['foto']);

        // hapus data dr db
        $this->model->delete($id);
        session()->setFlashdata('pesan', 'Barang berhasil dihapus.');

        return redirect()->to('/barang');
    }

    public function edit($slug)
    {
        $data = [
            'title' => 'Edit Barang',
            'validation' => \Config\Services::validation(),
            'barang' => $this->model->getBarang($slug)
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
        $barang = $this->model->find($id);

        // ambil gambar baru jika ada
        $fileFoto = $this->request->getFile('foto');

        // jika tdk ada foto yg dipilih
        if ($fileFoto->getError() == 4) {
            // pakai nama foto lama
            $foto = $barang['foto'];
        } else {
            // pakai nama foto baru
            $foto = $fileFoto->getName();
            // pindahkan file foto baru ke folder img/foto-barang-user
            $fileFoto->move('img/foto-barang-user');
            // hapus file lama
            unlink('img/foto-barang-user/' . $barang['foto']);
        }

        $this->model->save([
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
