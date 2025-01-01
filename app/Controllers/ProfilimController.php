<?php

namespace App\Controllers;

use App\Models\UserModel;
use CodeIgniter\Controller;

class ProfilimController extends Controller
{
    public function index()
    {
        session();

        if (!session()->has('kullanici_adi')) {
            return redirect()->to('/login');
        }

        $kullanici_adi = session()->get('kullanici_adi');
        $userModel = new UserModel();
        $user = $userModel->getUserByUsername($kullanici_adi);

        if (!$user) {
            echo "Kullanıcı bulunamadı.";
            return;
        }

        $data = [
            'ad' => htmlspecialchars($user['ad']),
            'soyad' => htmlspecialchars($user['soyad']),
            'eposta' => htmlspecialchars($user['eposta'])
        ];

        if ($this->request->getMethod() == 'post') {
            $ad = htmlspecialchars(trim($this->request->getPost('ad')));
            $soyad = htmlspecialchars(trim($this->request->getPost('soyad')));
            $eposta = htmlspecialchars(trim($this->request->getPost('eposta')));
            $sifre = htmlspecialchars(trim($this->request->getPost('sifre')));

            $updateData = [
                'ad' => $ad,
                'soyad' => $soyad,
                'eposta' => $eposta,
            ];

            if (!empty($sifre)) {
                $updateData['sifre'] = password_hash($sifre, PASSWORD_DEFAULT);
            }

            if ($userModel->updateUserByUsername($updateData, $kullanici_adi)) {
                return redirect()->to('/');
            } else {
                $data['hata_mesaji'] = "Veritabanı hatası.";
            }
        }

        return view('profilim', $data);
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/');
    }
}
