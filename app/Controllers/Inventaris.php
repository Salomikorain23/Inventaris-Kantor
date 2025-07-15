<?php

namespace App\Controllers;

use App\Models\BarangModel;
use App\Models\PeminjamanModel;
use App\Models\PengembalianModel;

class Inventaris extends BaseController
{
    public function index()
    {
        if (!session()->get('logged_in')) {
            return redirect()->to('/login');
        }

        return redirect()->to('/dashboard');
    }

    public function barang()
    {
        if (!session()->get('logged_in')) {
            return redirect()->to('/login');
        }

        $model = new BarangModel();
        $data['barang'] = $model->findAll();
        return view('templates/barang', $data);
    }

    public function peminjaman()
    {
        if (!session()->get('logged_in')) {
            return redirect()->to('/login');
        }

        $model = new PeminjamanModel();
        $data['peminjaman'] = $model->findAll();
        return view('templates/peminjaman', $data);
    }

    public function pengembalian()
    {
        if (!session()->get('logged_in')) {
            return redirect()->to('/login');
        }

        $model = new PengembalianModel();
        $data['pengembalian'] = $model->findAll();
        return view('templates/pengembalian', $data);
    }

    public function laporan()
    {
        if (!session()->get('logged_in')) {
            return redirect()->to('/login');
        }

        return view('templates/laporan');
    }

    // ---------- CRUD BARANG ----------
    public function tambahBarang()
    {
        $model = new BarangModel();
        $data = [
            'nama_barang' => $this->request->getPost('nama_barang'),
            'jumlah'      => $this->request->getPost('jumlah'),
            'kategori'    => $this->request->getPost('kategori')
        ];
        $model->save($data);

        //log aktivitas untuk tambah barang
        $this->logAktivitas("Menambahkan barang baru: " . $data['nama_barang']);

        return redirect()->to('/barang')->with('success', 'Barang berhasil ditambahkan.');
    }


    public function editBarang($id)
    {
        $model = new BarangModel();
        $data['barang'] = $model->find($id);
        return view('templates/edit_barang', $data);
    }

    public function updateBarang($id)
    {
        $model = new BarangModel();
        $data = [
            'nama_barang' => $this->request->getPost('nama_barang'),
            'kategori'    => $this->request->getPost('kategori'),
            'jumlah'      => $this->request->getPost('jumlah'),
            'kondisi'     => $this->request->getPost('kondisi'),
        ];
        $model->update($id, $data);
        // log aktivitas
        $this->logAktivitas("Mengedit barang ID: $id");
        return redirect()->to('/barang');
    }

    public function hapusBarang($id)
    {
        $model = new BarangModel();
        $model->delete($id);
        return redirect()->to('/barang');
    }

    // ---------- CRUD PEMINJAMAN ----------
    public function tambahPeminjaman()
    {
        $model = new PeminjamanModel();
        $data = [
            'nama_peminjam'    => $this->request->getPost('nama_peminjam'),
            'nama_barang'      => $this->request->getPost('nama_barang'),
            'tanggal_pinjam'   => $this->request->getPost('tanggal_pinjam'),
            'tanggal_kembali'  => $this->request->getPost('tanggal_kembali'),
            'status'           => $this->request->getPost('status'),
        ];
        $model->insert($data);
        return redirect()->to('/peminjaman');
    }

    public function editPeminjaman($id)
    {
        $model = new PeminjamanModel();
        $data['peminjaman'] = $model->find($id);
        return view('templates/edit_peminjaman', $data);
    }

    public function updatePeminjaman($id)
    {
        $model = new PeminjamanModel();
        $data = [
            'nama_peminjam'    => $this->request->getPost('nama_peminjam'),
            'nama_barang'      => $this->request->getPost('nama_barang'),
            'tanggal_pinjam'   => $this->request->getPost('tanggal_pinjam'),
            'tanggal_kembali'  => $this->request->getPost('tanggal_kembali'),
            'status'           => $this->request->getPost('status'),
        ];

        $model->update($id, $data);

        // log setelah update berhasil
        $this->logAktivitas("Mengedit peminjaman ID: $id");

        return redirect()->to('/peminjaman');
    }


    public function hapusPeminjaman($id)
    {
        $model = new PeminjamanModel();
        $model->delete($id);
        return redirect()->to('/peminjaman');
    }

    // ---------- CRUD PENGEMBALIAN ----------
    public function tambahPengembalian()
    {
        $model = new PengembalianModel();
        $data = [
            'nama_peminjam'    => $this->request->getPost('nama_peminjam'),
            'nama_barang'      => $this->request->getPost('nama_barang'),
            'tanggal_pinjam'   => $this->request->getPost('tanggal_pinjam'),
            'tanggal_kembali'  => $this->request->getPost('tanggal_kembali'),
            'kondisi_barang'   => $this->request->getPost('kondisi_barang'),
        ];
        $model->insert($data);
        return redirect()->to('/pengembalian');
    }

    public function editPengembalian($id)
    {
        $model = new PengembalianModel();
        $data['pengembalian'] = $model->find($id);
        return view('templates/edit_pengembalian', $data);
    }

    public function updatePengembalian($id)
    {
        $model = new PengembalianModel();
        $data = [
            'nama_peminjam'    => $this->request->getPost('nama_peminjam'),
            'nama_barang'      => $this->request->getPost('nama_barang'),
            'tanggal_pinjam'   => $this->request->getPost('tanggal_pinjam'),
            'tanggal_kembali'  => $this->request->getPost('tanggal_kembali'),
            'kondisi_barang'   => $this->request->getPost('kondisi_barang'),
        ];
        $model->update($id, $data);
        // Log aktivitas
        $this->logAktivitas("Mengedit pengembalian ID: $id");
        return redirect()->to('/pengembalian');
    }

    public function hapusPengembalian($id)
    {
        $model = new PengembalianModel();
        $model->delete($id);
        return redirect()->to('/pengembalian');
    }
}
