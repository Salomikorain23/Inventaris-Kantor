<?php

namespace App\Models;

use CodeIgniter\Model;

class PengembalianModel extends Model
{
    protected $table      = 'pengembalian';
    protected $primaryKey = 'id';

    protected $allowedFields = [
        'nama_peminjam',
        'nama_barang',
        'tanggal_pinjam',
        'tanggal_kembali',
        'kondisi_barang'
    ];
}
