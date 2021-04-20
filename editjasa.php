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
        $queryselect = "select * from jasa where id_jasa='$target'";   
        $hasilselect = mysqli_query($koneksi1,$queryselect);
        $row = mysqli_fetch_array($hasilselect);
       
    ?>
    <form action="terimaeditjasa.php" method="POST" enctype="multipart/form-data" class="mbr-form form-with-styler" data-form-title="Form Name">
        <div class="dragArea row">
             <div class="col form-group">
            <?php
                echo " ID JASA <input type='text' name='id_jasa'  class='form-control' value='".$row['id_jasa']."' disabled><br>";
                echo "<input type='hidden' name='id_jasa'  class='form-control' value='".$row['id_jasa']."'>";
                echo "NAMA JASA <input type='text' name='nama_jasa' class='form-control' value='".$row['nama_jasa']."'><br>";
                echo "HARGA JASA <input type='text' name='harga_jasa' class='form-control' value='".$row['harga_jasa']."'><br>";
                echo "<img src='upload/".$row['foto_jasa']."' width='200'><br>";
                echo "UBAH GAMBAR <input type='file' name='filegbr' placeholder='jpg/jpeg/png'  class='form-control'><br>";
                echo "FASILITAS JASA <textarea name='fasilitas_jasa' class='form-control'>".$row['fasilitas_jasa']."</textarea><br>";
            ?>
                STATUS JASA
                <select name="status_jasa"  class="form-control">
                <?php
                $queryselect = "select * from statusjasa";
                $hasilselect = mysqli_query($koneksi1,$queryselect);
                while($row3 = mysqli_fetch_array($hasilselect)){
                    if($row3['id_status']==$row['id_status']){
                        $cetak="selected";
                    }
                    else{$cetak="";}
                    echo "<option value='".$row3['id_status']."' $cetak>".$row3['keterangan_status']."</option>";
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
