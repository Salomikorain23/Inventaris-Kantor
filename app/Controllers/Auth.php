<?php

namespace App\Controllers;

use App\Models\UserModel;

class Auth extends BaseController
{
    public function login()
    {
        // Reset session sebelumnya
        session()->remove(['username', 'role', 'foto', 'logged_in']);

        return view('auth/login');
    }

    public function prosesLogin()
    {
        $userModel = new UserModel();
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        $user = $userModel->where('username', $username)->first();

        if ($user && password_verify($password, $user['password'])) {
            session()->set([
                'username'  => $user['username'],
                'role'      => $user['role'],
                'foto'      => $user['foto'],
                'logged_in' => true
            ]);

            $this->logAktivitas('Login berhasil');
            return redirect()->to('/dashboard');
        } else {
            return redirect()->to('/login')->with('error', 'Username atau password salah.');
        }
    }

    public function logout()
    {
        $this->logAktivitas('Logout');
        session()->destroy();
        return redirect()->to('/register')->with('success', 'Anda telah logout. Silakan register ulang atau login kembali.');
    }

    public function ubahPassword()
    {
        return view('auth/ubah_password');
    }

    public function prosesUbahPassword()
    {
        $username = $this->request->getPost('username');
        $newPassword = $this->request->getPost('new_password');

        $userModel = new UserModel();
        $user = $userModel->where('username', $username)->first();

        if (!$user) {
            return redirect()->to('/ubah-password')->with('error', 'Username tidak ditemukan.');
        }

        $userModel->update($user['id'], [
            'password' => password_hash($newPassword, PASSWORD_DEFAULT)
        ]);

        return redirect()->to('/login')->with('success', 'Password berhasil diperbarui. Silakan login.');
    }
}
