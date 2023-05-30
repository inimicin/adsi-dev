<?php

include('koneksi.php');

function get_data_produk() {
    $query = "SELECT * FROM `dataproduk`;";
    $sql = mysqli_query($GLOBALS['conn'], $query);

    return mysqli_fetch_all($sql);
}

function get_data_produk_by_id($id) {
    $query = "SELECT * FROM `dataproduk` WHERE `idProduk`=$id;";
    $sql = mysqli_query($GLOBALS['conn'], $query);

    return mysqli_fetch_row($sql);
}

function save_data_produk($kategori, $nama, $harga, $promo, $stok) {
    $result = mysqli_query($GLOBALS['conn'], "INSERT INTO `dataproduk`(`idProduk`, `namaProduk`, `hargaProduk`, `kategori`, `stok`, `idPromo`, `idPembelian`) VALUES (NULL,'$nama','$harga','$kategori','$stok',$promo,NULL);");

    if($result) {
        return true;
    }else{
        return false;
    }
}

function update_data_produk($id, $kategori, $nama, $harga, $promo, $stok) {
    $result = mysqli_query($GLOBALS['conn'], "UPDATE `dataproduk` SET `namaProduk`='$nama',`hargaProduk`='$harga',`kategori`='$kategori',`stok`='$stok',`idPromo`='$promo' WHERE `idProduk`='$id';");

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