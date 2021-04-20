<?php
//koneksi ke database
require('database.php');

//menangkap posting dari input form
$email_pelanggan=$_POST['email_pelanggan'];
$password=$_POST['password_pelanggan'];
$nama=$_POST['nama_pelanggan'];
$telepon=$_POST['telepon_pelanggan'];


            //memasukkan ke database
            $query_update = "UPDATE pelanggan SET email_pelanggan='$email_pelanggan', password_pelanggan='$password', 
            nama_pelanggan='$nama', telepon_pelanggan='$telepon' WHERE pelanggan.email_pelanggan='$email_pelanggan' ";
            $insert = mysqli_query($koneksi1,$query_update);
            if($insert==1)
            {
                echo "<script>alert('Edit Berhasil');</script>";
                echo "<script>location='admin.php?target=pelanggan';</script>";
            }else
            {
                echo "<script>alert('Edit Gagal');</script>";
                echo "<script>location='admin.php?target=pelanggan';</script>";
            }

?>
