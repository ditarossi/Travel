<div id="wrapper">
        <!-- /. NAV SIDE  -->
		<div id="page-wrapper">
		    <div class="header"> 
                <h1 class="page-header">
                    Selamat Datang
                </h1>	
                     
    <?php
    session_start();
    if(!ISSET($_SESSION['username']))
    header('Location: login.php');
    ?>
	
				<form method="post">
                    Nama </br> <input type="text" readonly value="<?php echo $_SESSION['nama_admin'] ?>" class="form-control"> </br>
                    Username </br><input type="text" readonly value="<?php echo $_SESSION['username'] ?>" class="form-control"> </br>
                </br>
                </form>
</div>
