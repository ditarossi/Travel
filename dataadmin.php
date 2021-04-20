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
                                DATA ADMIN
                           </div>
                        <div class="panel-body">
                           <u><a href='admin.php?target=inputadmin'>Tambah Data Admin </a></u>
                               
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                            <thead>
                                                <tr>
                                                   
                                                    <th>Username</th>
                                                    <th>Password</th>
                                                    <th>Nama Admin</th>
                                                    <th>Aksi</th>
                                                    
                                                </tr>
                                            </thead>
                                            <?php
                                            require('database.php');
                                            $queryselect = "select * from admin";
                                            $hasilselect = mysqli_query($koneksi1,$queryselect);
                                            while($row = mysqli_fetch_array($hasilselect)){
                                                echo "<tr>
                                              
                                                <td>".$row['username']."</td>  
                                                <td>".$row['password_admin']."</td>  
                                                <td>".$row['nama_admin']."</td> 
                                                <td>
                                                    <a class='btn btn-warning display-4' href='editadmin.php?target=".$row['username']."'>Edit</a> 
                                                    <a class='btn btn-danger display-4' href='hapusadmin.php?target=".$row['username']."'>Hapus</a> 
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


                


