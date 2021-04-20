<?php
//koneksi ke database
require('database.php');

//menangkap posting dari input form
$username=$_POST['username'];
$password=$_POST['password'];
$nama_admin=$_POST['nama_admin'];

            $query_insert = "INSERT INTO admin (username,password_admin,nama_admin)
            VALUES ('$username','$password','$nama_admin')";
            $insert = mysqli_query($koneksi1,$query_insert);
            if($insert==1)
            {
                echo "<script>alert('Input Berhasil');</script>";
                echo "<script>location='admin.php?target=admin';</script>";
            }else
            {
                echo "<script>alert('Input Gagal');</script>";
                echo "<script>location='admin.php?target=inputadmin';</script>";
            }

?> 
