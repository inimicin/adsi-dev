<?php
include('../script/produk.php');
include('../script/promo.php');
include('../script/session.php');

check_admin_session();

if (isset($_POST['submit'])) {
    $status = save_data_produk($_POST['kategori'], $_POST['nama_produk'], $_POST['harga_produk'], $_POST['promo'], $_POST['stok']);

    if ($status) {
        // header('location: ./admin_produk_data.php');
        echo "
        <script>
            alert('Sukses Menambahkan Data');
            window.location = './admin_produk_data.php';
        </script>";
    } else {
        echo "
        <script>
            alert('Gagal Menambahkan Data');
        </script>";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<style>
    body {
        min-height: 100vh;
        background: #ffffff;  
        background-image: radial-gradient( circle farthest-corner at 0.1% 0.1%,  rgb(255, 215, 215) 0%, rgb(255, 255, 255) 99.9% );
        /* background-image: linear-gradient( to left, rgb(177, 213, 244)0.2%, rgb(255,255,255)90%); */
    }
  </style>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Produk</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="../style/general.css">
    <link rel="stylesheet" href="../style/font.css">
    <link rel="stylesheet" href="../style/nav.css">
    <link rel="stylesheet" href="../style/admin_produk_add.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <script src="../script/Header.js"></script>
    <script src="../script/utility.js"></script>
    <script src="https://kit.fontawesome.com/eff27b1688.js" crossorigin="anonymous"></script>
</head>

<body>
    <main-header active=" "></main-header>
    <div class="container-fluid w-100 p-0" style="margin-top: 100px !important;position: absolute;">
        <div class="container mx-auto px-5 mt-1" style="margin-bottom: 100px !important;">
            <ul class="p-0 position-relative">
                <li style="display: inline-block;">
                    <h2 style="font-weight: bold;">Tambah Data Produk</h2>
                </li>
            </ul>
            <form method="POST" action="./admin_produk_add.php">
                <div class="mb-3">
                    <label for="kategori" class="form-label">Kategori</label>
                    <select class="form-select" aria-label="Default select example" id="kategori" name="kategori">
                        <option selected>Pilih Kategori</option>
                        <option value="Pulsa Isi Ulang">Pulsa Isi Ulang</option>
                        <option value="Paket Data">Paket Data</option>
                        <option value="Token Listrik">Token Listrik</option>
                        <option value="Voucher Game">Voucher Game</option>
                        <option value="Telpon Telkomsel">Telpon Telkomsel</option>
                        <option value="E-Toll">E-Toll</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="nama_produk" class="form-label">Nama Produk</label>
                    <input type="text" class="form-control" id="nama_produk" name="nama_produk">
                </div>
                <div class="mb-3">
                    <label for="harga_produk" class="form-label">Harga Produk</label>
                    <input type="number" class="form-control" id="harga_produk" name="harga_produk">
                </div>
                <div class="mb-3">
                    <label for="promo" class="form-label">Promo</label>
                    <div class="row">
                        <div class="col-10">
                            <select class="form-select" aria-label="Default select example" id="promo" name="promo"
                                onchange="toogle_promo_other()">
                                <option selected>Pilih Promo</option>
                                <?php
                                    foreach (get_data_promo() as $result) {
                                ?>
                                    <option value="<?= $result[0] ?>"><?= $result[1] ?> - <?= $result[2] ?>%</option>
                                <?php
                                    }
                                ?>
                            </select>
                        </div>
                        <div class="col-2">
                            <a href="./admin_promo_data.php"><button type="button" class="btn btn-primary w-100" style= "font-size:10pt">Lihat Promo</button></a>
                        </div>

                    </div>
                </div>
                <div class="mb-3">
                    <label for="stok" class="form-label">Stok</label>
                    <input type="number" class="form-control" id="stok" name="stok">
                </div>
                <button type="submit" class="btn btn-primary" name="submit" style= "font-size:10pt">Simpan</button>
            </form>
        </div>
    </div>
</body>

</html>