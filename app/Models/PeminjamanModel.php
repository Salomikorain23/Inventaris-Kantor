<?php

namespace App\Models;

use CodeIgniter\Model;

class PeminjamanModel extends Model
{
    protected $table      = 'peminjaman';
    protected $primaryKey = 'id';

    protected $allowedFields = [
        'nama_peminjam',
        'nama_barang',
        'tanggal_pinjam',
        'tanggal_kembali',
        'status'
    ];
}
