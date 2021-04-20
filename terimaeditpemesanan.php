<?php
require('database.php');
//menangkap posting dari input form
$id_pemesanan=$_POST['id_pemesanan'];
$email_pelanggan=$_POST['email_pelanggan'];
$id_jasa=$_POST['id_jasa'];
$tgl_pemesanan=$_POST['tgl_pemesanan'];
$tgl_travelling=$_POST['tgl_travelling'];
$metode_pembayaran=$_POST['metode_pembayaran'];
$total_pemesanan=$_POST['total_pemesanan'];


            //memasukkan ke database
            $query_update = "UPDATE pemesanan SET email_pelanggan='$email_pelanggan', 
            id_jasa='$id_jasa', tgl_pemesanan='$tgl_pemesanan', tgl_travelling='$tgl_travelling', 
			metode_pembayaran='$metode_pembayaran', total_pemesanan='$total_pemesanan' 
			WHERE pemesanan.id_pemesanan='$id_pemesanan' ";
            $insert = mysqli_query($koneksi1,$query_update);
            if($insert==1)
            {
                echo "<script>alert('Edit Berhasil');</script>";
                echo "<script>location='admin.php?target=pemesanan';</script>";
            }else
            {
                echo "<script>alert('Edit Gagal');</script>";
                echo "<script>location='admin.php?target=pemesanan';</script>";
            }

?>