<?php

namespace App\Models;

use CodeIgniter\Model;

class LogModel extends Model
{
    protected $table = 'log_aktivitas';
    protected $allowedFields = ['username', 'role', 'aktivitas', 'waktu'];
}
