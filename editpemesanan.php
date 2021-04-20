<?php
    require('admin.php');
    
    /*session_start();
    echo "Username : ".$_SESSION['username']. "<br>";
    if(!ISSET($_SESSION['username']))
    header('Location: login.php');*/
    
?>
<body>
<div id="page-wrapper">
    <div id="page-inner">        
        <div class="row">
        <div class="col-md-12">
				<?php
					$target= $_GET['target'];
					require('database.php');
					$queryselect = "select * from pemesanan where id_pemesanan='$target'";   
					$hasilselect = mysqli_query($koneksi1,$queryselect);
					$row = mysqli_fetch_array($hasilselect);
				   
				?>
			<form action="terimaeditpemesanan.php" method="POST" enctype="multipart/form-data" class="mbr-form form-with-styler" data-form-title="Form Name">
				<div class="dragArea row">
					 <div class="col form-group">
					<?php
						echo "ID PEMESANAN <input type='text' name='id_pemesanan' class='form-control' value='".$row['id_pemesanan']."' disabled><br>";
						echo "<input type='hidden' name='id_pemesanan'  class='form-control' value='".$row['id_pemesanan']."'>";
						echo "EMAIL PELANGGAN <input type='text' name='email_pelanggan' class='form-control' value='".$row['email_pelanggan']."'><br>";
						echo "ID JASA <input type='text' name='id_jasa' class='form-control' value='".$row['id_jasa']."'><br>";
						echo "TANGGAL PEMESANAN <input type='date' name='tgl_pemesanan' class='form-control' value='".$row['tgl_pemesanan']."'><br>";
						echo "TANGGAL TOUR <input type='date' name='tgl_travelling' class='form-control' value='".$row['tgl_travelling']."'><br>";
						echo "METODE PEMBAYARAN <input type='text' name='metode_pembayaran' class='form-control' value='".$row['metode_pembayaran']."'><br>";
						echo "TOTAL PEMESANAN <input type='text' name='total_pemesanan' class='form-control' value='".$row['total_pemesanan']."'><br>";
					?>
					   
						<button type="submit" class="btn btn-warning display-4" >Submit</button>   
					</div>     
				</div>       
			</form>  
		</div>
    </div>
</div>
</body>
</html>
