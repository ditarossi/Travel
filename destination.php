<?
    session_start();
?>
<!DOCTYPE html>
<html>
<head>
<title></title>
</head>
<body>
<div style=" background-image: url(assets/images/beach.jpg); height:200px;">
<div class="mbr-overlay" style=" background-color: rgb(255, 255, 255);"></div>
    <div class="row">
            <div class="col-lg-4 mx-auto mbr-form" data-form-type="formoid">
                <form action="" method="POST" class="mbr-form form-with-styler" data-form-title="Form Name"><input type="hidden" name="email" data-form-email="true" value="">
                    <br>
                    <div class="dragArea row">
                        <div class="col form-group">
                            <input type="text" name="" placeholder="Search activities or destination"  class="form-control" required="required" value="" >
                        </div>
                        <div class="mbr-section-btn">
                            <button type="submit" class="btn btn-warning display-4">Search</button>
                        </div>
                    </div>
                </form>
            </div>
    </div>
</div>
<section class="content2 cid-sfUw34UHcY" id="content2-z">
    <div class="container">
    </br>

                <div class="row">
                    
                    <?php
                        require('database.php');
                        $queryselect = "select * from jasa ";
                        $ambil = mysqli_query($koneksi1,$queryselect);
                        while ($perproduk = $ambil -> fetch_assoc())
                        {
                    ?>
                    <div class="col-md-4"> 
                        <div class="card" style="width: 18rem;">
                            <img src="upload/<?php echo $perproduk['foto_jasa']; ?>" class="card-img-top" alt="" >
                            <div class="card-body">
                                <h4> <?php echo $perproduk['nama_jasa']; ?> </h4>
                                <h5> Rp. <?php echo number_format($perproduk['harga_jasa']); ?></h5> </br>
                                <p> <?php echo $perproduk['fasilitas_jasa'];?> </p>
                                <a href='pelanggan.php?target=pesan&id=<?php echo $perproduk['id_jasa']; ?>' class="btn btn-warning"> Pesan </a>
                            </div>
                        </div> </br> </br>
                    </div>
                    <?php
                        }
                    ?>
    </div>
</section>
<br>
</body>
</html>