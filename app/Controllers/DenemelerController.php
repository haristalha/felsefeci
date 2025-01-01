<?php

namespace App\Controllers;

use App\Models\DenemelerModel;
use CodeIgniter\Controller;

class DenemelerController extends Controller
{
    public function view($id = null)
    {
        session();

        if (!session()->has('initiated')) {
            session()->regenerate();
            session()->set('initiated', true);
        }

        $denemelerModel = new DenemelerModel();
        $deneme = $denemelerModel->find($id);

        if ($deneme) {
            $data['baslik'] = htmlspecialchars($deneme['baslik']);
            $data['icerik'] = htmlspecialchars($deneme['icerik']);
            $data['tarih'] = htmlspecialchars($deneme['tarih']);
        } else {
            $data['baslik'] = 'Hata';
            $data['icerik'] = 'Deneme bulunamadı.';
            $data['tarih'] = '';
        }

        return view('deneme', $data);
    }
}
