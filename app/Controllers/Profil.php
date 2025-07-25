<?php

namespace App\Controllers;

use App\Models\UserModel;

class Profil extends BaseController
{
    public function index()
    {
        if (!session()->get('logged_in')) {
            return redirect()->to('/login');
        }

        $userModel = new UserModel();
        $user = $userModel->where('username', session()->get('username'))->first();

        return view('profil/profil', ['user' => $user]);
    }

    public function edit()
    {
        if (!session()->get('logged_in')) {
            return redirect()->to('/login');
        }

        $userModel = new UserModel();
        $user = $userModel->where('username', session()->get('username'))->first();

        return view('profil/edit_profil', ['user' => $user]);
    }

    public function update()
    {
        $userModel = new UserModel();
        $username = session()->get('username');

        // Ambil user
        $user = $userModel->where('username', $username)->first();

        $data = [];

        // Ambil nama baru
        $nama = $this->request->getPost('nama');
        if (!empty($nama) && $nama !== $user['nama']) {
            $data['nama'] = $nama;
            session()->set('nama', $nama); // update session
        }

        // Ambil dan simpan foto baru
        $file = $this->request->getFile('foto');
        if ($file && $file->isValid() && !$file->hasMoved()) {
            $newName = $file->getRandomName();
            $file->move('img', $newName);
            $data['foto'] = $newName;
            session()->set('foto', $newName); // update session
        }

        // Cegah update kosong
        if (empty($data)) {
            return redirect()->to('/profil')->with('error', 'Tidak ada perubahan data yang dilakukan.');
        }

        // Update berdasarkan ID user
        $userModel->update($user['id'], $data);

        session()->setFlashdata('success', 'Profil berhasil diperbarui.');
        return redirect()->to('/profil');
    }
}
