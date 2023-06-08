<?php

include('promo.php');
include('produk.php');

$id = $_GET['id'];
$jumlah = $_GET['jumlah'];
$index = $_GET['index'];
$data = get_data_produk_by_id($id);

$result = "<tr style=\"border: 1px solid;\">
<td scope=\"col\" style=\"border:none;\">".$data[1]."</td>
<td scope=\"col\" style=\"border:none;\">$jumlah</td>
<td scope=\"col\" style=\"border:none;\">".get_data_promo_by_id($data[5])[2]."%</td>
<td scope=\"col\" style=\"border:none;\">Rp. ".$jumlah*$data[2]*((100-get_data_promo_by_id($data[5])[2])/100)."</td>
<td scope=\"col\" style=\"border:none;\">
  <button class=\"btn btn-danger\" onclick=\"deleteData($index)\">Hapus</button>
</td>
</tr>";

echo $result;

?>