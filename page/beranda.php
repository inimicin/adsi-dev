<?php
session_start();

include("./modal.php");

if (!(session_status() == PHP_SESSION_ACTIVE && session_id() == "admin")) {
  $logStatus = false;
}

?>

<!DOCTYPE html>
<html lang="en">

<style>
  body {
    min-height: 100vh;
    background: #ffffff;
    background-image: radial-gradient(circle farthest-corner at 0.1% 0.1%, rgb(255, 215, 215) 0%, rgb(255, 255, 255) 99.9%);
    /* background-image: linear-gradient( to left, rgb(177, 213, 244)0.2%, rgb(255,255,255)90%); */
  }

  .navbar {
    z-index: 10;
  }

  .nav-item {
    padding-left: 10px !important;
    padding-right: 10px !important;
  }

  .nav-link {
    color: rgb(171, 178, 182) !important;
  }

  .active {
    color: #000000 !important;
  }

  .nav-link:hover {
    color: #000000 !important;
  }

  .container {
    display: inherit;
    margin-top: 217;
    margin-left: 142;

  }

  .container img {
    margin-left: 800px;
  }

  .btnin {
    border-radius: 10px;
    background-color: #C7D1EA;
  }
</style>



<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Beranda</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous" />
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="../style/general.css">
  <link rel="stylesheet" href="../style/nav.css">
  <link rel="stylesheet" href="../style/beranda.css" />
  <link rel="stylesheet" href="../style/font.css" />
</head>

<body>

  <main-header active="beranda" logged="<?php if(!$logStatus){echo "false";} ?>"></main-header>
  <div class="container-fluid main-body" style="height: 100vh">
    <div class="card" style="
          width: 40%;
          position: absolute;
          top: 50%;
          transform: translate(0, -50%);
          left: 15%;
          background-color: transparent;
        ">
      <div class="card-body">
        <h1 class="card-title" style="font-size: 30pt">
          <strong>Mudah dan Cepat </strong>
        </h1>
        <p class="card-text my-4">
          Dapatkan pulsa dan kuota internet anda
          tanpa ribet bersama gerai digital star cell
        </p>
        <a href="#produk" class="btn btn-primary btn-beli">
          <img src="../res/cart_icon.png" width="25">
          <span style="margin-left: 10px;">Beli Sekarang</span>
        </a>
      </div>
    </div>

    <div class="container home-image" style="width: 25%; height: 56.25%; position: absolute; right: 15%;"></div>
  </div>

  <div class="" id="produk" style="padding-bottom:20%; padding-left:50px;padding-right:50px;">
    <center>
      <h1 style="font-size: 30pt; padding-bottom: 100px;">
        <strong>Produk </strong>
      </h1>
    </center>

    <table style=>
      <tr style="padding-left:10pt;padding-right:10pt;">
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
      </tr>
      <tr style="padding-left:10pt;padding-right:10pt;">
        <td><a href="#" data-bs-toggle="modal" data-bs-target="#myModalPulsa"><img src="../res/pulsa_biasa.png" alt="Gambar 1" width="70" height="70" data-bs-toggle="modal" data-bs-target="#myModalPulsa"></a> </td>
        <td>Pulsa isi ulang</td>
        <td style="padding-left: 400px;"><a href="#" data-bs-toggle="modal" data-bs-target="#myModalPaket"><img src="../res/paketdata.png" alt="Gambar 1" width="70" height="70" data-bs-toggle="modal" data-bs-target="#myModalPaket"></a>
        </td>
        <td>Paket Data</td>
        <td style="padding-left: 400px;"><a href="#" data-bs-toggle="modal" data-bs-target="#myModalToklis"><img src="../res/token_listrik.png" alt="Gambar 1" width="70" height="70" data-bs-toggle="modal" data-bs-target="#myModalToklis"></a></td>
        <td>Token Listrik</td>

      </tr>
      <tr style="padding-left:10pt;padding-right:10pt;">
        <td style="padding-top: 150px;"><a href="#" data-bs-toggle="modal" data-bs-target="#myModalVoucher"><img src="../res/gamevocer.png" alt="Gambar 1" width="70" height="70" data-bs-toggle="modal" data-bs-target="#myModalVoucher"></a>
        </td>
        <td style="padding-top: 150px;">Voucher Game</td>
        <td style="padding-left: 400px; padding-top: 150px;"><a href="#" data-bs-toggle="modal" data-bs-target="#myModalTelpon"> <img src="../res/telkomsel.png" alt="Gambar 1" width="70" height="70" data-bs-toggle="modal" data-bs-target="#myModalTelpon"></a></td>
        <td style="padding-top: 150px;">Telpon telkomsel</td>
        <td style="padding-left: 400px; padding-top: 150px;"><a href="#" data-bs-toggle="modal" data-bs-target="#myModalEtoll"> <img src="../res/e-toll.png" alt="Gambar 1" width="70" height="70" data-bs-toggle="modal" data-bs-target="#myModalEtoll"></a></td>
        <td style="padding-top: 150px;">E-toll</td>
      </tr>

    </table>
  </div>

  <div id="kontak" class="" style="padding-bottom:20%;">
    <center>
      <h1 style="font-size: 30pt;">
        <strong>Kontak Kami</strong>
      </h1>

      <h1 style="font-size: 18pt;">
        xxxxxx@xxxx.com
      </h1>

    </center>
    <div class="container home-image" style="width: 15%; height: 30%;position:relative;margin-top:100px;"></div>

  </div>



  <script src="../script/Header.js"></script>
</body>

</html>