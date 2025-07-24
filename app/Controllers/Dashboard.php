<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Dashboard extends Controller
{
    public function index()
    {
        $session = session();

        if (!$session->get('logged_in')) {
            return redirect()->to('/login')->with('error', 'Silakan login terlebih dahulu.');
        }

        $role = $session->get('role');

        // Set zona waktu dan data waktu sekarang
        date_default_timezone_set('Asia/Makassar');
        $data = [
            'totalBarang'     => 120,
            'barangMasuk'     => 45,
            'barangKeluar'    => 32,
            'peminjaman'      => 12,
            'pengembalian'    => 8,
            'username'        => $session->get('username'),
            'role'            => $role,
            'tanggalSekarang' => date('d M Y'),
            'waktuSekarang'   => date('H:i:s')
        ];

        if ($role === 'admin') {
            return view('templates/dashboard_admin', $data);
        } elseif ($role === 'manajer') {
            return view('templates/dashboard_manajer', $data);
        } else {
            return redirect()->to('/login')->with('error', 'Role tidak dikenali.');
        }
    }
}
