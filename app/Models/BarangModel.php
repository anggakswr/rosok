<?php

namespace App\Models;

use CodeIgniter\Model;

class BarangModel extends Model
{
    protected $table = 'barang';
    protected $useTimestamps = true;
    protected $allowedFields = ['users_id', 'foto', 'nama', 'slug', 'kategori', 'deskripsi', 'harga', 'berat'];

    public function getBarang($slug = false)
    {
        if (!$slug) {
            return $this->findAll();
        }

        return $this->where(['slug' => $slug])->first();
    }

    public function getBarangUser($users_id)
    {
        return $this->where('users_id', $users_id)->findAll();
    }
}
