<?php

include ("../koneksi_db.php");
//include "../../config/url.php";
$act = (isset($_GET['act'])) ? $_GET['act'] : 'none';
$menu = (isset($_GET['menu'])) ? $_GET['menu'] : 'none';
if ($act == 'insert' || $act == 'update') {
  $id_mapel=$_POST['id_mapel']; $nama_mapel=$_POST['nama_mapel'];
  $kelas = $_POST['kelas']; $penjurusan = $_POST['penjurusan']; $nip = $_POST['nip'];
} else {
    $id = $_GET['id'];
}

switch ($act) {
    case 'insert':
        $query = "INSERT INTO mapel (id_mapel, nama_mapel, kelas, penjurusan, nip)
                        VALUES ('$id_mapel','$nama_mapel','$kelas','$penjurusan','$nip' )";
        $sql = mysqli_query($conn,$query) or die("cek : " . $conn->error);
        if($sql){
            header('location:mapel.php');
        }else{
            header("mapel.php&con=5&alert=Gagal menambahkan akun");
        }
        break;

    case 'update':
        $query = "UPDATE mapel SET  nama_mapel='$nama_mapel', kelas='$kelas',
                  penjurusan='$penjurusan', nip='$nip' WHERE id_mapel='$id_mapel'";
        $sql = mysqli_query($conn,$query) or die("cek : " . $conn->error);
        if($sql){
            header('location:mapel.php');
        }else{
            header("mapel.php&con=5&alert=Gagal mengupdate artikel ini");
        }
        break;

    case 'delete':
        $query = "delete from mapel where id_mapel = '$id'";
        $sql = mysqli_query($conn,$query) or die("cek : " . $conn->error);
        if($sql){
            header('location:mapel.php');
        }else{
            header("mapel.php&con=5&alert=Gagal menghapus akun ini");
        }
        break;
    default:
        break;
}
?>
