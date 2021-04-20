<?php
    require('database.php');
    //JIKA BELUM LOGIN HARUS LOGIN DULU
	error_reporting(0);
    if(!ISSET($_SESSION['email']))
	{ 
		echo "<script> alert ('Harus Login dulu'); </script>";
		echo "<script> location = 'login.php'; </script>";
	}
	

    //MENANGKAP ID PRODUK
    $id_jasa = $_GET['id'];

    // JIKA DIKERANJANG SUDAH ADA PRPDUK, MAKA +1. JIKA BELUM MAKA = 1
    if (isset($_SESSION['keranjang'] [$id_jasa]))
    {
        $_SESSION['keranjang'] [$id_jasa] += 1;
    }
    else
    {
        $_SESSION['keranjang'] [$id_jasa] = 1;   
    }

    // PINDAH KE HALAMAN KERANJANG
    echo "<script> alert ('Produk Dimasukan ke Keranjang'); </script>";
    echo "<script> location='pelanggan.php?target=keranjang'; </script>";

    /*echo "<pre>";
    print_r($_SESSION);
    echo "</pre>";*/
?>