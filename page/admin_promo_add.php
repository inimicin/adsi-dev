<?php
include('../script/produk.php');
include('../script/promo.php');
include('../script/session.php');

check_admin_session();

if (isset($_POST['submit'])) {
    $status = save_data_promo($_POST['nama_promo'], $_POST['diskon']);

    if ($status) {
        echo "
        <script>
            alert('Sukses Menambahkan Data');
            window.location = './admin_promo_data.php';
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

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Promo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="../style/general.css">
    <link rel="stylesheet" href="../style/nav.css">
    <link rel="stylesheet" href="../style/font.css">
    <link rel="stylesheet" href="../style/admin_produk_add.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
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
                    <h2 style="font-weight: bold;">Tambah Data Promo</h2>
                </li>
            </ul>
            <form method="POST" action="./admin_promo_add.php">
                <div class="mb-3">
                    <label for="nama_promo" class="form-label">Nama Promo</label>
                    <input type="text" class="form-control" id="nama_promo" name="nama_promo">
                </div>
                <div class="mb-3">
                    <label for="diskon" class="form-label">Diskon</label>
                    <input type="number" class="form-control" id="diskon" name="diskon">
                </div>
                <button type="submit" class="btn btn-primary" name="submit">Simpan</button>
            </form>
        </div>
    </div>
</body>

</html>