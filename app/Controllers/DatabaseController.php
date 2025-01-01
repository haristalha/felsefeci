<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class DatabaseController extends Controller
{
    protected $db;

    public function __construct()
    {
        $this->db = \Config\Database::connect();
        $this->db->setCharset('utf8');
    }

    public function index()
    {
        // Veritabanı bağlantısını test etmek için bir sorgu örneği
        $query = $this->db->query('SELECT * FROM denemeler');
        $results = $query->getResult();

        echo '<pre>';
        print_r($results);
        echo '</pre>';
    }
}
