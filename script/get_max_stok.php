<?php

include('produk.php');

$id = $_GET['id'];

$produk = get_data_produk_by_id($id);

echo $produk[4];

?>