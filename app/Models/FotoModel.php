<?php

namespace App\Models;

use CodeIgniter\Model;

class FotoModel extends Model
{
    protected $table = 'foto';
    protected $useTimestamps = true;
    protected $allowedFields = ['slug', 'foto'];

    // public function getBarang($slug = false)
    // {
    //     if (!$slug) {
    //         return $this->findAll();
    //     }

    //     return $this->where(['slug' => $slug])->first();
    // }
}
