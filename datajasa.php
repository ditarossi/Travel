<?php
    session_start();
    //echo "Username : ".$_SESSION['username']. "<br>";
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
                                DATA JASA
                           </div>
                        <div class="panel-body">
                           <u><a href='admin.php?target=inputjasa'>Tambah Data Jasa </a></u>
                               
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                            <thead>
                                                <tr>
                                                <th>ID</th>
                                                    <th>Nama Jasa</th>
                                                    <th>Harga</th>
                                                    <th>Foto</th>
                                                    <th>Fasilitas</th>
                                                    <th>Status</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <?php
                                            require('database.php');
                                            $queryselect = "select * from jasa INNER JOIN statusjasa ON jasa.id_status=statusjasa.id_status";
                                            $hasilselect = mysqli_query($koneksi1,$queryselect);
                                            while($row = mysqli_fetch_array($hasilselect)){
                                                echo "<tr>
                                              
                                                <td>".$row['id_jasa']."</td>    
                                                <td>".$row['nama_jasa']."</td> 
                                                <td width='120' height='100'>Rp ".number_format($row['harga_jasa'],0,".",".")."</td> 
                                                <td width='210' height='210'><img src='upload/".$row['foto_jasa']."' width='200' height='200'></td> 
                                                <td>".$row['fasilitas_jasa']."</td> 
                                                <td width='70' height='100'>".$row['keterangan_status']."</td>
                                                <td>
                                                    <a class='btn btn-warning display-4' href='editjasa.php?target=".$row['id_jasa']."'>Edit</a> <br><br>
                                                    <a class='btn btn-danger display-4' href='hapusjasa.php?target=".$row['id_jasa']."'>Hapus</a> <br><br>
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


                


