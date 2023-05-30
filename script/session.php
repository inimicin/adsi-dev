<?php
include('koneksi.php');

function check_admin_session()
{
  session_start();

  if (!(session_status() == PHP_SESSION_ACTIVE && session_id() == "admin")) {
    header("location: ./admin_login.php");
  }
}

function start_admin_session()
{
  session_id('admin');
  session_start();
}

function destroy_session()
{
  session_start();
  session_regenerate_id();
}
