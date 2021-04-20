<?php
    session_start();
    session_destroy();
    
    echo "<script> alert ('Anda Telah Logout'); </script>";
    echo "<script> location = 'index.php?target=home'; </script>";
?>
