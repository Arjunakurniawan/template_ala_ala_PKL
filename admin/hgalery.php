<?php
    include 'koneksi.php';
    if(isset($_GET['id_galery'])){
        $delete = mysqli_query($koneksi, "delete from tb_galery where id_galery = '".$_GET['id_galery']."' ");
        echo "<meta http-equiv=refresh content=1;URL='galery.php'>";
    }
?>