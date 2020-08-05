<?php

namespace App\Controllers;

use App\Models\BarangModel;
use App\Models\UsersModel;
use App\Models\KategoriModel;

class Pages extends BaseController
{
    public function index()
    {
        $barangModel = new BarangModel();

        $data = [
            'title' => 'Jual Beli Barang Rosok',
            'botol' => $barangModel->getBarangKategori('Botol Plastik')->findAll(6),
            'kardus' => $barangModel->getBarangKategori('Kardus Indomie')->findAll(6),
            'besi' => $barangModel->getBarangKategori('Besi Kiloan')->findAll(6),
            'kain' => $barangModel->getBarangKategori('Kain Perca')->findAll(6)
        ];

        return view('pages/index', $data);
    }

    public function cari()
    {
        // model yg dibutuhkan
        $barangModel = new BarangModel();
        $kategoriModel = new KategoriModel();

        // data yg diambil
        $keyword = $this->request->getGet('rosok');
        $hargaMaks = $this->request->getGet('hargaMaks');
        $hargaMin = $this->request->getGet('hargaMin');
        $kategori = $this->request->getGet('kategori');
        $urutkan = $this->request->getGet('urutkan');

        // ambil brg dr db
        $barang = $barangModel
            ->searchBarang($keyword, $hargaMaks, $hargaMin, $kategori, $urutkan)
            ->paginate(100, 'barang');

        // data yg ditampilkan di view
        $data = [
            'title' => 'Jual ' . $keyword,
            'kategori' => $kategoriModel->orderBy('kategori', 'ASC')->findAll(),
            'barang' => $barang,
            'pager' => $barangModel->pager
        ];

        return view('pages/cari', $data);
    }

    public function tentang()
    {
        $data = [
            'title' => 'Tentang Rosok.com'
        ];
        return view('pages/tentang', $data);
    }

    public function kontak()
    {
        $data = [
            'title' => 'Kontak Rosok.com'
        ];
        return view('pages/kontak', $data);
    }

    public function bantuan()
    {
        $data = [
            'title' => 'Bantuan Rosok.com'
        ];
        return view('pages/bantuan', $data);
    }

    public function user($username)
    {
        $barangModel = new BarangModel();
        $usersModel = new UsersModel();

        $data = [
            'title' => $username,
            'user' => $usersModel->where('username', $username)->first()
        ];
        $data['barang'] = $barangModel->getBarangUser($data['user']['id'])->paginate(20, 'barang');
        $data['pager'] = $barangModel->pager;

        return view('pages/user', $data);
    }
}
