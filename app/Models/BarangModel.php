<?php

namespace App\Models;

use CodeIgniter\Model;

class BarangModel extends Model
{
    protected $table = 'barang';
    protected $useTimestamps = true;
    protected $allowedFields = ['nama', 'slug', 'kategori', 'deskripsi', 'harga', 'berat'];

    public function getBarang($slug = false)
    {
        if (!$slug) {
            return $this->findAll();
        }

        return $this->where(['slug' => $slug])->first();
    }
}
