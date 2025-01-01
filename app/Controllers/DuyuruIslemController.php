<?php

namespace App\Controllers;

use App\Models\DuyuruModel;
use CodeIgniter\Controller;

class DuyuruIslemController extends Controller
{
    public function index()
    {
        session();

        if (!session()->has('admin')) {
            return redirect()->to('/login');
        }

        $duyuruModel = new DuyuruModel();
        $data['duyurular'] = $duyuruModel->findAll();

        if ($this->request->getMethod() == 'post') {
            $rules = [
                'baslik' => 'required|min_length[3]|max_length[255]',
                'icerik' => 'required'
            ];

            if ($this->validate($rules)) {
                $newData = [
                    'baslik' => htmlspecialchars($this->request->getPost('baslik')),
                    'icerik' => htmlspecialchars($this->request->getPost('icerik'))
                ];

                if ($duyuruModel->save($newData)) {
                    $data['basari_mesaji'] = "Duyuru başarıyla eklendi!";
                } else {
                    $data['hata_mesaji'] = "Veritabanı hatası.";
                }
            } else {
                $data['validation'] = $this->validator;
            }
        }

        return view('duyuruislem', $data);
    }
}
