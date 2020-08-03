<?php

namespace App\Controllers;

use App\Models\BarangModel;
use App\Models\FotoModel;
use App\Models\KategoriModel;
use App\Models\UsersModel;
use App\Models\SukaBarangModel;
use App\Models\SukaPenjualModel;

class Barang extends BaseController
{
    protected $rulesBarang = [
        'nama' => [
            'rules' => 'required',
            'errors' => [
                'required' => 'Nama barang harus diisi.'
            ]
        ],
        'kategori' => [
            'rules' => 'required',
            'errors' => [
                'required' => 'Kategori harus diisi.'
            ]
        ],
        'deskripsi' => [
            'rules' => 'required|min_length[5]',
            'errors' => [
                'required' => 'Deskripsi harus diisi.',
                'min_length' => 'Deskripsi minimal 5 karakter.'
            ]
        ],
        'harga' => [
            'rules' => 'required|min_length[3]|numeric',
            'errors' => [
                'required' => 'Harga harus diisi.',
                'min_length' => 'Harga minimal 3 digit.',
                'numeric' => 'Harga harus angka.'
            ]
        ],
        'berat' => [
            'rules' => 'required|min_length[1]',
            'errors' => [
                'required' => 'Berat harus diisi.',
                'min_length' => 'Berat minimal 1 digit.'
            ]
        ]
    ];

    // --------------------------------------------------------

    public function __construct()
    {
        $this->barangModel = new BarangModel();
        $this->fotoModel = new FotoModel();

        for ($i = 1; $i < 5; $i++) {
            $this->rulesBarang += [
                'foto[' . $i . ']' => [
                    'rules' => 'max_size[foto.' . $i . ',1024]|is_image[foto.' . $i . ']|mime_in[foto.' . $i . ',image/jpg,image/jpeg,image/png]',
                    'errors' => [
                        'max_size' => 'Ukuran foto harus kurang dari 1 MB.',
                        'is_image' => 'File bukan gambar.',
                        'mime_in' => 'Format gambar harus jpg, jpeg, atau png.'
                    ]
                ]
            ];
        }
    }

    // --------------------------------------------------------

    public function index()
    {
        // model yg dibutuhkan
        $kategoriModel = new KategoriModel();

        // data yg diambil
        $keyword = $this->request->getPost('keyword');
        $hargaMaks = $this->request->getPost('hargaMaks');
        $hargaMin = $this->request->getPost('hargaMin');
        $kategori = $this->request->getPost('kategori');
        $urutkan = $this->request->getPost('urutkan');

        // ambil brg dr db
        $barang = $this->barangModel
            ->searchBarang($keyword, $hargaMaks, $hargaMin, $kategori, $urutkan)
            ->paginate(10, 'barang');

        // dd($barang);

        // data yg ditampilkan di view
        $data = [
            'title' => ($keyword) ? $keyword : 'Daftar Barang',
            'barang' => $barang,
            'pager' => $this->barangModel->pager,
            'kategori' => $kategoriModel->orderBy('kategori', 'ASC')->findAll()
        ];
        return view('barang/index', $data);
    }

    // --------------------------------------------------------

    public function detail($slug)
    {
        $usersModel = new UsersModel();
        $sukaBarangModel = new SukaBarangModel();
        $sukaPenjualModel = new SukaPenjualModel();

        $data = [
            'title' => 'Detail Barang',
            'foto' => $this->fotoModel->getFoto($slug)
        ];

        $data['barang'] = $this->barangModel->getBarang($slug);

        // jika barang tdk ad di db
        if (empty($data['barang'])) {
            return view('errors/error', [
                'error' => "Barang {$slug} tidak ditemukan.",
                'title' => "Barang {$slug} tidak ditemukan.",
                'barang' => $this->barangModel->findAll(6)
            ]);
        }

        $data['barangKategori'] = $this->barangModel
            ->getBarangKategori($data['barang']['kategori'])
            ->findAll(6);
        $data['user'] = $usersModel->find($data['barang']['users_id']);
        $data['cekSukaBarang'] = $sukaBarangModel
            ->where('barang_id', $data['barang']['id'])
            ->where('users_id', session()->get('id'))->first();
        $data['jumlahSukaBarang'] = $sukaBarangModel->where('barang_id', $data['barang']['id'])->countAllResults();
        $data['cekSukaUser'] = $sukaPenjualModel
            ->where('penjual_id', $data['user']['id'])
            ->where('users_id', session()->get('id'))->first();
        $data['jumlahSukaUser'] = $sukaPenjualModel->where('penjual_id', $data['user']['id'])->countAllResults();

        return view('barang/detail', $data);
    }

    // --------------------------------------------------------

    public function tambah()
    {
        $kategoriModel = new KategoriModel();

        $data = [
            'title' => 'Tambah Barang',
            'validation' => \Config\Services::validation(),
            'kategori' => $kategoriModel->findAll()
        ];

        return view('barang/tambah', $data);
    }

    // --------------------------------------------------------

