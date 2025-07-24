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

        if (session()->get('role') !== 'admin') {
            return redirect()->to('/dashboard')->with('error', 'Akses hanya untuk admin.');
        }

        return redirect()->to('/dashboard');
    }

    public function barang()
    {
        if (!session()->get('logged_in')) {
            return redirect()->to('/login');
        }

        if (session()->get('role') !== 'admin') {
            return redirect()->to('/dashboard')->with('error', 'Akses hanya untuk admin.');
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

        if (session()->get('role') !== 'admin') {
            return redirect()->to('/dashboard')->with('error', 'Akses hanya untuk admin.');
        }

        $model = new PeminjamanModel();
        $data['peminjaman'] = $model->findAll();
        return view('templates/peminjaman', $data);
    }
    public function tambahPeminjaman()
    {
        if (!session()->get('logged_in')) {
            return redirect()->to('/login');
        }

        if (session()->get('role') !== 'admin') {
            return redirect()->to('/dashboard')->with('error', 'Akses hanya untuk admin.');
        }

        $model = new PeminjamanModel();
        $data = [
            'nama_peminjam'     => $this->request->getPost('nama_peminjam'),
            'nama_barang'       => $this->request->getPost('nama_barang'),
            'tanggal_pinjam'    => $this->request->getPost('tanggal_pinjam'),
            'tanggal_kembali'   => $this->request->getPost('tanggal_kembali'),
            'status'            => $this->request->getPost('status')
        ];
        $model->save($data);

        return redirect()->to('/peminjaman')->with('success', 'Data peminjaman berhasil disimpan.');
    }

    public function editPeminjaman($id)
    {
        if (!session()->get('logged_in')) {
            return redirect()->to('/login');
        }

        if (session()->get('role') !== 'admin') {
            return redirect()->to('/dashboard')->with('error', 'Akses hanya untuk admin.');
        }

        $model = new \App\Models\PeminjamanModel();
        $data['peminjaman'] = $model->find($id);

        if (!$data['peminjaman']) {
            return redirect()->to('/peminjaman')->with('error', 'Data tidak ditemukan.');
        }

        return view('templates/edit_peminjaman', $data);
    }

    public function updatePeminjaman($id)
    {
        if (!session()->get('logged_in')) {
            return redirect()->to('/login');
        }

        if (session()->get('role') !== 'admin') {
            return redirect()->to('/dashboard')->with('error', 'Akses hanya untuk admin.');
        }

        $model = new \App\Models\PeminjamanModel();
        $data = [
            'id'               => $id,
            'nama_peminjam'    => $this->request->getPost('nama_peminjam'),
            'nama_barang'      => $this->request->getPost('nama_barang'),
            'tanggal_pinjam'   => $this->request->getPost('tanggal_pinjam'),
            'tanggal_kembali'  => $this->request->getPost('tanggal_kembali'),
            'status'           => $this->request->getPost('status')
        ];

        $model->save($data);
        return redirect()->to('/peminjaman')->with('success', 'Data peminjaman berhasil diperbarui.');
    }


    public function pengembalian()
    {
        if (!session()->get('logged_in')) {
            return redirect()->to('/login');
        }

        if (session()->get('role') !== 'admin') {
            return redirect()->to('/dashboard')->with('error', 'Akses hanya untuk admin.');
        }

        $model = new PengembalianModel();
        $data['pengembalian'] = $model->findAll();
        return view('templates/pengembalian', $data);
    }

    public function tambahPengembalian()
    {
        if (!session()->get('logged_in')) {
            return redirect()->to('/login');
        }

        if (session()->get('role') !== 'admin') {
            return redirect()->to('/dashboard')->with('error', 'Akses hanya untuk admin.');
        }

        $model = new PengembalianModel();
        $data = [
            'nama_peminjam'     => $this->request->getPost('nama_peminjam'),
            'nama_barang'       => $this->request->getPost('nama_barang'),
            'tanggal_pinjam'    => $this->request->getPost('tanggal_pinjam'),
            'tanggal_kembali'   => $this->request->getPost('tanggal_kembali'),
            'kondisi_barang'    => $this->request->getPost('kondisi_barang')
        ];
        $model->save($data);

        return redirect()->to('/pengembalian')->with('success', 'Data pengembalian berhasil disimpan.');
    }

    public function editPengembalian($id)
    {
        if (!session()->get('logged_in')) {
            return redirect()->to('/login');
        }

        if (session()->get('role') !== 'admin') {
            return redirect()->to('/dashboard')->with('error', 'Akses hanya untuk admin.');
        }

        $model = new \App\Models\PengembalianModel();
        $data['pengembalian'] = $model->find($id);

        if (!$data['pengembalian']) {
            return redirect()->to('/pengembalian')->with('error', 'Data tidak ditemukan.');
        }

        return view('templates/edit_pengembalian', $data);
    }
    public function updatePengembalian($id)
    {
        if (!session()->get('logged_in')) {
            return redirect()->to('/login');
        }

        if (session()->get('role') !== 'admin') {
            return redirect()->to('/dashboard')->with('error', 'Akses hanya untuk admin.');
        }

        $model = new \App\Models\PengembalianModel();
        $data = [
            'id'                => $id,
            'nama_peminjam'     => $this->request->getPost('nama_peminjam'),
            'nama_barang'       => $this->request->getPost('nama_barang'),
            'tanggal_pinjam'    => $this->request->getPost('tanggal_pinjam'),
            'tanggal_kembali'   => $this->request->getPost('tanggal_kembali'),
            'kondisi_barang'    => $this->request->getPost('kondisi_barang')
        ];

        $model->save($data);
        return redirect()->to('/pengembalian')->with('success', 'Data pengembalian berhasil diperbarui.');
    }


    public function tambahBarang()
    {
        if (!session()->get('logged_in')) {
            return redirect()->to('/login');
        }

        if (session()->get('role') !== 'admin') {
            return redirect()->to('/dashboard')->with('error', 'Akses hanya untuk admin.');
        }

        $model = new BarangModel();
        $data = [
            'nama_barang' => $this->request->getPost('nama_barang'),
            'kategori' => $this->request->getPost('kategori'),
            'jumlah' => $this->request->getPost('jumlah'),
            'kondisi' => $this->request->getPost('kondisi')
        ];
        $model->save($data);
        return redirect()->to('/barang');
    }

    public function editBarang($id)
    {
        if (!session()->get('logged_in')) {
            return redirect()->to('/login');
        }

        if (session()->get('role') !== 'admin') {
            return redirect()->to('/dashboard')->with('error', 'Akses hanya untuk admin.');
        }

        $model = new BarangModel();
        $data['barang'] = $model->find($id);
        return view('templates/edit_barang', $data);
    }

    public function updateBarang($id)
    {
        if (!session()->get('logged_in')) {
            return redirect()->to('/login');
        }

        if (session()->get('role') !== 'admin') {
            return redirect()->to('/dashboard')->with('error', 'Akses hanya untuk admin.');
        }

        $model = new BarangModel();
        $data = [
            'id' => $id,
            'nama_barang' => $this->request->getPost('nama_barang'),
            'kategori' => $this->request->getPost('kategori'),
            'jumlah' => $this->request->getPost('jumlah'),
            'kondisi' => $this->request->getPost('kondisi')
        ];
        $model->save($data);
        return redirect()->to('/barang');
    }

    public function hapusBarang($id)
    {
        if (!session()->get('logged_in')) {
            return redirect()->to('/login');
        }

        if (session()->get('role') !== 'admin') {
            return redirect()->to('/dashboard')->with('error', 'Akses hanya untuk admin.');
        }

        $model = new \App\Models\BarangModel();
        $model->delete($id);

        return redirect()->to('/barang')->with('success', 'Barang berhasil dihapus.');
    }
}
