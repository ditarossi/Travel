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
                                DATA LIST PESANAN
                           </div>
                        <div class="panel-body">
                           <u><a href='admin.php?target=inputjasa'>Tambah Data List Pesanan </a></u>
                               
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                            <thead>
                                                <tr>
                                                   
                                                    <th>ID List Pesanan</th>
                                                    <th>ID Pemesanan</th>
                                                    <th>ID Jasa</th>
                                                    <th>Status Pemesanan</th>
                                                    <th>Aksi</th>
                                                    
                                                </tr>
                                            </thead>
                                            <?php
                                            require('database.php');
                                            $queryselect = "select * from listpemesanan";
                                            $hasilselect = mysqli_query($koneksi1,$queryselect);
                                            while($row = mysqli_fetch_array($hasilselect)){
                                                echo "<tr>
                                              
                                                <td>".$row['id_listpesanan']."</td>  
                                                <td>".$row['id_pemesanan']."</td>  
                                                <td>".$row['id_jasa']."</td> 
                                                <td>".$row['status_pemesanan']."</td>
                                                <td>
                                                <a class='btn btn-warning display-4' href='editjasa.php?target=".$row['id_listpesanan']."'>Edit</a> <br><br>
                                                <a class='btn btn-danger display-4' href='hapusjasa.php?target=".$row['id_listpesanan']."'>Hapus</a> <br><br>
                                                <a class='btn btn-info display-4' href='detailjasa.php?target=".$row['id_listpesanan']."'>Detail List Pesanan</a>
                                                
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


                


