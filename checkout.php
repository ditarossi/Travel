<?php
    error_reporting(0);
    if(!ISSET($_SESSION['email']))
	{ 
		echo "<script> alert ('Harus Login dulu'); </script>";
		echo "<script> location = 'login.php'; </script>";
	}
?>
<html>
    <body>
        <section class="konten">
            <div class="container">
			<form action=" " method="POST" >
                </br>
                <h2><strong> Keranjang Pesanan</strong></h2>
                </br>
                <table class="table table-bordered">
                    <thead>
                        <tr>
     
                            <th> Paket Jasa</th>
                            <th> Harga</th>
                            <th> Jumlah</th>
                            <th> Subharga</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php
                            $nomor = 1;
                            $totalharga = 0;
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
                                
                                <td> <?php echo $pecah['nama_jasa']; ?> </td>
                                <td> Rp. <?php echo number_format($pecah['harga_jasa']); ?> </td>
                                <td> <?php echo $jumlah; ?> </td>
                                <td> Rp. <?php echo number_format($subharga); ?> </td>
                            </tr>

                        <?php  
                            $nomor++;
                            $totalharga += $subharga;
                            endforeach
                        ?>
                    </tbody>

                    <tfoot>
                        <tr>
                            <th colspan="3"> Total Harga </th>
                            <th> Rp. <?php echo number_format($totalharga); ?></th>
                        </tr>
                    </tfoot>
                </table>
			
                </br></br>
                <h2> <strong> Info Anda </strong> </h2>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            Nama </br>
                            <input type="text" readonly value="<?php echo $_SESSION['nama_pelanggan'] ?>" class="form-control"> </br>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group">
                            Email </br>
                            <input type="text" readonly value="<?php echo $_SESSION['email'] ?>" class="form-control"> </br>
                        </div>
                    </div>
                    
                    <div class="col-md-12">
                        <div class="form-group">
                            Nomor Telepon </br>
                            <input type="text" readonly value="<?php echo $_SESSION['telepon_pelanggan'] ?>" class="form-control"> </br>
                        </div>
                    </div>

                            <?php
                                //replace hari
                                $hari = array("Sunday", "Monday", "Tuesday", "Wednesday","Thursday", "Friday", "Saturday");
                                $hariindo = array("Minggu", "Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu");
                                $hasilhari = str_replace($hari, $hariindo, date("l"));
                
                                $tanggalangka=date("j");
                
                                $tanggal=date("F");
                                //replace bulan
                                $bulan = array("January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "Desember");
                                $bulanindo = array("Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli","Agustus", "September", "Oktober", "November", "Desember");
                                $hasilbulan = str_replace($bulan, $bulanindo, date("F"));
                                $tahun=date("Y");
                            ?>

                    <div class="col-md-12">
                        <div class="form-group">
                            Tanggal Pemesanan </br>
                            <input type="text" readonly value="<?php echo "$hasilhari, $tanggalangka $hasilbulan $tahun"; ?>" class="form-control"> </br>
                        </div>
                    </div>
                </div>
                </br> </br>
				
                <h2> <strong> Isi Detail Pemesanan </strong> </h2>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
						
                            Tanggal Tour </br>
                            <input type="date" class="form-control" name="tanggaltour">
							    
                        </div>
						<div class="form-group">
						
                            Metode Pembayaran </br>
                            <select class="form-control" name="metode_pembayaran">
                                <option value="cash"> Cash</option>
                                <option value="bank"> Bank</option>
                                <option value="m-banking"> M-Banking</option>
                            </select>
                        </div>
                    </div>
                </div>
			
                </br>
                
                <button class="btn btn-warning" name="checkout">Buat Pemesanan</button>
			</form>
            
                <?php 
                    if (isset($_POST['checkout']))
                    {
                        $email_pelanggan = $_SESSION['email'];
                        $metode_pembayaran = $_POST['metode_pembayaran'];
                        $tgl_pemesanan = date ("Y-m-d");
						$tgl_travelling = $_POST['tanggaltour'];
                        $total_pemesanan = $totalharga;
						
                        //MENYIMPAN DATA KE TABEL PEMESANAN
						foreach($_SESSION["keranjang"] as $id_jasa => $jumlah)
						{
						$query_insert = "INSERT INTO pemesanan (email_pelanggan,id_jasa,tgl_pemesanan,tgl_travelling,metode_pembayaran,total_pemesanan)
						VALUES ('$email_pelanggan','$id_jasa','$tgl_pemesanan','$tgl_travelling','$metode_pembayaran','$total_pemesanan')";
						$insert = mysqli_query($koneksi1,$query_insert);
						}
						
						//mengkosongkan keranjang 
						unset($_SESSION["keranjang"]);
						
						// tampilan dialihkan ke nota
						echo "<script> alert ('Pemesanan Sukses'); </script>";
						echo "<script> location='pelanggan.php?target=riwayatpemesanan'; </script>";
						
                    }
                ?>
            </div>
            </br></br>
        </section>

    </body>
</html>