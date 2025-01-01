<?php

namespace App\Controllers;

use App\Models\UserModel;
use CodeIgniter\Controller;

class UyeIslemController extends Controller
{
    public function index()
    {
        session();

        if (!session()->has('admin')) {
            return redirect()->to('/login');
        }

        $userModel = new UserModel();
        $data['uyeler'] = $userModel->getAllUsers();

        return view('uyeislem', $data);
    }
}
