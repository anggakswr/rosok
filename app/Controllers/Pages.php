<?php

namespace App\Controllers;

use App\Models\BarangModel;

class Pages extends BaseController
{
    public function index()
    {
        $barangModel = new BarangModel();

        $data = [
            'title' => 'Jual Beli Barang Rosok',
            'botol' => $barangModel->getBarangKategori('Botol Plastik')->findAll(5),
            'kardus' => $barangModel->getBarangKategori('Kardus Indomie')->findAll(5),
            'besi' => $barangModel->getBarangKategori('Besi Kiloan')->findAll(5),
            'kain' => $barangModel->getBarangKategori('Kain Perca')->findAll(5)
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
}
