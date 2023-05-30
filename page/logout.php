<?php
include('../script/session.php');

destroy_session();
header('location: ./admin_login.php');
?>