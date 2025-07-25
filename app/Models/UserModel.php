<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table      = 'users';
    protected $primaryKey = 'id';

    protected $allowedFields = ['username', 'password', 'nama', 'foto',  'role'];
    protected $returnType    = 'array';
    protected $useTimestamps = true;
}
