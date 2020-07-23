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

    public function view($page = 'home')
    {
    }
}
