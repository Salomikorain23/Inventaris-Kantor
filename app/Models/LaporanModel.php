<?php

namespace App\Models;

use CodeIgniter\Model;

class LaporanModel extends Model
{
    protected $table = 'laporan';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'total_barang',
        'barang_masuk',
        'barang_keluar',
        'total_peminjaman',
        'total_pengembalian',
        'status_verifikasi',
        'tanggal_verifikasi',
        'diverifikasi_oleh'
    ];
}
