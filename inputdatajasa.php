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
                <u>Input Jasa</u>
            </h1>
    <form action="terimainputjasa.php" method="POST" enctype="multipart/form-data" class="mbr-form form-with-styler" data-form-title="Form Name">
        <div class="dragArea row">
             <div class="col form-group">
                ID JASA<input type="text" name="id_jasa" placeholder=""  class="form-control" ><br>
                NAMA JASA<input type="text" name="nama_jasa" placeholder=""  class="form-control" ><br>
                HARGA JASA<input type="text" name="harga_jasa" placeholder=""  class="form-control" ><br>
                GAMBAR JASA<input type="file" name="filegbr" placeholder="jpg/jpeg/png"  class="form-control" ><br>
                FASILITAS JASA<textarea name="fasilitas_jasa" class="form-control" ></textarea><br>
                STATUS JASA
                <select name="status_jasa"  class="form-control">
                <?php
                require('database.php');
                $queryselect = "select * from statusjasa";
                $hasilselect = mysqli_query($koneksi1,$queryselect);
                while($row = mysqli_fetch_array($hasilselect)){
                    echo "<option value='".$row['id_status']."'>".$row['keterangan_status']."</option>";
                }
                ?>
                </select>
                <br>
                <button type="submit" class="btn btn-warning display-4" >Submit</button>   
            </div>     
        </div>       
    </form>        
        </div>
       </div>
    </div>
</div>
</body>
</html>
