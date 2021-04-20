<?php
$username=$_POST['username'];
$password=$_POST['password'];
require('database.php');
$queryselect = "SELECT * FROM admin WHERE username='$username' and password_admin='$password' ";
$hasilselect = mysqli_query($koneksi1,$queryselect);
$jumlah = mysqli_num_rows($hasilselect);
if ($jumlah==1){
    while($row = mysqli_fetch_array($hasilselect))
    {
        session_start();
        $_SESSION['username']=$row['username'];
        echo "<script>alert('Login Berhasil');</script>";
        echo "<script>location='admin.php';</script>";

    }
}else {echo "<script>alert('Login gagal, Username atau Password tidak sesuai !');</script>"; echo "<script>location='login.php';</script>";}

?>

