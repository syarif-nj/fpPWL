<?php
include ('../koneksi_db.php');


$Kode = $_GET['hapus'];
$sql = mysqli_query($conn,"DELETE FROM mail WHERE id = '$Kode'") or die("cek : " . $conn->error);
if($sql){
  header('location:mail.php');
}else{
  header("mail.php&con=5&alert=Gagal menghapus artikel ini");
}
?>