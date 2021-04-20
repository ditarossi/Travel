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
        $queryselect = "select * from admin where username='$target'";   
        $hasilselect = mysqli_query($koneksi1,$queryselect);
        $row = mysqli_fetch_array($hasilselect);
       
    ?>
    <form action="terimaeditadmin.php" method="POST" class="mbr-form form-with-styler" data-form-title="Form Name">
        <div class="dragArea row">
             <div class="col form-group">
            <?php
                echo " Username<input type='text' name='username'  class='form-control' value='".$row['username']."' disabled><br>";
                echo "<input type='hidden' name='username'  class='form-control' value='".$row['username']."'>";
                echo "Password <input type='text' name='password_admin' class='form-control' value='".$row['password_admin']."'><br>";
                echo "Nama Lengkap<input type='text' name='nama_admin' class='form-control' value='".$row['nama_admin']."'><br>";
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
