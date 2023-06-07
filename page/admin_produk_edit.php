<?php
include('../script/produk.php');
include('../script/promo.php');
include('../script/session.php');

check_admin_session();

$result = get_data_produk_by_id($_GET['id']);

if (isset($_POST['submit'])) {
    $status = update_data_produk($_GET['id'], $_POST['kategori'], $_POST['nama_produk'], $_POST['harga_produk'], $_POST['promo'], $_POST['stok']);

    if ($status) {
        header('location: ./admin_produk_data.php');
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Produk</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="../style/general.css">
    <link rel="stylesheet" href="../style/nav.css">
    <link rel="stylesheet" href="../style/font.css">
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
                    <h2 style="font-weight: bold;">Ubah Data Produk</h2>
                </li>
            </ul>
            <form method="POST" action="./admin_produk_edit.php?id=<?= $_GET['id'] ?>">
                <div class="mb-3">
                    <label for="kategori" class="form-label">Kategori</label>
                    <select class="form-select" aria-label="Default select example" id="kategori" name="kategori">
                        <option value="Pulsa Isi Ulang" <?php if ($result[3] === 'Pulsa Isi Ulang') {
                                                            echo 'selected';
                                                        } ?>>Pulsa Isi Ulang</option>
                        <option value="Paket Data" <?php if ($result[3] === 'Paket Data') {
                                                        echo 'selected';
                                                    } ?>>Paket Data</option>
                        <option value="Token Listrik" <?php if ($result[3] === 'Token Listrik') {
                                                            echo 'selected';
                                                        } ?>>Token Listrik</option>
                        <option value="Voucher Game" <?php if ($result[3] === 'Voucher Game') {
                                                            echo 'selected';
                                                        } ?>>Voucher Game</option>
                        <option value="Telpon Telkomsel" <?php if ($result[3] === 'Telpon Telkomsel') {
                                                                echo 'selected';
                                                            } ?>>Telpon Telkomsel</option>
                        <option value="E-Toll" <?php if ($result[3] === 'E-Toll') {
                                                    echo 'selected';
                                                } ?>>E-Toll</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="nama_produk" class="form-label">Nama Produk</label>
                    <input type="text" class="form-control" id="nama_produk" name="nama_produk" value="<?= $result[1] ?>">
                </div>
                <div class="mb-3">
                    <label for="harga_produk" class="form-label">Harga Produk</label>
                    <input type="number" class="form-control" id="harga_produk" name="harga_produk" value="<?= $result[2] ?>">
                </div>
                <div class="mb-3">
                    <label for="promo" class="form-label">Promo</label>
                    <select class="form-select" aria-label="Default select example" id="promo" name="promo" onchange="toogle_promo_other()">
                        <option selected>Pilih Promo</option>
                        <?php
                        foreach (get_data_promo() as $promo) {
                        ?>
                            <option value="<?= $promo[0] ?>" <?php if ($result[5] === $promo[0]) {
                                                                    echo 'selected';
                                                                } ?>><?= $promo[1] ?> - <?= $promo[2] ?>%</option>
                        <?php
                        }
                        ?>
                    </select>

                </div>
                <div class="mb-3">
                    <label for="stok" class="form-label">Stok</label>
                    <input type="number" class="form-control" id="stok" name="stok" value="<?= $result[4] ?>">
                </div>
                <button type="submit" class="btn btn-primary" name="submit">Simpan</button>
            </form>
        </div>
    </div>
</body>

</html>