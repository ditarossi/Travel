<!DOCTYPE html>
<html>
    <head>
        <title> Riwayat Pemesanan </title>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="style2.css">
    </head>

    <body>
        <section class="konten">
            <div class="container">
                </br>
                <h2><strong>Riwayat Pemesanan Anda</strong></h2>
                </br>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th> No </th>
                            <th> Tanggal Pemesanan</th>
							<th> Tanggal Tour</th>
                            <th> Total Harga</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php
                            $nomor = 1;
							$akunyangpesan = $_SESSION['email'];
                            // MENAMPILKAN PRODUK YANG SEDANG DIPERULANGKAN BERDASARKAN ID PRODUK
                            require('database.php');
                            $queryselect = "select * from pemesanan WHERE email_pelanggan='$akunyangpesan'";
							$hasilselect = mysqli_query($koneksi1,$queryselect);
							while($row = mysqli_fetch_array($hasilselect))
							{
                            
                        ?>
                            <tr>
                                <td> <?php echo $nomor; ?> </td>
                                <td> <?php echo $row['tgl_pemesanan']; ?> </td>
								<td> <?php echo $row['tgl_travelling']; ?> </td>
								<td> Rp. <?php echo number_format($row['total_pemesanan']); ?> </td>
                            </tr>

                        <?php  
                            $nomor++;
							}
                        ?>
                    </tbody>
                </table>
            </div>
            </br></br>
        </section>
    </body>
</html>