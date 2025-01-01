<?php

namespace App\Controllers;

use App\Models\UserModel;
use CodeIgniter\Controller;

class UyeDuzenleController extends Controller
{
    public function edit($id = null)
    {
        session();

        if (!session()->has('admin')) {
            return redirect()->to('/login');
        }

        $userModel = new UserModel();
        $user = $userModel->getUserById($id);

        if (!$user) {
            echo "Üye bulunamadı.";
            return;
        }

        $data = [
            'id' => $id,
            'kullanici_adi' => htmlspecialchars($user['kullanici_adi']),
            'eposta' => htmlspecialchars($user['eposta']),
            'ad' => htmlspecialchars($user['ad']),
            'soyad' => htmlspecialchars($user['soyad']),
        ];

        if ($this->request->getMethod() == 'post') {
            $rules = [
                'kullanici_adi' => 'required|min_length[3]|max_length[255]',
                'eposta' => 'required|valid_email',
                'ad' => 'required|min_length[1]|max_length[255]',
                'soyad' => 'required|min_length[1]|max_length[255]',
            ];

            if ($this->validate($rules)) {
                $updateData = [
                    'kullanici_adi' => htmlspecialchars($this->request->getPost('kullanici_adi')),
                    'eposta' => htmlspecialchars($this->request->getPost('eposta')),
                    'ad' => htmlspecialchars($this->request->getPost('ad')),
                    'soyad' => htmlspecialchars($this->request->getPost('soyad')),
                ];

                if ($userModel->updateUserById($updateData, $id)) {
                    return redirect()->to('/uyeislem');
                } else {
                    $data['hata_mesaji'] = "Veritabanı hatası.";
                }
            } else {
                $data['validation'] = $this->validator;
            }
        }

        return view('uyeduzenle', $data);
    }
}
