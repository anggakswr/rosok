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
            return $this->orderBy('id', 'desc')->findAll();
        }

        return $this->where(['slug' => $slug])->first();
    }

    // ------------------------------------------------

    public function getBarangUser($users_id)
    {
        return $this->where('users_id', $users_id)->orderBy('id', 'desc');
    }

    // ------------------------------------------------

    public function getBarangKategori($kategori)
    {
        return $this->where('kategori', $kategori)->orderBy('id', 'desc');
    }

    // ------------------------------------------------

    public function searchBarang($keyword = null, $hargaMaks = null, $hargaMin = null)
    {
        // ------------------------------------------------ percobaan 1
        // if ($keyword != null) {
        //     return $this->like('nama', $keyword)->orderBy('id', 'desc');
        // } elseif ($hargaMaks != null) {
        //     return $this->like('nama', $keyword)->orderBy('id', 'desc')
        //         ->where('harga', '<= ' . $hargaMaks);
        // } elseif ($hargaMaks != null && $hargaMin != null) {
        //     return $this->like('nama', $keyword)->orderBy('id', 'desc')
        //         ->where('harga', '<= ' . $hargaMaks)
        //         ->where('harga', '>= ' . $hargaMin);
        // }
        // ------------------------------------------------

        // ------------------------------------------------ percobaan 2
        $query = $this;

        if ($keyword) {
            $query = $query->like('nama', $keyword);
        }

        if ($hargaMaks) {
            $query = $query->where('harga <=', "$hargaMaks");
        }

        if ($hargaMin) {
            $query = $query->where('harga >=', "$hargaMin");
        }

        return $query->orderBy('id', 'DESC');
        // ------------------------------------------------

        // ------------------------------------------------ percobaan 3
        // $query = "SELECT * FROM `barang`
        //     WHERE `nama`
        //     LIKE '%$keyword%'
        //     ORDER BY `id` DESC";
        // return $this->select($query)->get();
        // ------------------------------------------------

        // ------------------------------------------------ percobaan 4
        // $query = "SELECT * FROM `barang`";

        // if ($keyword) {
        //     $query += " WHERE `nama` LIKE '%$keyword%' ESCAPE '!'";
        // } elseif ($keyword != null && ($hargaMaks != null || $hargaMin != null)) {
        //     # code...
        // }

        // if ($hargaMaks) {
        //     $query += " ";
        // }
        // ------------------------------------------------
    }
}
