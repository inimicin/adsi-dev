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
    <link rel="stylesheet" href="../style/role.css" />
    <link rel="stylesheet" href="../style/font.css" />
</head>

<body>

    <main-header logged='false'></main-header>
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
                <h1 class="card-title" style="font-size: 25pt; margin-left:25pt;">
                    <strong>Masuk Sebagai </strong>
                </h1>
                <div>
                    <a href="./beranda.php"><button type="button" class="btn btn-primary" style="position:relative;margin-top:20pt;">Pelanggan</button></a>
                    <a href="./admin_login.php"><button type="button" class="btn btn-primary" style="position:relative;margin-top:20pt">Administrator</button></a>
                </div>
            </div>
        </div>

        <div class="container home-image" style="width: 25%; height: 56.25%; position: absolute; right: 15%;top:25%;"></div>
    </div>