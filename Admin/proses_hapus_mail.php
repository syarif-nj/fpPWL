<script src="../js/bootstrap.js"></script>
<?php
include ('../koneksi_db.php');


$Kode = $_GET['kode'];
//echo	"<script>	alert('$kode'); </script>";
mysqli_query($conn,"DELETE FROM 'mail' WHERE Email = '$Kode'");
header('location:mail.php');
?>