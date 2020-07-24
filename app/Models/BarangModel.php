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
            return $this->orderBy('id', 'desc')->findAll();
        }

        return $this->where(['slug' => $slug])->first();
    }

    public function getBarangUser($users_id)
    {
        return $this->where('users_id', $users_id)->orderBy('id', 'desc');
    }

    public function getBarangKategori($kategori)
    {
        return $this->where('kategori', $kategori)->orderBy('id', 'desc');
    }

    public function searchBarang($keyword)
    {
        return $this->like('nama', $keyword)->orderBy('id', 'desc');
    }
}
