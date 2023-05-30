<?php

include('koneksi.php');

function get_data_promo() {
    $query = "SELECT * FROM `promoproduk`;";
    $sql = mysqli_query($GLOBALS['conn'], $query);

    return mysqli_fetch_all($sql);
}

function get_data_promo_by_id($id) {
    $query = "SELECT * FROM `promoproduk` WHERE `idPromo`=$id;";
    $sql = mysqli_query($GLOBALS['conn'], $query);

    return mysqli_fetch_row($sql);
}

function save_data_promo($nama, $diskon) {
    $result = mysqli_query($GLOBALS['conn'], "INSERT INTO `promoproduk`(`idPromo`, `namaPromo`, `diskonProduk`) VALUES (NULL,'$nama','$diskon');");

    if($result) {
        return true;
    }else{
        return false;
    }
}

function update_data_promo($id, $nama, $diskon) {
    $result = mysqli_query($GLOBALS['conn'], "UPDATE `promoproduk` SET `namaPromo`='$nama',`diskonProduk`='$diskon' WHERE `idPromo`='$id';");

    if($result) {
        return true;
    }else{
        return false;
    }
}

function delete_data_promo($id) {
    $result = mysqli_query($GLOBALS['conn'], "DELETE FROM `promoproduk` WHERE `idPromo`='$id';");

    if($result) {
        return true;
    }else{
        return false;
    }
}
?>