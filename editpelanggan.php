<?php
    require('admin.php');
    /*session_start();
    echo "Username : ".$_SESSION['username']. "<br>";
    if(!ISSET($_SESSION['username']))
    header('Location: login.php');
    */
?>
<body>
<div id="page-wrapper">
    <div id="page-inner">        
        <div class="row">
            <div class="col-md-12">
    <?php
        $target= $_GET['target'];
        require('database.php');
        $queryselect = "select * from pelanggan where email_pelanggan='$target'";   
        $hasilselect = mysqli_query($koneksi1,$queryselect);
        $row = mysqli_fetch_array($hasilselect);
       
    ?>
    <form action="terimaeditpelanggan.php" method="POST" class="mbr-form form-with-styler" data-form-title="Form Name">
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
