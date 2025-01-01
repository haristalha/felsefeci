<?php

namespace App\Controllers;

use App\Models\UserModel;
use CodeIgniter\Controller;

class RegisterController extends Controller
{
    public function register()
    {
        helper(['form', 'url']);

        $data = [];

        if ($this->request->getMethod() == 'post') {
            $rules = [
                'kullanici_adi' => 'required|min_length[3]|max_length[20]',
                'sifre' => 'required|min_length[6]',
                'eposta' => 'required|valid_email',
                'ad' => 'required|min_length[3]|max_length[50]',
                'soyad' => 'required|min_length[3]|max_length[50]'
            ];

            if ($this->validate($rules)) {
                $userModel = new UserModel();

                $userData = [
                    'kullanici_adi' => $this->request->getPost('kullanici_adi'),
                    'sifre' => password_hash($this->request->getPost('sifre'), PASSWORD_DEFAULT),
                    'eposta' => $this->request->getPost('eposta'),
                    'ad' => $this->request->getPost('ad'),
                    'soyad' => $this->request->getPost('soyad')
                ];

                if ($userModel->getUserByUsername($userData['kullanici_adi'])) {
                    $data['hata_mesaji'] = "Bu kullanıcı adı zaten kullanılıyor.";
                } else {
                    $userModel->createUser($userData);
                    return redirect()->to('/login');
                }
            } else {
                $data['validation'] = $this->validator;
            }
        }

        echo view('register', $data);
    }
}
