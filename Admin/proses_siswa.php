<?php

include ("../koneksi_db.php");
//include "../../config/url.php";
$act = (isset($_GET['act'])) ? $_GET['act'] : 'none';
$menu = (isset($_GET['menu'])) ? $_GET['menu'] : 'none';
if ($act == 'insert' || $act == 'update') {
  $nisn = $_POST['nisn']; $nama = $_POST['nama']; $username = $_POST['username'];
  $kelas = $_POST['kelas']; $penjurusan = $_POST['penjurusan']; $gender = $_POST['gender'];
  $alamat = $_POST['alamat']; $agama = $_POST['agama']; $password = md5($_POST['password']);
} else {
    $id = $_GET['id'];
}

switch ($act) {
    case 'insert':
        $query = "INSERT INTO murid (nisn,username, nama_murid, kelas, penjurusan, gender, agama, alamat)
                        VALUES ('$nisn','$username','$nama','$kelas','$penjurusan','$gender','$agama','$alamat')";
        $query3 = "INSERT INTO akun(username, password, level) VALUES ('$username', '$password','1')";
        $sql3 = mysqli_query($conn,$query3) or die ("cek2 : ".$conn->error);
        $sql = mysqli_query($conn,$query) or die("cek : " . $conn->error);
        if($sql){
            header('location:siswa.php');
        }else{
            header("siswa.php&con=5&alert=Gagal menambahkan akun");
        }
        break;

    case 'update':
        $query = "UPDATE murid SET nama_murid='$nama', kelas='$kelas',
                  penjurusan='$penjurusan', gender='$gender', alamat='$alamat', agama='$agama' WHERE username='$username'";
        $query2 = "UPDATE akun SET password='$password' WHERE username='$username'";
        $sql2 = mysqli_query($conn,$query2) or die("cek : " . $conn->error);
        $sql = mysqli_query($conn,$query) or die("cek : " . $conn->error);
        if($sql){
            header('location:siswa.php');
        }else{
            header("siswa.php&con=5&alert=Gagal mengupdate artikel ini");
        }
        break;

    case 'delete':
        $query = "delete from akun where username = '$id'";
        $query4 = "delete from murid where username='$id'";
        $sql4 = mysqli_query($conn,$query4) or die("cek : " . $conn->error);
        $sql = mysqli_query($conn,$query) or die("cek : " . $conn->error);
        if($sql){
            header('location:siswa.php');
        }else{
            header("siswa.php&con=5&alert=Gagal menghapus akun ini");
        }
        break;
    default:
        break;
}
?>
