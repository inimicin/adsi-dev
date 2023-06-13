<?php

include('../script/produk.php');
include('../script/promo.php');
include('../script/pembelian.php');

$id = $_POST['produk'];

$produk = get_data_produk_by_id($id);

if (isset($_POST['submit'])) {
  $no_hp = $_POST['noHp'];

  if (get_data_pelanggan_by_no_hp($no_hp) === NULL) {
    $result = save_data_pelanggan($no_hp);
  }

  $pelanggan = get_data_pelanggan_by_no_hp($no_hp);
  $histori = save_data_histori();

  $status = save_data_pembelian($_POST['payment'], $produk[0], $histori[0], $pelanggan[0]);
  if ($status) {
    echo "
    <script>
        alert('Sukses Membuat Pesanan');
    </script>";
} else {
    echo "
    <script>
        alert('Gagal Membuat Pesanan');
    </script>";
}
}

?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Rincinan Transaksi</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <style>
    body {
      background-color: #eaf1f0;
      height: 100vh;
    }

    .backgorund {
      background-color: #48519a;
      height: 200px;
    }

    .rincianTransaksi {
      width: 60%;
      height: 290px;
      background-color: white;
      margin-top: -155px;
      margin-left: 270px;
    }

    .text-rincian {
      font-weight: bold;
      max-width: max-content;
      margin: auto;
    }

    .qr {
      width: 60%;
      height: 385px;
      background-color: white;
      margin-top: 15px;
      margin-left: 270px;
    }
  </style>
  <script src="../script/header.js"></script>
  <link rel="stylesheet" href="../style/general.css">
  <link rel="stylesheet" href="../style/nav.css">
  <link rel="stylesheet" href="../style/beranda.css" />
  <link rel="stylesheet" href="../style/font.css" />
</head>

<body>
  <main-header logged="false"></main-header>
  <div class="backgorund"></div>
  <div class="container">
    <div class="row">
      <div class="rincianTransaksi">
        <p class="text-rincian mt-3">Rincian Transaksi</p>
        <div class="row mt-3">
          <div class="col-6">Tanggal</div>
          <div class="col-5">: <?= date("Y-m-d") ?></div>
        </div>
        <div class="row mt-1">
          <div class="col-6">Kategori Produk</div>
          <div class="col-5">: <?= $produk[3] ?></div>
        </div>
        <div class="row mt-1">
          <div class="col-6">Nama Produk</div>
          <div class="col-5">: <?= $produk[1] ?></div>
        </div>
        <hr>
        <div class="row mt-3">
          <div class="col-6">
            <p style="font-weight: bold;">Harga</p>
          </div>
          <div class="col-5">
            <p style="font-weight: bold;">: Rp. <?= $produk[2] * ((100 - get_data_promo_by_id($produk[5])[2]) / 100) ?></p>
          </div>
        </div>
      </div>
      <div class="qr">
        <div class="row mt-5 mb-5">
          <div class="col-4"></div>
          <div class="col-5"> <img src="https://kelembagaan-api.kemnaker.go.id/v1/institutions/114ce108-7e0a-423c-97a3-183b17119484/qr-code" width="180" height="180"></div>
        </div>
      </div>
    </div>
  </div>
  <script>
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {

      };
    };

    xmlhttp.open("GET", "../script/kurang_stok.php?id=<?= $id ?>&terjual=1", true);
    xmlhttp.send();
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>

</html>