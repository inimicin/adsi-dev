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
  <title>Beranda</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous" />
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
  <script src="../script/Header.js"></script>
  <link rel="stylesheet" href="../style/general.css">
  <link rel="stylesheet" href="../style/nav.css">
  <link rel="stylesheet" href="../style/admin_beranda.css">
  <link rel="stylesheet" href="../style/font.css" />
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
      <a href="#" class="card" style="background-color: transparent !important; width: 75%; height:100%">
        <img src="../res/laporan_icon.png" style="width: 60%; height: 50%; position:relative; left:20% ; top: 20%" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title" style="color: black; position:relative; left:15% !important; top: 60% ">Laporan</h5>
        </div>
      </a>
    </div>
    <div class="col">
      <a href="#" class="card" style="background-color: transparent !important; width: 75%; height:100%">
        <img src="../res/Penjualan_icon.png" style="width: 50%; height: 45%; position:relative; left:27% ; top: 20%" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title" style="color: black; position:relative; left: 15% !important; top: 60% ">Penjualan</h5>
        </div>
      </a>
    </div>
    <div class="col">
      <a href="../page/admin_produk_data.php" class="card" style="background-color: transparent !important; width: 75%; height:100%">
        <img src="../res/produk_icon.png" style="width: 50%; height: 50%; position:relative; left:23% ;top: 20%" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title" style="color: black; position:relative; left:3% !important; top: 60% ">Kelola Produk</h5>
        </div>
      </a>
    </div>
  </div>
</body>

</html>