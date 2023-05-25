<?php
    include 'koneksi.php';
    if(isset($_GET['id_user'])){
        $delete = mysqli_query($koneksi, "delete from tb_user where id_user= '".$_GET['id_user']."' ");
        echo "<meta http-equiv=refresh content=1;URL='user.php'>";
    }
?>