<?php 
	  require('admin.php');
	  require('database.php');
	  $queryselect = "SELECT * FROM pemesanan JOIN pelanggan 
	  ON pemesanan.email_pelanggan=pelanggan.email_pelanggan
	  WHERE pemesanan.id_pemesanan='$_GET[id]'";
	  $ambil = mysqli_query($koneksi1,$queryselect);
	  $detail = $ambil -> fetch_assoc();
?>

<body>
<div id="page-wrapper">
    <div id="page-inner">        
        <div class="row">
            <div class="col-md-12">
				<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
					<thead>
						<tr>
							<th> ID PEMESANAN </th>
							<th> ID JASA </th>
							<th> E-MAIL PELANGGAN </th>
							<th> NAMA PELANGGAN </th>
							<th> TOTAL PEMESANAN </th>
							<th> METODE PEMBAYARAN </th>
							<th> TANGGAL TRAVELLING </th>
						</tr>
					</thead>

					<tbody>
						<tr>
							<th> <?php echo $detail['id_pemesanan'];?> </th>
							<th> <?php echo $detail['id_jasa'];?> </th>
							<th> <?php echo $detail['email_pelanggan'];?> </th>
							<th> <?php echo $detail['nama_pelanggan'];?> </th>
							<th> Rp. <?php echo number_format($detail['total_pemesanan']);?> </th>
							<th> <?php echo $detail['metode_pembayaran'];?> </th>
							<th> <?php echo $detail['tgl_travelling'];?> </th>
						</tr>
					</tbody>
				</table>

				<a class='btn btn-primary display-4' href='admin.php?target=pemesanan'>Kembali</a> <br><br>
			</div>
		</div>
	</div>
</div>
</body>