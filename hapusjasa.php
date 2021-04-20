
    <?php
        $this->koneksi = mysqli_connect($this->host, $this->user, $this->pass, $this->db);
        $target= $_GET['target'];
        $query_hapus = "DELETE FROM table_tugas4 WHERE nim='$target' ";
        $hasilhapus = mysqli_query($this->koneksi,$query_hapus);
        echo "<script>alert('Jasa Terhapus');</script>";
        echo "<script>location='admin.php?target=jasa';</script>";        
    ?>    
