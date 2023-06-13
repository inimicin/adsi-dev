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
            <form id="produkForm">
                <ul class="p-0 position-relative">
                    <li style="display: inline-block;">
                        <div class="form-group">
                            <label for="inputProduk" style="font-size:10pt">Nama Produk</label>
                            <select class="form-select" aria-label="Default select example" id='inputProduk' name="inputProduk" onchange="updateMaxJumlah()">
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
                            <input type="Number" class="form-control" id="inputJumlah" style="font-size:8pt" min="1" required>
                        </div>
                    </li>
                    <li style="display: inline-block;">
                        <button type="submit" class="btn btn-primary" style="font-size:10pt">Tambah</button>
                    </li>
                </ul>
            </form>
            <table class="table table-bordered" id="tablePenjualan" style="border-color:black">
                <thead>
                    <tr style="border: 1px solid;">
                        <th scope="col" style="border:none;">Nama Produk</th>
                        <th scope="col" style="border:none;">Jumlah</th>
                        <th scope="col" style="border:none;">Promo</th>
                        <th scope="col" style="border:none;">Harga</th>
                        <th scope="col" style="border: none;">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- <tr style="border: 1px solid;">
                        <td scope="col" style="border:none;">a</td>
                        <td scope="col" style="border:none;">a</td>
                        <td scope="col" style="border:none;">a</td>
                        <td scope="col" style="border:none;">a</td>
                    </tr> -->
                </tbody>
            </table>
            <div class="container-fluid w-100 p-0" style="display: flex;justify-content: flex-end;">
                <table class="table" style="width:40%;border-color:transparent !important;">
                    <tbody>
                        <form id="formBayar">
                            <tr>
                                <th scope="row">Total</th>
                                <td id="totalHarga">Rp. 0</td>
                            </tr>
                            <tr>
                                <th scope="row">Kembali</th>
                                <td id="totalKembali">Rp. 0</td>
                            </tr>
                            <tr>
                                <th scope="row" style="width: 50%">Bayar</th>
                                <td> <input type="Number" class="form-control" id="bayar" style="font-size:8pt;width:100%" onchange="getKembali()">
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">

                                </th>
                                <td>
                                    <button class="btn btn-primary" style="font-size:10pt">Bayar</button>
                                </td>
                            </tr>
                        </form>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script>
        var total = 0;
        const produkList = [];

        $('#produkForm').submit(function() {
            event.preventDefault();
            produkList.push([$('#inputProduk option:selected').val(), $('#inputJumlah').val()]);
            console.log(produkList);
            showData();
        })

        $('#formBayar').submit(function() {
            event.preventDefault();
            produkList.forEach(element => {
                kurangStok(element[0], element[1]);
                var xmlhttp = new XMLHttpRequest();
                xmlhttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                        $('body div:last').after(this.response);
                    };
                };

                xmlhttp.open("GET", "../script/save_penjualan.php?id=" + element[0] + "&jumlah=" + element[1], true);
                xmlhttp.send();
            });
            alert('Sukses Melakukan Pembelian');
            location.reload();
        })

        function kurangStok(id, terjual) {
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {

                };
            };

            xmlhttp.open("GET", "../script/kurang_stok.php?id=" + id + "&terjual=" + terjual, true);
            xmlhttp.send();
        }

        function deleteData(id) {
            produkList.splice(id, 1);
            showData();
        }

        function getTotal() {
            produkList.forEach(element => {
                var xmlhttp = new XMLHttpRequest();
                xmlhttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                        total = total + parseInt(this.responseText) * element[1];
                        $('#totalHarga').html(`Rp. ${total}`);
                        $('#bayar').attr({
                            'min': total
                        });
                    };
                };

                xmlhttp.open("GET", "../script/get_price.php?id=" + element[0], true);
                xmlhttp.send();
            });
        }

        function getKembali() {
            $('#totalKembali').html('Rp. ' + (parseInt($('#bayar').val()) - total));
        }

        function showData() {
            $('#tablePenjualan thead').html(`
                <tr style="border: 1px solid;">
                    <th scope="col" style="border:none;">Nama Produk</th>
                    <th scope="col" style="border:none;">Jumlah</th>
                    <th scope="col" style="border:none;">Promo</th>
                    <th scope="col" style="border:none;">Harga</th>
                    <th scope="col" style="border: none;">Aksi</th>
                </tr>
            `);

            produkList.forEach(element => {
                var xmlhttp = new XMLHttpRequest();
                xmlhttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                        $('#tablePenjualan tr:last').after(this.responseText);
                    };
                };

                xmlhttp.open("GET", "../script/produk_penjualan_list.php?id=" + element[0] + "&jumlah=" + element[1] + "&index=" + produkList.indexOf(element), true);
                xmlhttp.send();
            });

            getTotal();
        }

        function updateMaxJumlah() {
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    $('#inputJumlah').attr({
                        'max': this.responseText
                    });
                };
            };

            xmlhttp.open("GET", "../script/get_max_stok.php?id=" + $('#inputProduk option:selected').val(), true);
            xmlhttp.send();
        }
    </script>
</body>

</html>