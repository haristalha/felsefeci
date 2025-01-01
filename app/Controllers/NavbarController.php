<?php

namespace App\Controllers;

use App\Models\MenuModel;
use CodeIgniter\Controller;

class NavbarController extends Controller
{
    public function index()
    {
        $menuModel = new MenuModel();
        $data['menuler'] = $menuModel->findAll();

        return view('navbar', $data);
    }
}
