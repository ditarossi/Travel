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
                <u>Input Pelanggan</u>
            </h1>
    <form action="terimainputpelanggan.php" method="POST" class="mbr-form form-with-styler" data-form-title="Form Name">
        <div class="dragArea row">
             <div class="col form-group">
                E-Mail<input type="text" name="email_pelanggan" placeholder=""  class="form-control" ><br>
                Password<input type="password" name="password" placeholder=""  class="form-control" ><br>
                Nama Lengkap<input type="text" name="nama_pelanggan"  class="form-control" ><br>
                Nomor Telepon<input type="text" name="telp_pelanggan"  class="form-control" ><br>
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
