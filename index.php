<!DOCTYPE html>
<head>
  <title>TravellingYuk</title>
  <link rel="stylesheet" href="assets/tether/tether.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="assets/dropdown/css/style.css">
  <link rel="stylesheet" href="assets/socicon/css/styles.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="stylesheet" href="assets/theme/css/portofolio.css">
  <link rel="stylesheet" href="assets/theme/css/footer.css">
  <link rel="stylesheet" href="assets/theme/css/search.css">
  <link rel="preload" as="style" href="assets/mobirise/css/mbr-additional.css">
  <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
</head>
<body>
 
<!-- Header (Menu)-->
<?php
require('menuutama.php');
session_start();
?>
<!-- Content-->
<section>
                <?php
                if(isset($_GET['target']))
                {
                    echo $_GET['target'],"</br>";
                    if($_GET['target']=='home')
                    {
                        require('home.php');
                    }
                    elseif($_GET['target']=='transport')
                    {
                        require('transport.php');
                    }
                    elseif($_GET['target']=='destination')
                    {
                        require('destination.php');
                    }
                    elseif($_GET['target']=='blog')
                    {
                        require('blog.php');
                    }
                    elseif($_GET['target']=='contact')
                    {
                        require('contact.php');
                    }
                    elseif($_GET['target']=='login')
                    {
                        require('login.php');
                    }
                    elseif($_GET['target']=='akunbaru')
                    {
                        require('akunbaru.php');
                    }
                    else
                    {
                        echo "Halaman tidak ditemukan! </br>";
                    }
                }
                else
                {
                    require('home.php');
                }
                ?>     
</section>

<!-- Footer-->
<footer>
	<div id="column">
		<h2>ABOUT</h2>
        <a href="">How to Order & Payment</a><br>
        <a href="">Help Center</a><br>
        <a href="">Contact Us</a><br>
        <a href="">About Us</a><br>
	</div>
	<div id="column">
        <h2>OTHER</h2>
        Rent Motorbike<br>
        Rent Car<br>
		
    </div>
    <div id="column">
		<h2>PRODUCT</h2>
        Bali<br>
        Flores<br>
        Komodo Island<br>
        Lombok<br>
        Raja Ampat<br>
        Yogyakarta<br>
        
	</div>
	<div id="column">
		<h2>SOCIAL MEDIA</h2>
		Instagram: <a href="#">@TravellingYuk</a><br>
		Facebook: <a href="#">TravellingYuk</a>
    </div>
</footer>

<section style="background-color: #fff; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', 'Roboto', 'Helvetica Neue', Arial, sans-serif; color:#aaa; font-size:12px; padding: 0; align-items: center; display: flex;"><a href="https://mobirise.site/s" style="flex: 1 1; height: 3rem; padding-left: 1rem;"></a></section>
<script src="assets/web/assets/jquery/jquery.min.js"></script>  
<script src="assets/popper/popper.min.js"></script> 
<script src="assets/tether/tether.min.js"></script> 
<script src="assets/bootstrap/js/bootstrap.min.js"></script> 
<script src="assets/smoothscroll/smooth-scroll.js"></script>  
<script src="assets/parallax/jarallax.min.js"></script> 
<script src="assets/dropdown/js/nav-dropdown.js"></script> 
<script src="assets/dropdown/js/navbar-dropdown.js"></script> 
<script src="assets/touchswipe/jquery.touch-swipe.min.js"></script> 
<script src="assets/theme/js/script.js"></script>  
</body>
</html>