<?php

include('koneksi.php');

function get_data_produk() {
    $query = "SELECT * FROM `dataproduk`;";
    $sql = mysqli_query($GLOBALS['conn'], $query);

    return mysqli_fetch_all($sql);
}

function save_data_produk($kategori, $nama, $harga, $promo, $stok) {
    $result = mysqli_query($GLOBALS['conn'], "INSERT INTO `dataproduk`(`idProduk`, `namaProduk`, `hargaProduk`, `kategori`, `stok`, `idPromo`, `idPembelian`) VALUES (NULL,'$nama','$harga','$kategori','$stok',$promo,NULL);");

    if($result) {
        return true;
    }else{
        return false;
    }
}

function delete_data_produk($id) {
    $query = "DELETE FROM `dataproduk` WHERE `idProduk`=$id;";

    $result = mysqli_query($GLOBALS['conn'], $query);

    if($result) {
        return true;
    }else{
        return false;
    }
}
?>