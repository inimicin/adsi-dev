<?php

include('produk.php');
include('promo.php');

$id = $_GET['id'];
$data = get_data_produk_by_id($id);

echo $data[2]*((100-get_data_promo_by_id($data[5])[2])/100);

?>