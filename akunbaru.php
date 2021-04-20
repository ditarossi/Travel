<body>
<div id="page-wrapper">
    <div id="page-inner">   
        <div class="container">     
        <div class="row">
            <div class="col-md-12">
            <h1 class="page-header">
                <u>Buat Akun Baru</u>
            </h1>
    <form method="POST" class="mbr-form form-with-styler" data-form-title="Form Name">
        <div class="dragArea row">
             <div class="col form-group">
                E-Mail<input type="text" name="email_pelanggan" placeholder=""  class="form-control" ><br>
                Password<input type="password" name="password" placeholder=""  class="form-control" ><br>
                Nama Lengkap<input type="text" name="nama_pelanggan"  class="form-control" ><br>
                Nomor Telepon<input type="text" name="telepon_pelanggan"  class="form-control" ><br>
                <br>
                <button type="submit"  name="akunbaru" class="btn btn-warning display-4" >Submit</button>   
            </div>     
        </div>       
    </form>  
    <?php
    if (isset($_POST['akunbaru']))
    {
        //koneksi ke database
        require('database.php');

        //menangkap posting dari input form
        $email=$_POST['email_pelanggan'];
        $password=$_POST['password'];
        $nama_pelanggan=$_POST['nama_pelanggan'];
        $telp_pelanggan=$_POST['telepon_pelanggan'];

                    $query_insert = "INSERT INTO pelanggan (email_pelanggan,password_pelanggan,nama_pelanggan, telepon_pelanggan)
                    VALUES ('$email','$password','$nama_pelanggan','$telp_pelanggan')";
                    $insert = mysqli_query($koneksi1,$query_insert);
                    if($insert==1)
                    {
                        echo "<script>alert('Akun Berhasil Didaftrakan, Silahkan Login');</script>";
                        echo "<script>location='index.php?target=home';</script>";
                    }else
                    {
                        echo "<script>alert('Akun Gagal Didaftarkan ');</script>";
                        echo "<script>location='pelanggan.php?target=home';</script>";
                    }
    }

        ?> 
            
        </div>
       </div>
    </div>
    </div>
</div>
</body>
</html>
