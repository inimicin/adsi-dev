<?php

include('penjualan.php');

$idProduk = $_GET['id'];
$jumlah = $_GET['jumlah'];
$idHistori = save_data_histori();

save_data_penjualan($idProduk, $jumlah, $idHistori);