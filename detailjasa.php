<?php
    require('admin.php');
?>
<body>
<div id="page-wrapper">
    <div id="page-inner">        
        <div class="row">
            <div class="col-md-12">
            <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                       <thead>
                          <tr>
                            <th>ID</th>
                            <th>Jenis Jasa</th>
                            <th>Nama Jasa</th>
                            <th>Harga</th>
                            <th>Foto</th>
                            <th>Deskripsi</th>
                            <th>Status</th>                 
                          </tr>
                       </thead>
                            <?php      
                                $target= $_GET['target'];
                                require('database.php');
                                $queryselect = "SELECT * FROM jasa WHERE id_jasa='$target' ";
                                //$queryselect2 = "SELECT * FROM jasa INNER JOIN jenisjasa ON jasa.id_jenis=jenisjasa.id_jenis
                                //INNER JOIN statusjasa ON jasa.id_status=statusjasa.id_status";
                                $hasilselect = mysqli_query($koneksi1,$queryselect);  
                                $row = mysqli_fetch_array($hasilselect);
                                    echo "<tr>
                                    <td>".$row['id_jasa']."</td>  
                                    <td width='110' height='100'>".$row['id_jenis']."</td>  
                                    <td>".$row['nama_jasa']."</td> 
                                    <td width='100' height='100'>Rp ".number_format($row['harga_jasa'],0,".",".")."</td> 
                                    <td><img src='upload/".$row['foto_jasa']."' width='100' height='100'></td> 
                                    <td>".$row['deskripsi_jasa']." </td>  
                                    <td>".$row['id_status']."</td> 
                                    </tr>";
                                            
                            ?>
                    </table>
                </div>       
        </div>
       </div>
    </div>
</div>
</body>
</html>
