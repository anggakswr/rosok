<?php

namespace App\Models;

use CodeIgniter\Model;

class BarangModel extends Model
{
    protected $table = 'barang';
    protected $useTimestamps = true;
    protected $allowedFields = ['users_id', 'foto', 'nama', 'slug', 'kategori', 'deskripsi', 'harga', 'berat'];

    // ------------------------------------------------

    public function getBarang($slug = false)
    {
        if (!$slug) {
            return $this->orderBy('id', 'DESC')->findAll();
        }

        return $this->where(['slug' => $slug])->first();
    }

    // ------------------------------------------------

    public function getBarangUser($users_id)
    {
        return $this->where('users_id', $users_id)->orderBy('id', 'DESC');
    }

    // ------------------------------------------------

    public function getBarangKategori($kategori)
    {
        return $this->where('kategori', $kategori)->orderBy('id', 'DESC');
    }

    // ------------------------------------------------

    public function searchBarang($keyword = null, $hargaMaks = null, $hargaMin = null, $kategori = null, $urutkan = null)
    {
        $query = $this;

        if ($keyword) {
            $query = $query->like('nama', $keyword);
        }

        if ($hargaMaks) {
            $query = $query->where('harga <=', $hargaMaks);
        }

        if ($hargaMin) {
            $query = $query->where('harga >=', $hargaMin);
        }

        if ($kategori) {
            $query = $query->where('kategori', $kategori);
        }

        if ($urutkan == 'Harga rendah ke tinggi') {
            return $query->orderBy('harga', 'ASC');
        } elseif ($urutkan == 'Harga tinggi ke rendah') {
            return $query->orderBy('harga', 'DESC');
        } else {
            return $query->orderBy('id', 'DESC');
        }
    }
}
