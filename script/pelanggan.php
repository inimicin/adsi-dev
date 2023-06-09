<?php

include('koneksi.php');

function get_data_pelanggan_by_no_hp($no_hp) {
  $query = "SELECT * FROM `datapelanggan` WHERE `noHp`='$no_hp';";
  $sql = mysqli_query($GLOBALS['conn'], $query);

  return mysqli_fetch_row($sql);
}

function save_data_pelanggan($no_hp) {
  $result = mysqli_query($GLOBALS['conn'], "INSERT INTO `datapelanggan`(`idPelanggan`, `noHp`, `idPembelian`) VALUES (NULL,'$no_hp',NULL);");

  if($result) {
      return true;
  }else{
      return false;
  }
}

?>