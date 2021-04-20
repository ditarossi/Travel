<?php
//koneksi ke database
require('database.php');

//menangkap posting dari input form
$email=$_POST['email_pelanggan'];
$password=$_POST['password'];
$nama_pelanggan=$_POST['nama_pelanggan'];
$telp_pelanggan=$_POST['telp_pelanggan'];

            $query_insert = "INSERT INTO pelanggan (email_pelanggan,password_pelanggan,nama_pelanggan, telepon_pelanggan)
            VALUES ('$email','$password','$nama_pelanggan','$telp_pelanggan')";
            $insert = mysqli_query($koneksi1,$query_insert);
            if($insert==1)
            {
                echo "<script>alert('Input Berhasil');</script>";
                echo "<script>location='admin.php?target=pelanggan';</script>";
            }else
            {
                echo "<script>alert('Input Gagal');</script>";
                echo "<script>location='admin.php?target=inputpelanggan';</script>";
            }

?> 
