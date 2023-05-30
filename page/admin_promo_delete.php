<?php
include('../script/promo.php');
include('../script/session.php');

check_admin_session();

if(delete_data_promo($_GET['id'])) {
    header('location: ./admin_promo_data.php');
}

?>