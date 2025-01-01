<?php

namespace App\Controllers;

use App\Models\UserModel;
use CodeIgniter\Controller;

class UyeSilController extends Controller
{
    public function delete($id = null)
    {
        $userModel = new UserModel();
        
        if ($userModel->delete($id)) {
            return redirect()->to('/uyeislem');
        } else {
            echo "Veritabanı hatası: " . $userModel->errors();
        }
    }
}
