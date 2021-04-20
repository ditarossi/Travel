<?php
//koneksi ke database
require('database.php');

//menangkap posting dari input form
$username=$_POST['username'];
$password=$_POST['password_admin'];
$nama=$_POST['nama_admin'];


            //memasukkan ke database
            $query_update = "UPDATE admin SET username='$username', password_admin='$password', 
            nama_admin='$nama' WHERE admin.username='$username' ";
            $insert = mysqli_query($koneksi1,$query_update);
            if($insert==1)
            {
                echo "<script>alert('Edit Berhasil');</script>";
                echo "<script>location='admin.php?target=admin';</script>";
            }else
            {
                echo "<script>alert('Edit Gagal');</script>";
                echo "<script>location='admin.php?target=admin';</script>";
            }

?>
