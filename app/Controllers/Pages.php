<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Jual Beli Barang Rosok'
        ];
        return view('pages/index', $data);
    }

    public function view($page = 'home')
    {
    }
}
