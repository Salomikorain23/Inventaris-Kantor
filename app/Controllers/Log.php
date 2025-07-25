<?php

namespace App\Controllers;

use App\Models\LogModel;

class Log extends BaseController
{
    public function index()
    {
        if (session()->get('role') !== 'admin') {
            return redirect()->to('/dashboard');
        }

        $logModel = new LogModel();
        $data['logs'] = $logModel->orderBy('waktu', 'DESC')->findAll();

        return view('log/index', $data);
    }
}
