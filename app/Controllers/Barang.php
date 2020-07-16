<?php

namespace App\Controllers;

use App\Models\BarangModel;
use App\Models\FotoModel;
use App\Models\KategoriModel;

class Barang extends BaseController
{
    protected $rulesBarang = [
        'nama' => [
            'rules' => 'required',
            'errors' => [
                'required' => 'Nama barang harus diisi.'
            ]
        ]
    ];

    // --------------------------------------------------------

    public function __construct()
    {
        $this->barangModel = new BarangModel();
        $this->fotoModel = new FotoModel();
        $this->kategoriModel = new KategoriModel();

        for ($i = 1; $i < 5; $i++) {
            $this->rulesBarang += [
                'foto[' . $i . ']' => [
                    'rules' => 'max_size[foto.' . $i . ',1024]|is_image[foto.' . $i . ']|mime_in[foto.' . $i . ',image/jpg,image/jpeg,image/png]',
                    'errors' => [
                        'max_size' => 'Ukuran foto harus kurang dari 1 MB.',
                        'is_image' => 'File bukan gambar.',
                        'mime_in' => 'File bukan gambar.'
                    ]
                ]
            ];
        }
    }

    // --------------------------------------------------------

    public function index()
    {
        $data = [
            'title' => 'Daftar Barang',
            'barang' => $this->barangModel->getBarang()
        ];
        return view('barang/index', $data);
    }

    // --------------------------------------------------------

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

    // --------------------------------------------------------

    public function create()
    {
        $data = [
            'title' => 'Tambah Barang',
            'validation' => \Config\Services::validation(),
            'kategori' => $this->kategoriModel->findAll()
        ];

        return view('barang/create', $data);
    }

    // --------------------------------------------------------

    public function save()
    {
        $rulesTmbBrg = $this->rulesBarang;
        $rulesTmbBrg += [
            'foto[0]' => [
                'rules' => 'uploaded[foto.0]|max_size[foto.0,1024]|is_image[foto.0]|mime_in[foto.0,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'uploaded' => 'Foto barang harus diisi.',
                    'max_size' => 'Ukuran foto harus kurang dari 1 MB.',
                    'is_image' => 'File bukan gambar.',
                    'mime_in' => 'File bukan gambar.'
                ]
            ]
        ];

        // jika ada input yg melanggar rules
        if (!$this->validate($rulesTmbBrg)) {
            return redirect()->to('/barang/create')->withInput();
        }

        // taruh gambar ke folder
        $fileFoto = $this->request->getFileMultiple('foto');
        foreach ($fileFoto as $foto) {
            if ($foto->isValid() && !$foto->hasMoved()) {
                $foto->move('img/uploads/barang');
                $this->fotoModel->save([
                    'slug' => url_title($this->request->getPost('nama'), '-', true),
                    'foto' => $foto->getName()
                ]);
            }
        }

        $this->barangModel->save([
            'foto' => $fileFoto[0]->getName(),
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

    // --------------------------------------------------------

    public function delete($id)
    {
        // ambil data barang
        $barang = $this->barangModel->find($id);

        // ambil foto barang
        $fotoBarang = $this->fotoModel->getFoto($barang['slug']);

        foreach ($fotoBarang as $foto) {
            // hapus file gambar
            unlink('img/uploads/barang/' . $foto['foto']);
            // hapus nama foto dr db
            $this->fotoModel->delete($foto['id']);
        }

        // hapus data barang dr db
        $this->barangModel->delete($id);

        session()->setFlashdata('pesan', 'Barang berhasil dihapus.');
        return redirect()->to('/barang');
    }

    // --------------------------------------------------------

    public function edit($slug)
    {
        $data = [
            'title' => 'Edit Barang',
            'validation' => \Config\Services::validation(),
            'barang' => $this->barangModel->getBarang($slug),
            'foto' => $this->fotoModel->getFoto($slug),
            'kategori' => $this->kategoriModel->findAll()
        ];

        return view('barang/edit', $data);
    }

    // --------------------------------------------------------

    public function update($id)
    {
        $rulesUpdBrg = $this->rulesBarang;
        $rulesUpdBrg += [
            'foto[0]' => [
                'rules' => 'max_size[foto.0,1024]|is_image[foto.0]|mime_in[foto.0,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'uploaded' => 'Foto barang harus diisi.',
                    'max_size' => 'Ukuran foto harus kurang dari 1 MB.',
                    'is_image' => 'File bukan gambar.',
                    'mime_in' => 'File bukan gambar.'
                ]
            ]
        ];

        // jika ada input yg melanggar rules
        if (!$this->validate($rulesUpdBrg)) {
            return redirect()->to('/barang/edit/' . $this->request->getPost('slug'))->withInput();
        }

        // ambil data barang
        $barang = $this->barangModel->find($id);

        // ambil data foto barang
        $fotoDB = $this->fotoModel->getFoto($barang['slug']);

        // ambil gambar baru jika ada
        $fotoInput = $this->request->getFileMultiple('foto');

        for ($i = 0; $i < 5; $i++) {
            // jika tdk ada foto yg dipilih
            if ($fotoInput[$i]->getError() == 4) {
                // pakai nama foto lama
                if (isset($fotoDB[$i]['foto'])) {
                    $upload = $fotoDB[$i]['foto'];
                } else {
                    break;
                }
            } else {
                // pakai nama foto baru
                $upload = $fotoInput[$i]->getName();
                // pindahkan file foto baru ke folder img/uploads/barang
                $fotoInput[$i]->move('img/uploads/barang');
                // hapus file lama jika ada
                if (isset($fotoDB[$i]['foto'])) {
                    unlink('img/uploads/barang/' . $fotoDB[$i]['foto']);
                }
            }

            // simpan / update di tbl foto
            if (isset($fotoDB[$i]['id'])) {
                $this->fotoModel->save([
                    'id' => $fotoDB[$i]['id'],
                    'slug' => url_title($this->request->getPost('nama'), '-', true),
                    'foto' => $upload
                ]);
            } else {
                $this->fotoModel->save([
                    'slug' => url_title($this->request->getPost('nama'), '-', true),
                    'foto' => $upload
                ]);
            }
        }

        // jika gambar pertama tdk diganti
        if ($fotoInput[0]->getError() == 4) {
            // pakai foto pertama dr db
            $foto = $fotoDB[0]['foto'];
        } else {
            // pakai yg baru
            $foto = $fotoInput[0]->getName();
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
