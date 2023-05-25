<?php
    include 'koneksi.php';
    if(isset($_GET['id_pesan'])){
        $delete = mysqli_query($koneksi, "delete from tb_pesan where id_pesan= '".$_GET['id_pesan']."' ");
        echo "<meta http-equiv=refresh content=1;URL='pesan.php'>";
    }
?>