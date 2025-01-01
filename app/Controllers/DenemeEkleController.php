<?php

namespace App\Controllers;

use App\Models\DenemeModel;
use App\Models\UserModel;
use CodeIgniter\Controller;

class DenemeEkleController extends Controller
{
    public function index()
    {
        session();

        if (!session()->has('kullanici_adi')) {
            return redirect()->to('/login');
        }

        $kullanici_adi = session()->get('kullanici_adi');
        $userModel = new UserModel();
        $user = $userModel->where('kullanici_adi', $kullanici_adi)->first();

        if (!$user) {
            echo "Kullanıcı bulunamadı.";
            return;
        }

        $data = [];
        if ($this->request->getMethod() == 'post') {
            $rules = [
                'baslik' => 'required|min_length[3]|max_length[255]',
                'icerik' => 'required'
            ];

            if ($this->validate($rules)) {
                $denemeModel = new DenemeModel();
                $newData = [
                    'kullanici_id' => $user['iduyeler'],
                    'baslik' => htmlspecialchars($this->request->getPost('baslik')),
                    'icerik' => htmlspecialchars($this->request->getPost('icerik')),
                    'tarih' => date('Y-m-d H:i:s')
                ];

                if ($denemeModel->save($newData)) {
                    $data['basari_mesaji'] = "Deneme başarıyla eklendi.";
                } else {
                    $data['hata_mesaji'] = "Veritabanı hatası.";
                }
            } else {
                $data['validation'] = $this->validator;
            }
        }

        return view('denemeekle', $data);
    }
}
