<div class="container">
<div id="wrapper">
        <!-- /. NAV SIDE  -->
		<div id="page-wrapper">
		    <div class="header"> 
			<br>
                <h1 class="page-header" align="center">
                    Selamat Datang User
                </h1>	

                <form method="post">
                    Nama </br> <input type="text" readonly value="<?php echo $_SESSION['nama_pelanggan'] ?>" class="form-control"> </br>
                    E-mail </br><input type="text" readonly value="<?php echo $_SESSION['email'] ?>" class="form-control"> </br>
                    Nomor Telepon </br><input type="text" readonly value="<?php echo $_SESSION['telepon_pelanggan'] ?>" class="form-control"> </br>
                </br>
				<a href="pelanggan.php?target=editprofilpelanggan" class="btn btn-danger">EDIT PROFIL</a><br>
                </br>
                </form>
            </div>
        </div>
</div>
</div>
