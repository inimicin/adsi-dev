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
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Beranda</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../script/Header.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../style/general.css">
    <link rel="stylesheet" href="../style/nav.css">
    <link rel="stylesheet" href="../style/riwayat.css" />
    <link rel="stylesheet" href="../style/font.css" />
</head>

<body>

    <main-header active="Riwayat" logged='false'></main-header>
    <div class="container-fluid main-body" style="height: 100vh">
        <div class="card" style="
          width: 40%;
          position: absolute;
          top: 40%;
          transform: translate(0, -50%);
          left: 15%;
          background-color: transparent;
        ">
            <div class="card-body">
                <h1 class="card-title" style="font-size: 25pt; margin-left:25pt;">
                    <strong>Riwayat Transaksi</strong>
                </h1>
                <div class="input-group mb-3" style="margin-top:20pt">

                    <input type="Number" class="form-control" placeholder="Masukan Nomor Telepon" id="nomorTelepon">
                    <button class="btn btn-outline-secondary btn-cari" type="button" id="Cari" onclick="updateTable()">Lihat Riwayat</button>

                </div>
            </div>
        </div>

        <div class="table-riwayat">
            <table class="table border-primary mt-3" style="width:370%; border-color:black !important; background:transparent !important;">

                <thead>
                    <tr>
                        <th scope="col">Tanggal</th>
                        <th scope="col">Produk</th>
                        <th scope="col">Total</th>
                    </tr>
                </thead>
                <tbody>

                </tbody>
            </table>
        </div>

        <div class="container home-image" style="width: 25%; height: 56.25%; position: absolute; right: 15%;top:25%;"></div>

    </div>
    <script>
        function updateTable() {
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    $('.table-riwayat table tbody').html(this.responseText);
                };
            };

            xmlhttp.open("GET", "../script/get_riwayat.php?hp=" + $('#nomorTelepon').val(), true);
            xmlhttp.send();
        }
    </script>
</body>

