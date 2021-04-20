<?php
    session_start();
    $id_jasa = $_GET['id'];
    unset ($_SESSION['keranjang'][$id_jasa]);

    echo "<script> alert ('Produk Dihapus dari Keranjang'); </script>";
    echo "<script> location='pelanggan.php?target=keranjang'; </script>";
?>