<body>
<div id="page-wrapper">
    <div id="page-inner">        
        <div class="row">
            <div class="col-md-12">
    <?php
        require('database.php');
		$email_pelanggan = $_SESSION['email'];
        $queryselect = "select * from pelanggan where email_pelanggan='$email_pelanggan'";   
        $hasilselect = mysqli_query($koneksi1,$queryselect);
        $row = mysqli_fetch_array($hasilselect);
       
    ?>
    <form action=" " method="POST" class="mbr-form form-with-styler" data-form-title="Form Name">
        <div class="dragArea row">
             <div class="col form-group">
            <?php
                echo " Email Pelanggan <input type='text' name='email_pelanggan'  class='form-control' value='".$row['email_pelanggan']."' disabled><br>";
                echo "<input type='hidden' name='email_pelanggan'  class='form-control' value='".$row['email_pelanggan']."'>";
                echo "Password <input type='text' name='password_pelanggan' class='form-control' value='".$row['password_pelanggan']."'><br>";
                echo "Nama Lengkap<input type='text' name='nama_pelanggan' class='form-control' value='".$row['nama_pelanggan']."'><br>";
                echo "Nomor Telepon<input type='text' name='telepon_pelanggan' class='form-control' value='".$row['telepon_pelanggan']."'><br>";
            ?>
                <br>
                <button type="submit" name="editprofil" class="btn btn-warning display-4" >Submit</button>   
            </div>     
        </div>       
    </form> 
		<?php
		 if (isset($_POST['editprofil']))
        {
	
			//menangkap posting dari input form
			$email_pelanggan=$_POST['email_pelanggan'];
			$password=$_POST['password_pelanggan'];
			$nama=$_POST['nama_pelanggan'];
			$telepon=$_POST['telepon_pelanggan'];


						//memasukkan ke database
						$query_update = "UPDATE pelanggan SET email_pelanggan='$email_pelanggan', password_pelanggan='$password', 
						nama_pelanggan='$nama', telepon_pelanggan='$telepon' WHERE pelanggan.email_pelanggan='$email_pelanggan' ";
						$insert = mysqli_query($koneksi1,$query_update);
						if($insert==1)
						{
							echo "<script>alert('Edit Berhasil, Silahkan Login Kembali');</script>";
							echo "<script>location='login.php';</script>";
						}else
						{
							echo "<script>alert('Edit Gagal');</script>";
							echo "<script>location='pelanggan.php?target=profilpelanggan';</script>";
						}
		}

		?>
	
        </div>
       </div>
    </div>
</div>
</body>
</html>
