<?php
include ('koneksi_db.php');

date_default_timezone_set('Asia/Jakarta');
$input="INSERT INTO `mail` (`Tanggal`, `Nama`, `Email`, `No_HP`, `Isi`) VALUES ('".date('d-m-Y')."', '$_POST[Nama]', '$_POST[Email]', '$_POST[Phone]', '$_POST[Isi]');";
//Apabila perintah SQL untuk menginput data benar



mysqli_query($conn, $input);
if ($input)
{
echo	"<script>	alert('Pesan Terkirim'); document.location='index.php'; </script>";
//header("Location: index.php");
}
else{
echo	"<script>	alert('Pesan Gagal Di Kirim'); document.location='index.php'; </script>";
}

?>