<?php

namespace App\Models;

use CodeIgniter\Model;

class SukaBarangModel extends Model
{
    protected $table = 'suka_barang';
    protected $allowedFields = ['barang_id', 'users_id'];
}
