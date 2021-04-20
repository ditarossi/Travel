<?php
    require('admin.php');
    error_reporting(0);
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
    <?php
        require('database.php');
        $target= $_GET['target'];
        $query_hapus = "DELETE FROM pelanggan WHERE email_pelanggan='$target' ";
        $hasilhapus = mysqli_query($koneksi1,$query_hapus);
        echo "<script>alert('Jasa Terhapus');</script>";
        echo "<script>location='admin.php?target=pelanggan';</script>";        
    ?>    
        </div>
       </div>
    </div>
</div>
</body>
</html>