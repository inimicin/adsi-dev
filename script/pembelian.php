<?php

include('koneksi.php');
include('histori.php');
include('pelanggan.php');

function get_data_pembelian_by_no_hp($no_hp) {
  $idPelanggan = get_data_pelanggan_by_no_hp($no_hp);

  if($idPelanggan === NULL) {
    return NULL;
  }

  $query = "SELECT * FROM `datapembelian` WHERE `idPelanggan`=$idPelanggan[0];";
  $sql = mysqli_query($GLOBALS['conn'], $query);

  return mysqli_fetch_all($sql);
}

// function get_unique_id_produk_by_date($date) {
//   $rows = get_data_histori_by_tanggal($date);
//   $dataPenjualan = array();

//   foreach ($rows as $data) {
//     $idHistori = $data[0];
//     $query = "SELECT * FROM `datapenjualan` WHERE `idHistori`=$idHistori;";
//     $sql = mysqli_query($GLOBALS['conn'], $query);

//     foreach (mysqli_fetch_all($sql) as $penjualan) {
//       if (!in_array($penjualan[2], $dataPenjualan)) {
//         array_push($dataPenjualan, $penjualan[2]);
//       }
//     }
//   }

//   return $dataPenjualan;
// }

// function get_produk_terjual_by_id_and_date($id, $date) {
//   $count = 0;
//   $query = "SELECT * FROM (SELECT * FROM `datapenjualan` WHERE `idHistori` IN (SELECT `idHistori` FROM `historitransaksi` WHERE `tanggalTransaksi`='$date')) a WHERE `idProduk`=$id;";
//   $sql = mysqli_query($GLOBALS['conn'], $query);

//   foreach (mysqli_fetch_all($sql) as $penjualan) {
//     $count = $count + $penjualan[3];
//   }

//   return $count;
// }

function save_data_pembelian($metodePembayaran, $idProduk, $idHistori, $idPelanggan) {
  $result = mysqli_query($GLOBALS['conn'], "INSERT INTO `datapembelian`(`idPembelian`, `metodePembayaran`, `idHistori`, `idProduk`, `idPelanggan`) VALUES (NULL,'$metodePembayaran','$idHistori','$idProduk','$idPelanggan');");

  if($result) {
      return true;
  }else{
      return false;
  }
}
