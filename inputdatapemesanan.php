<?php
    session_start();
    echo "Username : ".$_SESSION['username']. "<br>";
    if(!ISSET($_SESSION['username']))
    header('Location: login.php');
?>
<body>
<div id="page-wrapper">
    <div id="page-inner">        
        <div class="row">
            <div class="col-md-12">
            <h1 class="page-header">
                <u>Input Pemesanan</u>
            </h1>
    <form action=" " method="POST" class="mbr-form form-with-styler" data-form-title="Form Name">
        <div class="dragArea row">
             <div class="col form-group">
                EMAIL PELANGGAN<input type="text" name="email_pelanggan" placeholder=""  class="form-control" ><br>
                ID JASA<input type="text" name="id_jasa" placeholder=""  class="form-control" ><br>
                TANGGAL PEMESANAN<input type="date" name="tgl_pemesanan" placeholder=""  class="form-control" ><br>
                TANGGAL TOUR<input type="date" name="tgl_travelling" placeholder=""  class="form-control" ><br>
				METODE PEMBAYARAN
				<select class="form-control" name="metode_pembayaran">
                                <option value="cash"> Cash</option>
                                <option value="bank"> Bank</option>
                                <option value="m-banking"> M-Banking</option>
                </select><br>
				TOTAL PEMESANAN<input type="text" name="total_pemesanan" placeholder=""  class="form-control" ><br>
                <button type="submit" name="hasil" class="btn btn-warning display-4" >Submit</button>   
            </div>     
        </div>       
    </form>        
        </div>
       </div>
    </div>
</div>
<?php
 if (isset($_POST['hasil']))
{
	$email_pelanggan=$_POST['email_pelanggan'];
    $id_jasa=$_POST['id_jasa'];
	$tgl_pemesanan=$_POST['tgl_pemesanan'];
    $tgl_travelling=$_POST['tgl_travelling'];
	$metode_pembayaran=$_POST['metode_pembayaran'];
    $total_pemesanan=$_POST['total_pemesanan'];
	
	require('database.php');
	$query_insert = "INSERT INTO pemesanan (email_pelanggan,id_jasa,tgl_pemesanan,tgl_travelling,metode_pembayaran,total_pemesanan)
	VALUES ('$email_pelanggan','$id_jasa','$tgl_pemesanan','$tgl_travelling','$metode_pembayaran','$total_pemesanan')";
	$insert = mysqli_query($koneksi1,$query_insert);
	
	if($insert==1)
	{
	echo "<script> alert ('Pemesanan Sukses'); </script>";
	echo "<script> location='admin.php?target=pemesanan'; </script>";
	}
}
?>
</body>
</html>
