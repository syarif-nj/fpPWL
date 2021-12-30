<?php
include ('../koneksi_db.php');


$id = $_GET['id'];
$query = "DELETE FROM `pengumumam` WHERE `pengumumam`.`id` = $id";
$sql = mysqli_query($conn,$query) or die("cek : " . $conn->error);

        if($sql){
            header('location:pengumuman.php');
        }else{
            header("pengumuman.php&con=5&alert=Gagal menghapus artikel ini");
        }
?>