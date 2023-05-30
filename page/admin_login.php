<?php
include('../script/account.php');
include('../script/session.php');

if (isset($_POST['submit'])) {
  if (auth($_POST['username'], $_POST['password'])) {
    start_admin_session();
    header('location: ./admin_beranda.php');
  }
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
</style>



<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Beranda</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous" />
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="../style/general.css">
  <link rel="stylesheet" href="../style/nav.css">
  <link rel="stylesheet" href="../style/admin_login.css">
  <link rel="stylesheet" href="../style/font.css" />
</head>

<body>

  <main-header active="beranda"></main-header>
  <div class="container-fluid main-body w-100" style="height: 100vh">
    <div class="container-fluid form-container px-5" style="
          width: 40%;
          padding-right: 50px;
          position: absolute;
          top: 50%;
          left: 10%;
          transform: translate(0, -50%);
        ">
      <form method="POST" action="./admin_login.php">
        <h2 class="mb-4">Masuk</h2>
        <div class="form-group">
          <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Username" aria-label="Username" name="username" aria-describedby="basic-addon1">
          </div>
        </div>
        <div class="form-group">
          <div class="input-group mb-3">
            <input type="password" class="form-control" placeholder="Password" aria-label="Username" name="password" aria-describedby="basic-addon1">
          </div>
        </div>
        <button type="submit" class="btn btn-primary btn-save" name="submit">Submit</button>
      </form>
    </div>



    <script src="../script/Header.js"></script>
</body>

</html>