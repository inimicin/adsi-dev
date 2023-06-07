<?php
include('../script/produk.php');
include('../script/promo.php');
include('../script/session.php');

check_admin_session();

$allProduk = get_data_produk();
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
    <title>Penjualan | Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="../style/general.css">
    <link rel="stylesheet" href="../style/font.css">
    <link rel="stylesheet" href="../style/nav.css">
    <link rel="stylesheet" href="../style/component.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <script src="//code.jquery.com/jquery-1.12.4.min.js"></script>
    <script src="//rawgithub.com/indrimuska/jquery-editable-select/master/dist/jquery-editable-select.min.js"></script>
    <link href="//rawgithub.com/indrimuska/jquery-editable-select/master/dist/jquery-editable-select.min.css" rel="stylesheet">
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
                    <div class="form-group">
                        <label for="inputProduk" style="font-size:10pt">Nama Produk</label>
                        <select class="form-select" aria-label="Default select example" id='inputProduk' name="inputProduk">
                            <?php
                            foreach ($allProduk as $produk) {
                            ?>
                                <option value="<?= $produk[0] ?>"><?= $produk[1] ?></option>
                            <?php
                            }
                            ?>
                        </select>
                    </div>
                </li>
                <li style="display: inline-block;">
                    <div class="form-group">
                        <label for="inputJumlah" style="font-size:10pt">Jumlah</label>
                        <input type="Number" class="form-control" id="inputJumlah" style="font-size:8pt">
                    </div>
                </li>
                <li style="display: inline-block;">
                    <button type="submit" class="btn btn-primary" style="font-size:10pt" onclick="addProduk()">Tambah</button>
                </li>
            </ul>
            <table class="table table-bordered" id="tablePenjualan" style="border-color:black">
                <thead>
                    <tr style="border: 1px solid;">
                        <th scope="col" style="border:none;">Nama Produk</th>
                        <th scope="col" style="border:none;">Jumlah</th>
                        <th scope="col" style="border:none;">Promo</th>
                        <th scope="col" style="border:none;">Harga</th>
                    </tr>
                </thead>
                <tbody>
                    <tr style="border: 1px solid;">
                        <td scope="col" style="border:none;">a</td>
                        <td scope="col" style="border:none;">a</td>
                        <td scope="col" style="border:none;">a</td>
                        <td scope="col" style="border:none;">a</td>
                    </tr>
                </tbody>
            </table>
            <table class="table" style="width:50%;border-color:transparent !important;">
                <tbody>
                    <tr>
                        <th scope="row">Total</th>
                        <td>a</td>
                    </tr>
                    <tr>
                        <th scope="row">Kembali</th>
                        <td>a</td>

                    </tr>
                    <tr>
                        <th scope="row">Bayar</th>
                        <td> <input type="Number" class="form-control" id="bayar" style="font-size:8pt;width:50%">
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <script>
        // $('#inputProduk').editableSelect();
        var grandTotal = 0;
        const produkList = [];

        function createCookie(name, value, days) {
            var expires;
            if (days) {
                var date = new Date();
                date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
                expires = "; expires=" + date.toGMTString();
            } else {
                expires = "";
            }
            document.cookie = escape(name) + "=" + escape(value) + expires + "; path=/";
        }

        function addProduk() {
            createCookie('id', $('#inputProduk option:selected'), "1");
            const namaProduk = '<?php echo get_data_produk_by_id($_COOKIE['id'])[1]; ?>';
            $('#tablePenjualan tr:last').after(`
                <tr style="border: 1px solid;">
                    <td scope="col" style="border:none;">${namaProduk}</td>
                    <td scope="col" style="border:none;">a</td>
                    <td scope="col" style="border:none;">a</td>
                    <td scope="col" style="border:none;">a</td>
                </tr>
            `);
        }
    </script>
</body>

</html>