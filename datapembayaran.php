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
                                DATA PEMBAYARAN
                           </div>
                        <div class="panel-body">
                           <u><a href='admin.php?target=inputjasa'>Tambah Data Pembayaran </a></u>
                               
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                            <thead>
                                                <tr>
                                                   
                                                    <th>ID Pembayaran</th>
                                                    <th>ID Pemesanan</th>
                                                    <th>Metode Pembayaran</th>
                                                    <th>Tanggal Pembayaran</th>
                                                    <th>Total Pembayaran</th>
                                                    <th>Aksi</th>
                                                    
                                                </tr>
                                            </thead>
                                            <?php
                                            require('database.php');
                                            $queryselect = "select * from pembayaran";
                                            $hasilselect = mysqli_query($koneksi1,$queryselect);
                                            while($row = mysqli_fetch_array($hasilselect)){
                                                echo "<tr>
                                              
                                                <td>".$row['id_pembayaran']."</td>  
                                                <td>".$row['id_pemesanan']."</td>  
                                                <td>".$row['metode_pembayaran']."</td> 
                                                <td>".$row['tgl_pembayaran']."</td>
                                                <td>".$row['total_pembayaran']."</td>

                                               <td>
                                                    <a class='btn btn-warning display-4' href='editjasa.php?target=".$row['id_pembayaran']."'>Edit</a> <br><br>
                                                    <a class='btn btn-danger display-4' href='hapusjasa.php?target=".$row['id_pembayaran']."'>Hapus</a> <br><br>
                                                    <a class='btn btn-info display-4' href='detailjasa.php?target=".$row['id_pembayaran']."'>Detail Pembayaran</a>
                                                    
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


                


