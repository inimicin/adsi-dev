<?php
include('../script/produk.php');
include('../script/session.php');

check_admin_session();

if(delete_data_produk($_GET['id'])) {
    echo "
        <script>
            alert('Sukses Menghapus Data');
            window.location = './admin_produk_data.php';
        </script>";
} else {
    echo "
    <script>
        alert('Gagal Menghapus Data');
        window.location = './admin_produk_data.php';
    </script>";
}

?>