<?php

$baglanti = new mysqli("localhost", "root", "", "denemeler");

if ($baglanti->connect_error) {
    die("Bağlantı hatası: " . $baglanti->connect_error);
}
$baglanti->set_charset("utf8");

?>