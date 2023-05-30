<?php
include('../script/promo.php');

if(delete_data_promo($_GET['id'])) {
    header('location: ./admin_promo_data.php');
}

?>