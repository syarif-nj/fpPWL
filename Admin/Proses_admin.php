<?php

include ("../koneksi_db.php");
//include "../../config/url.php";
$act = (isset($_GET['act'])) ? $_GET['act'] : 'none';
$menu = (isset($_GET['menu'])) ? $_GET['menu'] : 'none';
if ($act == 'insert' || $act == 'update') {
    $username = $_POST['username'];
    $password = md5($_POST['password']);
} else {
    $id = $_GET['id'];
}

switch ($act) {
    case 'insert':
        $query = "INSERT INTO akun(username, password, level)
                        VALUES ('$username', '$password','3')";
        $sql = mysqli_query($conn,$query) or die("cek : " . $conn->error);
        if($sql){
            header('location:admin.php');
        }else{
            header("mapel.php&con=5&alert=Gagal menambahkan akun");
        }
        break;

    case 'update':
        $query = "UPDATE akun SET password='$password' WHERE username='$username'"; 
        $sql = mysqli_query($conn,$query) or die("cek : " . $conn->error);
        if($sql){
            header('location:admin.php');
        }else{
            header("admin.php&con=5&alert=Gagal mengupdate artikel ini");
        }
        break;

    case 'delete':
        $query = "delete from akun where username='$id'";
        $sql = mysqli_query($conn,$query) or die("cek : " . $conn->error);
        if($sql){
            header('location:admin.php');
        }else{
            header("admin.php&con=5&alert=Gagal menghapus akun ini");
        }
        break;
    default:
        break;
}
?>
