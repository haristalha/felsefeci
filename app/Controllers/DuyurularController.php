<?php

namespace App\Controllers;

use App\Models\DuyuruModel;
use CodeIgniter\Controller;

class DuyurularController extends Controller
{
    public function index()
    {
        session();

        if (!session()->has('initiated')) {
            session()->regenerate();
            session()->set('initiated', true);
        }

        $duyuruModel = new DuyuruModel();
        $data['duyurular'] = $duyuruModel->orderBy('tarih', 'DESC')->findAll();

        return view('duyurular', $data);
    }
}
