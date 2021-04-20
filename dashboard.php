<?php require('database.php');?>
<div id="wrapper">
        <!-- /. NAV SIDE  -->
		<div id="page-wrapper">
		    <div class="header"> 
                        <h1 class="page-header">
                            Dashboard 
                        </h1>					
		    </div>
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-3 col-sm-12 col-xs-12">
                        <div class="board">
                            <div class="panel panel-primary">
                            <div class="number">
								<?php
								$queryselectpelanggan = "select * from pelanggan ";
								$hasilselectpelanggan= mysqli_query($koneksi1,$queryselectpelanggan);
								$jumlahpelanggan = mysqli_num_rows($hasilselectpelanggan);
								?>
                                <h3>
                                    <h3><?php echo $jumlahpelanggan?></h3>
                                    <small>Pelanggan</small>
                                </h3> 
                            </div>
                            <div class="icon">
                            <i class="fa fa-user fa-5x yellow"></i>
                            </div>
            
                            </div>
                            </div>
                    </div>

                    <div class="col-md-3 col-sm-12 col-xs-12">
                        <div class="board">
                            <div class="panel panel-primary">
                            <div class="number">
								<?php
								$queryselectjasa = "select * from jasa ";
								$hasilselectjasa = mysqli_query($koneksi1,$queryselectjasa);
								$jumlahjasa = mysqli_num_rows($hasilselectjasa);
								?>
                                <h3>
                                    <h3><?php echo $jumlahjasa?></h3>
                                    <small>Jasa</small>
                                </h3> 
                            </div>
                            <div class="icon">
                               <i class="fa fa-comments fa-5x green"></i>
                            </div>
             
                            </div>
                            </div>
                    </div>
					
					<div class="col-md-3 col-sm-12 col-xs-12">
                        <div class="board">
                            <div class="panel panel-primary">
                            <div class="number">
								<?php
								$queryselectpemesanan= "select * from pemesanan ";
								$hasilselectpemesanan= mysqli_query($koneksi1,$queryselectpemesanan);
								$jumlahpemesanan = mysqli_num_rows($hasilselectpemesanan);
								?>
                                <h3>
                                    <h3><?php echo $jumlahpemesanan?></h3>
                                    <small>Pemesanan</small>
                                </h3> 
                            </div>
                            <div class="icon">
                            <i class="fa fa-shopping-cart fa-5x blue"></i>
                            </div>
            
                            </div>
                            </div>
                    </div>
					
					<div class="col-md-3 col-sm-12 col-xs-12">
                        <div class="board">
                            <div class="panel panel-primary">
                            <div class="number">
								<?php
								$queryselectpembayaran= "select * from pembayaran ";
								$hasilselectpembayaran= mysqli_query($koneksi1,$queryselectpembayaran);
								$jumlahpembayaran = mysqli_num_rows($hasilselectpembayaran);
								?>
                                <h3>
                                    <h3><?php echo $jumlahpembayaran?></h3>
                                    <small>Pembayaran</small>
                                </h3> 
                            </div>
                            <div class="icon">
                            <i class=" fa fa-eye fa-5x red"></i>
                            </div>
            
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
</div>