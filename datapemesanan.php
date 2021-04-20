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
                                DATA PEMESANAN
                           </div>
                        <div class="panel-body">
                           <u><a href='admin.php?target=inputpemesanan'>Tambah Data Pemesanan </a></u>
                               
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                            <thead>
                                                <tr>
                                                   
                                                    <th>ID Pemesanan</th>
                                                    <th>ID Pelanggan</th>
                                                    <th>ID Jasa</th>
                                                    <th>Tanggal Pemesanan</th>
                                                    <th>Total Pemesanan</th>
                                                    <th>Aksi</th>
                                                    
                                                </tr>
                                            </thead>
                                            <?php
                                            require('database.php');
                                            $queryselect = "select * from pemesanan";
                                            $hasilselect = mysqli_query($koneksi1,$queryselect);
                                            while($row = mysqli_fetch_array($hasilselect)){
                                                echo "<tr>
                                              
                                                <td>".$row['id_pemesanan']."</td>  
                                                <td>".$row['email_pelanggan']."</td>  
                                                <td>".$row['id_jasa']."</td> 
                                                <td>".$row['tgl_pemesanan']."</td>
                                                <td>".$row['total_pemesanan']."</td>

                                               <td>
                                                    <a class='btn btn-warning display-4' href='editpemesanan.php?target=".$row['id_pemesanan']."'>Edit</a> <br><br>
                                                    <a class='btn btn-danger display-4' href='hapuspemesanan.php?target&id=".$row['id_pemesanan']."'>Hapus</a> <br><br>
                                                    <a class='btn btn-info display-4' href='detailpemesanan.php?target&id=".$row['id_pemesanan']."'>Detail Pemesanan</a>
                                                    
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


                


