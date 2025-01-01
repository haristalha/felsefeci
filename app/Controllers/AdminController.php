<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class AdminController extends Controller
{
    public function index()
    {
        session();

        if (!session()->has('admin')) {
            return redirect()->to('/login');
        }

        return view('admin');
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/');
    }
}
