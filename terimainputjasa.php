<?php
//koneksi ke database
require('database.php');

//menangkap posting dari input form
$idjasa=$_POST['id_jasa'];
$nama=$_POST['nama_jasa'];
$harga=$_POST['harga_jasa'];
$fasilitas=$_POST['fasilitas_jasa'];
$status=$_POST['status_jasa'];

$namafolder="upload/"; //folder tempat menyimpan file
if (!empty($_FILES["filegbr"]["tmp_name"]))
{
    $jenis_gambar=$_FILES['filegbr']['type']; //memeriksa format gambar
    if($jenis_gambar=="image/jpeg" || $jenis_gambar=="image/jpg" || $jenis_gambar=="image/gif" || $jenis_gambar=="image/png")
    {
        $lampiran = $namafolder . basename($_FILES['filegbr']['name']);
        if (move_uploaded_file($_FILES['filegbr']['tmp_name'], $lampiran)) 
        {
            $namafile = $_FILES['filegbr']['name'];
            //memasukkan ke database
            $query_insert = "INSERT INTO jasa (id_jasa,nama_jasa,harga_jasa,foto_jasa,fasilitas_jasa,id_status)
            VALUES ('$idjasa','$nama','$harga','$namafile', '$fasilitas', '$status')";
            $insert = mysqli_query($koneksi1,$query_insert);
            if($insert==1)
            {
                echo "<script>alert('Input Berhasil');</script>";
                echo "<script>location='admin.php?target=jasa';</script>";
            }else
            {
                echo "<script>alert('Input Gagal, ID yang Anda masukkan mungkin sudah terpakai');</script>";
                echo "<script>location='admin.php?target=inputjasa';</script>";
            }
           
            
        }else {echo "<script>alert('Gambar gagal dikirim');</script>"; echo "<script>location='admin.php?target=inputjasa';</script>";}
    } else {echo "<script>alert('Jenis gambar yang anda kirim salah. Harus .jpg .jpeg .gif .png');</script>"; 
        echo "<script>location='admin.php?target=inputjasa';</script>";}
} else {echo "<script>alert('Input Gagal, Gambar belum dimasukkan');</script>";
    echo "<script>location='admin.php?target=inputjasa';</script>";}

?> 
