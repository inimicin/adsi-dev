<?php
include('../script/produk.php');
include('../script/session.php');

check_admin_session();

if(delete_data_produk($_GET['id'])) {
    header('location: ./admin_produk_data.php');
}

?>