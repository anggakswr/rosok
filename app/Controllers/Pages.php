<?php

namespace App\Controllers;

use App\Models\BarangModel;
use App\Models\UsersModel;

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
        $barangModel = new BarangModel();
        $cari = $this->request->getGet('rosok');

        if ($cari) {
            $barang = $barangModel
                ->searchBarang($cari)
                ->paginate(100, 'barang');
        } else {
            $barang = $barangModel
                ->paginate(100, 'barang');
        }

        $data = [
            'title' => 'Jual ' . $cari,
            'barang' => $barang,
            'cari' => $cari,
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

    public function kategori($kategori)
    {
        $barangModel = new BarangModel();

        $data = [
            'title' => 'Jual ' . $kategori,
            'barang' => $barangModel->getBarangKategori($kategori)->paginate(100, 'barang'),
            'pager' => $barangModel->pager
        ];

        return view('pages/cari', $data);
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