    public function save()
    {
        // menambah rules
        $this->rulesBarang['foto[0]'] = [
            'rules' => 'uploaded[foto.0]|max_size[foto.0,1024]|is_image[foto.0]|mime_in[foto.0,image/jpg,image/jpeg,image/png]',
            'errors' => [
                'uploaded' => 'Foto barang harus diisi.',
                'max_size' => 'Ukuran foto harus kurang dari 1 MB.',
                'is_image' => 'File bukan gambar.',
                'mime_in' => 'Format gambar harus jpg, jpeg, atau png.'
            ]
        ];

        // cek apa nama barang sdh ad atau blm
        $cekNama = $this->barangModel->where(['nama', $this->request->getPost('nama')])->countAllResults();
        if ($cekNama !== 0) {
            // jika nama sdh ad, modifikasi slug (ditambah angka)
            $slug = url_title($this->request->getPost('nama'), '-', true) . '-' . $cekNama;
        } else {
            // jika nama blm ada slug tdk dimodifikasi
            $slug = url_title($this->request->getPost('nama'), '-', true);
        }

        // jika ada input yg melanggar rules
        if (!$this->validate($this->rulesBarang)) {
            return redirect()->to('/barang/tambah')->withInput();
        }

        // taruh gambar ke folder
        $fileFoto = $this->request->getFileMultiple('foto');
        foreach ($fileFoto as $foto) {
            if ($foto->isValid() && !$foto->hasMoved()) {
                $foto->move('img/uploads/barang');
                $this->fotoModel->save([
                    'slug' => $slug,
                    'foto' => $foto->getName()
                ]);
            }
        }

        $this->barangModel->save([
            'users_id' => session()->get('id'),
            'foto' => $fileFoto[0]->getName(),
            'nama' => $this->request->getPost('nama'),
            'slug' => $slug,
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

        // user hanya boleh menghapus barangnya sendiri
        if ($barang['users_id'] == session()->get('id')) {
            // hapus data barang dr db
            $this->barangModel->delete($id);
        } else {
            session()->setFlashdata('error', 'Tidak bisa menghapus barang orang lain.');
            return redirect()->to('/barang');
        }

        session()->setFlashdata('pesan', 'Barang berhasil dihapus.');
        return redirect()->to('/barang');
    }

    // --------------------------------------------------------

    public function edit($slug)
    {
        $kategoriModel = new KategoriModel();

        $data = [
            'title' => 'Edit Barang',
            'validation' => \Config\Services::validation(),
            'barang' => $this->barangModel->getBarang($slug),
            'foto' => $this->fotoModel->getFoto($slug),
            'kategori' => $kategoriModel->findAll()
        ];

        return view('barang/edit', $data);
    }

    // --------------------------------------------------------

    public function update($id)
    {
        $this->rulesBarang['foto[0]'] = [
            'rules' => 'max_size[foto.0,1024]|is_image[foto.0]|mime_in[foto.0,image/jpg,image/jpeg,image/png]',
            'errors' => [
                'uploaded' => 'Foto barang harus diisi.',
                'max_size' => 'Ukuran foto harus kurang dari 1 MB.',
                'is_image' => 'File bukan gambar.',
                'mime_in' => 'Format gambar harus jpg, jpeg, atau png.'
            ]
        ];

        // jika ada input yg melanggar rules
        if (!$this->validate($this->rulesBarang)) {
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
            'users_id' => session()->get('id'),
            'nama' => $this->request->getPost('nama'),
            'slug' => $barang['slug'],
            'kategori' => $this->request->getPost('kategori'),
            'deskripsi' => $this->request->getPost('deskripsi'),
            'harga' => $this->request->getPost('harga'),
            'berat' => $this->request->getPost('berat')
        ]);

        session()->setFlashdata('pesan', 'Barang berhasil diupdate.');
        return redirect()->to('/barang');
    }

    // --------------------------------------------------------

    public function sukaBarang($barang_id)
    {
        // jika user sdh login
        if (session()->get('id') != null) {
            $sukaBarangModel = new SukaBarangModel();
            // cek apa brg sdh disukai / blm
            $cekSuka = $sukaBarangModel
                ->where('barang_id', $barang_id)
                ->where('users_id', session()->get('id'))->first();

            // jika user sdh pernah like
            if ($cekSuka) {
                // kasih tau
                session()->setFlashdata('error', 'Barang sudah pernah disukai.');
                return redirect()->to(previous_url());
            } else {
                // like brg
                $sukaBarangModel->save([
                    'barang_id' => $barang_id,
                    'users_id' => session()->get('id')
                ]);
                session()->setFlashdata('pesan', 'Barang telah disukai.');
                return redirect()->to(previous_url());
            }
        } else {
            // suruh login
            return redirect()->to('/users');
        }
    }

    // --------------------------------------------------------

    public function unsukaBarang($cekSuka_id)
    {
        $sukaBarangModel = new SukaBarangModel();
        $sukaBarangModel->delete($cekSuka_id);
        session()->setFlashdata('pesan', 'Batal suka barang.');
        return redirect()->to(previous_url());
    }
}
