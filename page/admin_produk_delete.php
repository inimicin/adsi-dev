<?php
include('../script/produk.php');

if(delete_data_produk($_GET['id'])) {
    header('location: ./admin_produk_data.php');
}

?>