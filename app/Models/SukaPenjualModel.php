<?php

namespace App\Models;

use CodeIgniter\Model;

class SukaPenjualModel extends Model
{
    protected $table = 'suka_penjual';
    protected $allowedFields = ['penjual_id', 'users_id'];
}
