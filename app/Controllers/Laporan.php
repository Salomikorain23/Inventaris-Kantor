<?php

namespace App\Controllers;

use App\Models\LaporanModel;
use App\Controllers\BaseController;

class Laporan extends BaseController


{
    public function index()
    {
        $session = session();
        $role = $session->get('role');

        if ($role !== 'manajer') {
            return redirect()->to('/dashboard');
        }

        $laporanModel = new LaporanModel();
        $laporan = $laporanModel->orderBy('id', 'DESC')->first();

        if (!$laporan) {
            //laporan, dan insert dummy
            $laporanModel->save([
                'total_barang' => 120,
                'barang_masuk' => 45,
                'barang_keluar' => 32,
                'total_peminjaman' => 12,
                'total_pengembalian' => 8
            ]);
            $laporan = $laporanModel->orderBy('id', 'DESC')->first();
        }

        return view('templates/laporan_manajer', [
            'laporan' => $laporan,
            'username' => $session->get('username')
        ]);
    }

    public function verifikasi()
    {
        $session = session();
        if ($session->get('role') !== 'manajer') {
            return redirect()->to('/dashboard');
        }

        $laporanModel = new LaporanModel();
        $laporan = $laporanModel->orderBy('id', 'DESC')->first();

        if ($laporan) {
            $laporanModel->update($laporan['id'], [
                'status_verifikasi'   => 'sudah',
                'tanggal_verifikasi'  => date('Y-m-d H:i:s'),
                'diverifikasi_oleh'   => $session->get('username')
            ]);

            //log aktivitas
            $this->logAktivitas("Memverifikasi laporan ID: " . $laporan['id']);
        }

        return redirect()->to('/laporan')->with('status_verifikasi', 'Laporan telah diverifikasi.');
    }
}
