<?php

namespace App\Controllers;

use App\Models\UserModel;
use CodeIgniter\Controller;

class LoginController extends Controller
{
    public function login()
    {
        helper(['form', 'url']);
        $data = [];

        if ($this->request->getMethod() == 'post') {
            $rules = [
                'kullanici_adi' => 'required|min_length[3]|max_length[20]',
                'sifre' => 'required|min_length[6]',
            ];

            if ($this->validate($rules)) {
                $userModel = new UserModel();

                $user = $userModel->getUserByUsername($this->request->getPost('kullanici_adi'));

                if ($user && password_verify($this->request->getPost('sifre'), $user['sifre'])) {
                    $this->setUserSession($user);
                    return redirect()->to('/dashboard');
                } else {
                    $data['hata_mesaji'] = "Geçersiz kullanıcı adı veya şifre.";
                }
            } else {
                $data['validation'] = $this->validator;
            }
        }

        echo view('login', $data);
    }

    private function setUserSession($user)
    {
        $data = [
            'iduyeler' => $user['iduyeler'],
            'kullanici_adi' => $user['kullanici_adi'],
            'eposta' => $user['eposta'],
            'ad' => $user['ad'],
            'soyad' => $user['soyad'],
            'isLoggedIn' => true,
        ];

        session()->set($data);
    }
}
