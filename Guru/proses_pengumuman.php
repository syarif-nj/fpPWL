<?php

include ("../koneksi_db.php");
date_default_timezone_set('Asia/Jakarta');
$act = (isset($_GET['act'])) ? $_GET['act'] : 'none';
if ($act == 'insert') {
    $kelas = $_POST['kelas'];
    $subject = $_POST['subject'];
    $isi = $_POST['isi'];
} else {
    $id = $_GET['id'];
}

switch ($act) {
    case 'insert':
        $query = "INSERT INTO pengumumam (tanggal, kelas, subject, isi)
                        VALUES ('".date('d-m-Y')."', '$kelas','$subject','$isi' )";
        $sql = mysqli_query($conn,$query) or die("cek : " . $conn->error);
        if($sql){
            header('location:pengumuman.php');
        }else{
            header("pengumuman.php&con=5&alert=Gagal menambahkan pengumuman");
        }
        break;

    case 'delete':
        $query = "delete from pengumumam where id='$id'";
        $sql = mysqli_query($conn,$query) or die("cek : " . $conn->error);
        if($sql){
            header('location:pengumuman.php');
        }else{
            header("pengumuman.php&con=5&alert=Gagal menghapus akun ini");
        }
        break;
    default:
        break;
}
?>
