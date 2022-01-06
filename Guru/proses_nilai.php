<?php
include ('../koneksi_db.php');
$kelas = $_POST['Kelas'];
$jurusan = $_POST['Jurusan'];
$nama_mpl = $_POST['Nama_Mata_Pelajaran'];

$tampil_murid="SELECT * FROM murid WHERE penjurusan = '$_POST[Jurusan]' and kelas = '$_POST[Kelas]'";
$hasil_murid=mysqli_query($conn,$tampil_murid);
$N = 1;
$T = 10000;
$A = 20000;

while ($data_murid=mysqli_fetch_array($hasil_murid))
{
	$nama_murid = $_POST[$N];
	$nilai_uts = $_POST[$T];
	$nilai_uas = $_POST[$A];
	
	$tampil_nilai=mysqli_query($conn,"SELECT * FROM `nilai` WHERE nama_murid = '$nama_murid' and penjurusan = '$jurusan' and kelas = '$kelas' and nama_mapel = '$nama_mpl'");
	
	if(mysqli_num_rows($tampil_nilai) == 0)
	{
		$sqlstr=("INSERT INTO `nilai` (`nama_murid`, `kelas`, `penjurusan`, `nama_mapel`, `nilai_UTS`, `nilai_UAS`) VALUES ('$nama_murid', '$kelas', '$jurusan', '$nama_mpl', '$nilai_uts', '$nilai_uas');");
		(mysqli_query($conn,$sqlstr));
	}
	else
	{
		$sqlstr=("UPDATE `nilai` SET `nilai_UTS`= $nilai_uts,`nilai_UAS`= $nilai_uas WHERE nama_murid = '$nama_murid' and kelas = '$kelas' and penjurusan = '$jurusan' and nama_mapel = '$nama_mpl' ");
		(mysqli_query($conn,$sqlstr));
	}
	
	$N++;
	$T++;
	$A++;
}



// apakah query simpan berhasil?
if( $sqlstr ) {
  // kalau berhasil alihkan ke halaman index.php dengan status=sukses
  echo '<script language="javascript">
				alert("Input Nilai Berhasil");
				document.location="index.php";
			  </script>';
} else {
  // kalau gagal alihkan ke halaman indek.php dengan status=gagal
  echo '<script language="javascript">
				alert("Input Nilai Gagal");
				document.location="index.php";
			  </script>';
}


?>