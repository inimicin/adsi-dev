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
?>