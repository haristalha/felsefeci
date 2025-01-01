<?php

namespace App\Models;

use CodeIgniter\Model;

class IndexModel extends Model
{
    protected $table      = 'denemeler';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = false;

    protected $allowedFields = ['baslik', 'icerik', 'tarih'];

    protected $useTimestamps = false;
}
