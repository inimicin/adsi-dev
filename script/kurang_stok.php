<?php

include('produk.php');
$id = $_GET['id'];
$terjual = $_GET['terjual'];

$produk = get_data_produk_by_id($id);

update_data_produk($id, $produk[3], $produk[1], $produk[2], $produk[5], $produk[4] - $terjual);

?>