<?php

namespace App\Models;

use CodeIgniter\Model;

class DuyuruModel extends Model
{
    protected $table      = 'duyurular';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = false;

    protected $allowedFields = ['baslik', 'icerik', 'tarih'];

    protected $useTimestamps = false;
}
