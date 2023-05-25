<?php
    include 'koneksi.php';
    if(isset($_GET['id_agenda'])){
        $delete = mysqli_query($koneksi, "DELETE FROM tb_agenda WHERE id_agenda= '".$_GET['id_agenda']."' ");
        echo "<meta http-equiv=refresh content=1;URL='agenda.php'>";
    }
?>
