<?php
    include 'koneksi.php';
    if(isset($_GET['id_biodata'])){
        $delete = mysqli_query($koneksi, "delete from tb_biodata where id_biodata = '".$_GET['id_biodata']."' ");
        echo "<meta http-equiv=refresh content=1;URL='biodata.php'>";
    }
?>