<script src="../js/bootstrap.js"></script>
<?php
include ('../koneksi_db.php');


$id = $_GET['id'];
        $query = "DELETE FROM mapel WHERE id_mapel='$id'";
        $sql = mysqli_query($conn, $query);

        if($sql){
            header('location:mapel.php');
        }else{
            header("artikel&con=5&alert=Gagal menghapus artikel ini");
        }
//header('location:mapel.php');
?>