<?php
include('../script/promo.php');
include('../script/session.php');

check_admin_session();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Promo | Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="../style/general.css">
    <link rel="stylesheet" href="../style/component.css">
    <link rel="stylesheet" href="../style/font.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <script src="../script/Header.js"></script>
    <script src="https://kit.fontawesome.com/eff27b1688.js" crossorigin="anonymous"></script>
</head>

<body>
    <main-header active="produk"></main-header>
    <div class="container-fluid w-100 p-0" style="margin-top: 100px !important;position: absolute;">
        <div class="container mx-auto px-5 mt-1">
            <ul class="p-0 position-relative">
                <li style="display: inline-block;">
                    <h2 style="color: white;font-weight: bold;">Daftar Promo</h2>
                </li>
                <li class="position-absolute end-0" style="display: inline-block;">
                    <a href="./admin_promo_add.php">
                        <button type="button" class="btn btn-success" style="font-size: 11pt !important;">+ Tambah</button>
                    </a>
                </li>
            </ul>
            <table class="table border-primary mt-3">
                <thead>
                    <tr>
                        <th scope="col">Nama Promo</th>
                        <th scope="col">Diskon</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach (get_data_promo() as $result) {
                    ?>
                        <tr>
                            <td><?= $result[1] ?></td>
                            <td><?= $result[2] ?>%</td>
                            <td>
                                <a href="./admin_promo_edit.php?id=<?= $result[0] ?>"><i class="fa-solid fa-pen-to-square"></i></a>
                                <a href="./admin_promo_delete.php?id=<?= $result[0] ?>" style="margin-left: 10px;"><i class="fa-solid fa-trash"></i></a>
                            </td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>