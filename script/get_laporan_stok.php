<?php

include('penjualan.php');
include('produk.php');

$result = "";
$date = $_GET['date'];
$produks = get_unique_id_produk_by_date($date);

var_dump($produks);

foreach ($produks as $produk) {
  $namaProduk = get_data_produk_by_id($produk[0])[1];
  $kategoriProduk = get_data_produk_by_id($produk[0])[3];
  $terjual = get_produk_terjual_by_id_and_date($produk[0], $date);
  $stokProduk = get_data_produk_by_id($produk[0])[4];
  $result = $result."<tr>
                          <td>$kategoriProduk</td>
                          <td>$namaProduk</td>
                          <td>$terjual</td>
                          <td>$stokProduk</td>
                       </tr>";
}

echo $result;

?>