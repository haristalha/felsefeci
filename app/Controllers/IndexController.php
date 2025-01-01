<?php

namespace App\Controllers;

use App\Models\IndexModel;
use CodeIgniter\Controller;

class IndexController extends Controller
{
    public function index()
    {
        session();
        
        if (!session()->has('initiated')) {
            session()->regenerate();
            session()->set('initiated', true);
        }

        $indexModel = new IndexModel();
        $data['denemeler'] = $indexModel->orderBy('tarih', 'DESC')->findAll();

        return view('denemeler', $data);
    }
}
