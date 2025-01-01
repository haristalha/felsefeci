<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table      = 'uyeler';
    protected $primaryKey = 'iduyeler';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = false;

    protected $allowedFields = ['kullanici_adi', 'sifre', 'eposta', 'ad', 'soyad'];

    protected $useTimestamps = false;

    public function getUserByUsername($kullanici_adi)
    {
        return $this->where('kullanici_adi', $kullanici_adi)->first();
    }

    public function createUser($data)
    {
        return $this->insert($data);
    }
}
