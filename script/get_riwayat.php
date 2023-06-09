<?php

include('pembelian.php');
include('produk.php');
include('promo.php');

$no_hp = $_GET['hp'];

$result = "";

foreach (get_data_pembelian_by_no_hp($no_hp) as $data) {
  $histori = get_data_histori_by_id($data[2]);
  $produk = get_data_produk_by_id($data[3]);
  $total = $produk[2]*((100-get_data_promo_by_id($produk[5])[2])/100);
  $result = $result."
  <tr>
      <td>$histori[1]</td>
      <td>$produk[1]</td>
      <td>$total</td>
  </tr>
  ";
}

echo $result;

?>