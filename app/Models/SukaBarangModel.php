<?php

namespace App\Models;

use CodeIgniter\Model;

class SukaBarangModel extends Model
{
    protected $table = 'suka_barang';
    protected $useTimestamps = true;
    protected $allowedFields = ['barang_id', 'users_id', 'updated_at'];
}
