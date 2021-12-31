<?php

include ("../koneksi_db.php");
//include "../../config/url.php";
$act = (isset($_GET['act'])) ? $_GET['act'] : 'none';
$menu = (isset($_GET['menu'])) ? $_GET['menu'] : 'none';
if ($act == 'insert' || $act == 'update') {
  $nip = $_POST['nip']; $nama_guru = $_POST['nama_guru']; $username = $_POST['username'];
  $kelas = $_POST['kelas']; $penjurusan = $_POST['penjurusan']; $gender = $_POST['gender'];
  $alamat = $_POST['alamat']; $nohp = $_POST['nohp']; $password = md5($_POST['password']);
} else {
    $id = $_GET['id'];
}

switch ($act) {
    case 'insert':
        $query = "INSERT INTO guru (nip, nama_guru, username, kelas, Penjurusan, gender, alamat, nohp)
                        VALUES ('$nip','$nama_guru','$username','$kelas','$penjurusan','$gender','$alamat','$nohp' )";
        $query3 = "INSERT INTO akun(username, password, level) VALUES ('$username', '$password','2')";
        $sql3 = mysqli_query($conn,$query3) or die ("cek2 : ".$conn->error);
        $sql = mysqli_query($conn,$query) or die("cek : " . $conn->error);
        if($sql){
            header('location:guru.php');
        }else{
            header("guru.php&con=5&alert=Gagal menambahkan akun");
        }
        break;

    case 'update':
        $query = "UPDATE guru SET nama_guru='$nama_guru', kelas='$kelas',
                  Penjurusan='$penjurusan', gender='$gender', alamat='$alamat', nohp='$nohp' WHERE username='$username'";
        $query2 = "UPDATE akun SET password='$password' WHERE username='$username'"; 
        $sql2 = mysqli_query($conn,$query2) or die("cek : " . $conn->error);
        $sql = mysqli_query($conn,$query) or die("cek : " . $conn->error);
        if($sql){
            header('location:guru.php');
        }else{
            header("guru.php&con=5&alert=Gagal mengupdate artikel ini");
        }
        break;

    case 'delete':
        $query = "delete from akun where username = '$id'";
        $query4 = "delete from guru where username='$id'";
        $sql4 = mysqli_query($conn,$query4) or die("cek : " . $conn->error);
        $sql = mysqli_query($conn,$query) or die("cek : " . $conn->error);
        if($sql){
            header('location:guru.php');
        }else{
            header("guru.php&con=5&alert=Gagal menghapus akun ini");
        }
        break;
    default:
        break;
}
?>
