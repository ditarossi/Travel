<?php
    session_start();
    echo "Username : ".$_SESSION['username']. "<br>";
    if(!ISSET($_SESSION['username']))
    header('Location: login.php');
?>
<div id="page-wrapper">
    <div id="page-inner">        
        <div class="row">
            <div class="col-md-12">
                <!-- Advanced Tables -->
                <div class="panel panel-default">
                           <div class="panel-heading">
                                DATA PELANGGAN
                           </div>
                        <div class="panel-body">
                           <u><a href='admin.php?target=inputpelanggan'>Tambah Data Pelanggan </a></u>
                               
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                            <thead>
                                                <tr>

                                                    <th>E-Mail</th>
                                                    <th>Password</th>
                                                    <th>Nama Pelanggan</th>
                                                    <th>Telepon</th>
                                                    <th>Aksi</th>
                                                    
                                                </tr>
                                            </thead>
                                            <?php
                                            require('database.php');
                                            $queryselect = "select * from pelanggan";
                                            $hasilselect = mysqli_query($koneksi1,$queryselect);
                                            while($row = mysqli_fetch_array($hasilselect)){
                                                echo "<tr>
                                               
                                                <td>".$row['email_pelanggan']."</td>  
                                                <td>".$row['password_pelanggan']."</td> 
                                                <td>".$row['nama_pelanggan']."</td>
                                                <td>".$row['telepon_pelanggan']."</td>
                                                <td>
                                                    <a class='btn btn-warning display-4' href='editpelanggan.php?target=".$row['email_pelanggan']."'>Edit</a> 
                                                    <a class='btn btn-danger display-4' href='hapuspelanggan.php?target=".$row['email_pelanggan']."'>Hapus</a> 
                                                </td> 
                                                
                                                </tr>";
                                
                                            }
                                            
                                            ?>
                                        </table>
                                    </div>   
                               
                        </div>
                </div>
           </div>
       </div>
    </div>
</div>


                


