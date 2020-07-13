<?php

namespace App\Models;

use CodeIgniter\Model;

class FotoModel extends Model
{
    protected $table = 'foto';
    protected $useTimestamps = true;
    protected $allowedFields = ['slug', 'foto'];

    public function getFoto($slug)
    {
        return $this->select('foto')
            ->where('slug', $slug)
            ->findAll();
    }
}
