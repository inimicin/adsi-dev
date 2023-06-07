<?php
include('../script/session.php');

check_admin_session();
?>

<!DOCTYPE html>
<html lang="en">

<style>
  body {
    padding: 0;
    position: relative;
    min-height: 100vh;
    background: #ffffff;
    background-image: radial-gradient(circle farthest-corner at 0.1% 0.1%, rgb(255, 215, 215) 0%, rgb(255, 255, 255) 99.9%);
    /* background-image: linear-gradient( to left, rgb(177, 213, 244)0.2%, rgb(255,255,255)90%); */
  }
</style>



<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Beranda | Admin</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="../style/general.css">
    <link rel="stylesheet" href="../style/font.css">
    <link rel="stylesheet" href="../style/nav.css">
    <link rel="stylesheet" href="../style/admin_beranda.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <script src="../script/Header.js"></script>
    <script src="https://kit.fontawesome.com/eff27b1688.js" crossorigin="anonymous"></script>
</head>

<body>

  <main-header active="beranda"></main-header>
  <div class="row row-cols-1 row-cols-md-3 g-4" style="
          width: 60%;
          height: 30%;
          position: absolute;
          top: 50%;
          transform: translate(0, -50%);
          left: 22%;
        ">
    <div class="col">
    <a href="./admin_laporan_stok.php" class="card dropdown-toggle text-decoration-none" type="button" data-bs-toggle="dropdown" aria-expanded="false" style="color: black; background-color: transparent !important; width: 75%; height:100%">
        <img src="../res/laporan_icon.png" style="width: 60%; height: 50%; position:relative; left:20% ; top: 20%" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title" style="color: black; position:relative; left:15% !important; top: 60% ">Laporan</h5>
        </div>
      </a>
      <ul class="dropdown-menu">
        <li><a class="dropdown-item" href="./admin_laporan_stok.php" style ="font-size:11pt">Laporan Stok</a></li>
        <li><a class="dropdown-item" href="./admin_laporan_pendapatan.php" style ="font-size:11pt">Laporan Pendapatan</a></li>
        <li><a class="dropdown-item" href="./admin_laporan_keuangan.php" style ="font-size:11pt">Laporan Keuangan</a></li>
      </ul>
    </div>
    <div class="col">
      <a href="./admin_penjualan.php" class="card text-decoration-none" style="color: black; background-color: transparent !important; width: 75%; height:100%">
        <img src="../res/Penjualan_icon.png" style="width: 50%; height: 45%; position:relative; left:27% ; top: 20%" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title" style="color: black; position:relative; left: 15% !important; top: 60% ">Penjualan</h5>
        </div>
      </a>
    </div>
    <div class="col">
      <a href="../page/admin_produk_data.php" class="card text-decoration-none" style="color: black;background-color: transparent !important; width: 75%; height:100%">
        <img src="../res/produk_icon.png" style="width: 50%; height: 50%; position:relative; left:23% ;top: 20%" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title" style="color: black; position:relative; left:3% !important; top: 60% ">Kelola Produk</h5>
        </div>
      </a>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</body>

</html>