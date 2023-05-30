<?php
include('koneksi.php');

function auth($username, $password) {
  $query = "SELECT * FROM `account` WHERE `username`='$username';";
  $sql = mysqli_query($GLOBALS['conn'], $query);

  if($result = mysqli_fetch_row($sql)) {
    return password_verify($password, $result[2]);
  } else {
    return false;
  }
}
?>