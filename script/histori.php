<?php

include('koneksi.php');

function get_data_histori($tanggal, $waktu) {
  $query = "SELECT * FROM `historitransaksi` WHERE `tanggalTransaksi`='$tanggal' AND `waktuTransaksi`='$waktu';";
  $sql = mysqli_query($GLOBALS['conn'], $query);

  return mysqli_fetch_row($sql);
}

function get_data_histori_by_tanggal($tanggal) {
  $query = "SELECT * FROM `historitransaksi` WHERE `tanggalTransaksi`='$tanggal';";
  $sql = mysqli_query($GLOBALS['conn'], $query);

  return mysqli_fetch_all($sql);
}

function get_data_histori_by_id($id) {
  $query = "SELECT * FROM `historitransaksi` WHERE `idHistori`='$id';";
  $sql = mysqli_query($GLOBALS['conn'], $query);

  return mysqli_fetch_row($sql);
}


function save_data_histori() {
  $tanggal = date("Y-m-d");
  $waktu = date("H:i:s");
  $result = mysqli_query($GLOBALS['conn'], "INSERT INTO `historitransaksi`(`idHistori`, `tanggalTransaksi`, `waktuTransaksi`, `idPembelian`) VALUES (NULL,'$tanggal','$waktu',NULL);");

  if($result) {
    $data = get_data_histori($tanggal, $waktu);
    return $data[0];
  }else{
    return NULL;
  }
}
