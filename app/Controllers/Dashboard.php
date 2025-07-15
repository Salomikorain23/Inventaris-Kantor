<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Dashboard extends Controller
{
    public function index()
    {
        $session = session();
        $role = $session->get('role');

        // Kirim data ke view
        $data = [
            'totalBarang' => 120,
            'barangMasuk' => 45,
            'barangKeluar' => 32,
            'peminjaman' => 12,
            'pengembalian' => 8,
            'username' => $session->get('username'),
            'role' => $role
        ];

        // Load view berdasarkan role
        if ($role === 'admin') {
            return view('templates/dashboard_admin', $data);
        } elseif ($role === 'manajer') {
            return view('templates/dashboard_manajer', $data);
        } else {
            return redirect()->to('/login');
        }
    }
}
