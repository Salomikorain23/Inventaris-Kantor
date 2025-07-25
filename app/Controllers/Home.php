<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        //simulasikan login sebagai admin
        if (!session()->has('role')) {
            session()->set('role', 'admin'); // ubah ke 'manajer'
        }

        return view('dashboard/dashboard');
    }
}
