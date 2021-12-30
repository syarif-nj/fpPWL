<script src="../js/bootstrap.js"></script>
<?php
include ('../koneksi_db.php');


$id = $_GET['id'];
$query = "delete from mapel where id_mapel='$id'";
$sql = mysqli_query($conn,$query) or die("cek : " . $conn->error);

        if($sql){
            header('location:mapel.php');
        }else{
            header("mapel.php&con=5&alert=Gagal menghapus artikel ini");
        }
//header('location:mapel.php');
?>