<?php

namespace App\Models;

use CodeIgniter\Model;

class DenemeModel extends Model
{
    protected $table      = 'denemeler';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = false;

    protected $allowedFields = ['kullanici_id', 'baslik', 'icerik', 'tarih'];

    protected $useTimestamps = false;
}
