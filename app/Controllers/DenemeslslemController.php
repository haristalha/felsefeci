<?php

namespace App\Controllers;

use App\Models\DenemeModel;
use CodeIgniter\Controller;

class DenemeIslemController extends Controller
{
    public function index()
    {
        session();

        if (!session()->has('admin')) {
            return redirect()->to('/login');
        }

        $denemeModel = new DenemeModel();
        $data['denemeler'] = $denemeModel->findAll();

        if ($this->request->getMethod() == 'post') {
            $rules = [
                'baslik' => 'required|min_length[3]|max_length[255]',
                'icerik' => 'required'
            ];

            if ($this->validate($rules)) {
                $newData = [
                    'kullanici_id' => session()->get('admin'),
                    'baslik' => htmlspecialchars($this->request->getPost('baslik')),
                    'icerik' => htmlspecialchars($this->request->getPost('icerik'))
                ];

                if ($denemeModel->save($newData)) {
                    $data['basari_mesaji'] = "Deneme başarıyla eklendi!";
                } else {
                    $data['hata_mesaji'] = "Veritabanı hatası.";
                }
            } else {
                $data['validation'] = $this->validator;
            }
        }

        return view('denemeislem', $data);
    }
}