<?php
include('../script/produk.php');
include('../script/promo.php');
include('../script/session.php');

check_admin_session();
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
</style>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kelola Produk | Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="../style/general.css">
    <link rel="stylesheet" href="../style/font.css">
    <link rel="stylesheet" href="../style/nav.css">
    <link rel="stylesheet" href="../style/admin_produk_data.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <script src="../script/Header.js"></script>
    <script src="https://kit.fontawesome.com/eff27b1688.js" crossorigin="anonymous"></script>
</head>

<body>
    <main-header active=" "></main-header>
    <div class="container-fluid w-100 p-0" style="margin-top: 100px !important;position: absolute;">
        <div class="container mx-auto px-5 mt-1">
            <ul class="p-0 position-relative">
                <li style="display: inline-block;">
                    <h2 style="color: black;font-weight: bold;">Kelola Produk</h2>
                </li>
                <li class="position-absolute end-0" style="display: inline-block;">
                    <a href="./admin_produk_add.php">
                        <button type="button" class="btn btn-success" style="font-size: 10pt !important;">Tambah</button>
                    </a>
                </li>
            </ul>
            <table class="table border-primary mt-3" style="border-color:black !important">
                <thead>
                    <tr>
                        <th scope="col">Kategori</th>
                        <th scope="col">Nama Produk</th>
                        <th scope="col">Harga</th>
                        <th scope="col">Promo</th>
                        <th scope="col">Stok</th>
                        <th scope="col"> </th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach (get_data_produk() as $result) {
                        $promo = get_data_promo_by_id($result[5]);
                    ?>
                        <tr>
                            <td><?= $result[3] ?></td>
                            <td><?= $result[1] ?></td>
                            <td>Rp. <?= $result[2] ?></td>
                            <td><?= $promo[2] ?>%</td>
                            <td><?= $result[4] ?></td>
                            <td>
                                <a href="./admin_produk_edit.php?id=<?= $result[0] ?>"><i class="fa-solid fa-pen-to-square"></i></a>
                                <a style="margin-left: 10px;color: rgba(var(--bs-link-color-rgb),var(--bs-link-opacity,1));" onclick="confirmHapus('<?= $result[0] ?>')"><i class="fa-solid fa-trash"></i></a>
                            </td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
    <script>
        function confirmHapus(id) {
            if (window.confirm('Yakin menghapus data?')) {
                location.href = 'admin_produk_delete.php?id=' + id;
            }
        }
    </script>
</body>

</html>