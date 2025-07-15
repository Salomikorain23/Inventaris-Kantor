<?php

namespace App\Controllers;

use App\Models\UserModel;

class Auth extends BaseController
{
    public function login()
    {
        // login ke dashboard
        if (session()->get('logged_in')) {
            return redirect()->to('/dashboard');
        }

        return view('auth/login');
    }

    public function prosesLogin()
    {
        $userModel = new UserModel();
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        // Cari user berdasarkan username
        $user = $userModel->where('username', $username)->first();

        // Verifikasi password menggunakan password_verify
        if ($user && password_verify($password, $user['password'])) {
            session()->set([
                'username'  => $user['username'],
                'role'      => $user['role'],
                'logged_in' => true
            ]);

            // Catat log aktivitas login
            $this->logAktivitas('Login berhasil');

            return redirect()->to('/dashboard');
        } else {
            return redirect()->to('/login')->with('error', 'Username atau password salah.');
        }
    }

    public function logout()
    {
        // Catatan log aktivitas logout sebelum session
        $this->logAktivitas('Logout');

        session()->destroy();
        return redirect()->to('/login');
    }
}
