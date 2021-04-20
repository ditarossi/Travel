<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta content="" name="description" />
    <meta content="webthemez" name="author" />
    <title></title>
    <!-- Bootstrap Styles-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FontAwesome Styles-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- Morris Chart Styles-->
    <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
    <!-- Custom Styles-->
    <link href="assets/css/custom-styles.css" rel="stylesheet" />
    <!-- Google Fonts-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    <link rel="stylesheet" href="assets/js/Lightweight-Chart/cssCharts.css"> 
    <style type="text/css">
    .bgimg {
        background-image: url('assets/images/backgroundinput.jpg');
        padding: 10px; 

    }
    input, textarea { 
        padding: 9px; 
        border: solid 1px #E5E5E5; 
        outline: 0; 
        font: normal 13px/100% Verdana, Tahoma, sans-serif; 
        width: 200px; 
        background: #FFFFFF url('bg_form.png') left top repeat-x; 
        background: -webkit-gradient(linear, left top, left 25, from(#FFFFFF), color-stop(4%, #EEEEEE), to(#FFFFFF)); 
        background: -moz-linear-gradient(top, #FFFFFF, #EEEEEE 1px, #FFFFFF 25px); 
        box-shadow: rgba(0,0,0, 0.1) 0px 0px 8px; 
        -moz-box-shadow: rgba(0,0,0, 0.1) 0px 0px 8px; 
        -webkit-box-shadow: rgba(0,0,0, 0.1) 0px 0px 8px; 
        } 
    </style>
</head>

<body>
    <div id="wrapper">
        <?php
            require('menuadmin.php');
        ?>
        <?php
                if(isset($_GET['target']))
                {
                    echo $_GET['target'],"</br>";
                    if($_GET['target']=='dashboard')
                    {
                        require('dashboard.php');
                    }
                    elseif($_GET['target']=='admin')
                    {
                        require('dataadmin.php');
                    }
                    elseif($_GET['target']=='pelanggan')
                    {
                        require('datapelanggan.php');
                    }
                    elseif($_GET['target']=='jasa')
                    {
                        require('datajasa.php');
                    }
                    elseif($_GET['target']=='pemesanan')
                    {
                        require('datapemesanan.php');
                    }
                    elseif($_GET['target']=='pembayaran')
                    {
                        require('datapembayaran.php');
                    }
                    elseif($_GET['target']=='listpesanan')
                    {
                        require('datalistpesanan.php');
                    }
                    elseif($_GET['target']=='setting')
                    {
                        require('setting.php');
                    }
                    elseif($_GET['target']=='user')
                    {
                        require('userprofile.php');
                    }
                    elseif($_GET['target']=='logout')
                    {
                        require('logout.php');
                    }
                    elseif($_GET['target']=='inputjasa')
                    {
                        require('inputdatajasa.php');
                    }
                    elseif($_GET['target']=='inputadmin')
                    {
                        require('inputdataadmin.php');
                    }
                    elseif($_GET['target']=='inputpelanggan')
                    {
                        require('inputdatapelanggan.php');
                    }
					elseif($_GET['target']=='inputpemesanan')
                    {
                        require('inputdatapemesanan.php');
                    }
                    else
                    {
                        echo "Halaman tidak ditemukan! </br>";
                    }
                }
                else
                {
                    require('dashboard.php');
                }
                
        ?>     
    </div>
        


    <!-- /. WRAPPER  -->
    <!-- JS Scripts-->
    <!-- jQuery Js -->
    <script src="assets/js/jquery-1.10.2.js"></script>
    <!-- Bootstrap Js -->
    <script src="assets/js/bootstrap.min.js"></script>
	 
    <!-- Metis Menu Js -->
    <script src="assets/js/jquery.metisMenu.js"></script>
    <!-- Morris Chart Js -->
    <script src="assets/js/morris/raphael-2.1.0.min.js"></script>
    <script src="assets/js/morris/morris.js"></script>
	<script src="assets/js/easypiechart.js"></script>
	<script src="assets/js/easypiechart-data.js"></script>
	<script src="assets/js/Lightweight-Chart/jquery.chart.js"></script>
	
    <!-- Custom Js -->
    <script src="assets/js/custom-scripts.js"></script>

      
    <!-- Chart Js -->
    <script type="text/javascript" src="assets/js/Chart.min.js"></script>  
    <script type="text/javascript" src="assets/js/chartjs.js"></script> 

</body>
</html>