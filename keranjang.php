<?php
   if (empty($_SESSION["keranjang"]) || !isset($_SESSION['keranjang']))
    {
        echo " <script> alert('Keranjang Kosong, Silahkan Belanja'); </script> ";
        echo " <script> location='pelanggan.php?target=destination'; </script> ";
    }
	
	error_reporting(0);
    if(!ISSET($_SESSION['email']))
	{ 
		echo "<script> alert ('Harus Login dulu'); </script>";
		echo "<script> location = 'login.php'; </script>";
	}
?>
<!DOCTYPE html>
<html>
    <head>
        <title> Keranjang Belanja </title>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="style2.css">
    </head>

    <body>
        <section class="konten">
            <div class="container">
                </br>
                <h2><strong> Keranjang Belanja Paket Wisata</strong></h2>
                </br>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th> No </th>
                            <th> Paket Jasa</th>
                            <th> Harga</th>
                            <th> Jumlah</th>
                            <th> Subharga</th>
                            <th> Aksi</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php
                            $nomor = 1;
                            foreach ($_SESSION['keranjang'] as $id_jasa => $jumlah):
                        ?>

                        <?php
                            // MENAMPILKAN PRODUK YANG SEDANG DIPERULANGKAN BERDASARKAN ID PRODUK
                            require('database.php');
                            $queryselect = "select * from jasa WHERE id_jasa='$id_jasa' ";
                            $ambil = mysqli_query($koneksi1,$queryselect);
                            $pecah = $ambil -> fetch_assoc();
                            $subharga = $pecah['harga_jasa'] * $jumlah;
                        ?>
                            <tr>
                                <td> <?php echo $nomor; ?> </td>
                                <td> <?php echo $pecah['nama_jasa']; ?> </td>
                                <td> Rp. <?php echo number_format($pecah['harga_jasa']); ?> </td>
                                <td> <?php echo $jumlah; ?> </td>
                                <td> Rp. <?php echo number_format($subharga); ?> </td>
                                <td>  
                                    <a href="hapuskeranjang.php?id=<?php echo $id_jasa ?>" class="btn btn-danger btn-xs"> Hapus </a>
                                </td>
                            </tr>

                        <?php  
                            $nomor++;
                            endforeach
                        ?>
                    </tbody>
                </table>

                </br>
                <a href="pelanggan.php?target=destination" class="btn btn-primary">Tambah Pesanan</a>
                <a href="pelanggan.php?target=checkout" class="btn btn-warning">Checkout</a>
            </div>
            </br></br>
        </section>
    </body>
</html>