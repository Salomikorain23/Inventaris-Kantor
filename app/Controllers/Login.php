<?php

namespace App\Controllers;

class Login extends BaseController
{
    public function index()
    {
        return view('templates/login');
    }

    public function proses()
    {
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        // Simulasi user dari DB)
        $userAdmin = ['username' => 'admin', 'password' => 'admin123', 'role' => 'admin'];
        $userManajer = ['username' => 'manajer', 'password' => 'manajer123', 'role' => 'manajer'];

        if ($username === $userAdmin['username'] && $password === $userAdmin['password']) {
            session()->set(['username' => $username, 'role' => 'admin', 'logged_in' => true]);
            return redirect()->to('/dashboard');
        } elseif ($username === $userManajer['username'] && $password === $userManajer['password']) {
            session()->set(['username' => $username, 'role' => 'manajer', 'logged_in' => true]);
            return redirect()->to('/dashboard');
        } else {
            return redirect()->to('/login')->with('error', 'Username atau Password salah!');
        }
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/login');
    }
}
