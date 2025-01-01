<?php

namespace App\Controllers;

use App\Models\MenuModel;
use CodeIgniter\Controller;

class NavbarEkleController extends Controller
{
    public function index()
    {
        session();

        if (!session()->has('admin')) {
            return redirect()->to('/login');
        }

        $data = [];

        if ($this->request->getMethod() == 'post') {
            $rules = [
                'menu_adi' => 'required|min_length[3]|max_length[255]',
                'gidilecekyer' => 'required|min_length[3]|max_length[255]',
            ];

            if ($this->validate($rules)) {
                $menuModel = new MenuModel();
                $newData = [
                    'menu_adi' => htmlspecialchars($this->request->getPost('menu_adi')),
                    'gidilecekyer' => htmlspecialchars($this->request->getPost('gidilecekyer'))
                ];

                if ($menuModel->save($newData)) {
                    $data['basari_mesaji'] = "Menü başarıyla eklendi!";
                    return redirect()->to('admin');
                } else {
                    $data['hata_mesaji'] = "Veritabanı hatası.";
                }
            } else {
                $data['validation'] = $this->validator;
            }
        }

        return view('navbarekle', $data);
    }
}
