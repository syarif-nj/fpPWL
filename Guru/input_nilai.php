<?php include "../koneksi_db.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SMA UNGGUL</title>

    <link rel="stylesheet" href="../css/bootstrap.css">
</head>
<body>
  <div class="shadow">
    <?php include ('../navbar1.php'); ?>
  </div>
    


<!-- Input Nilai -->
<?php
$cari_guru="SELECT * FROM `guru` WHERE username= '$_SESSION[username]' ";
$hasil_guru=mysqli_query($conn,$cari_guru);
$data_guru=mysqli_fetch_array($hasil_guru);

$mapel="SELECT * FROM `mapel` WHERE nip = '$data_guru[nip]' and nama_mapel = '$_POST[Mata_Pelajaran]';";
$hasil_mapel=mysqli_query($conn,$mapel);
$data_mapel=mysqli_fetch_array($hasil_mapel)
?>


<div id="Input Nilai">
	<div class="container"><br>
  <p class="fs-2 text-primary d-flex justify-content-center">Menginputkan Nilai Siswa</p><br><br>
	<form action="proses_nilai.php" method="post">
    <table class="table-condensed fs-5">
        <tr>
          <td> Mata Pelajaran </td>
          <td> : </td>
          <td> <input class="border-0" type="text" name="Nama_Mata_Pelajaran" value="<?php echo $_POST['Mata_Pelajaran']; ?>" Readonly> </td>
        </tr>
        <tr>
          <td> Penjurusan </td>
          <td> : </td>
          <td> <input class="border-0" type="text" name="Jurusan" value="<?php echo $data_mapel['penjurusan']; ?>" size='2' Readonly> </td>
        </tr>
        <tr>
          <td> Kelas </td>
          <td> : </td>
          <td> <input class="border-0" type="text" name="Kelas" value="<?php echo $data_mapel['kelas']; ?>" size='2' Readonly> </td>
        </tr>
      </table> <br><br>
      <table class="table table-bordered shadow">
        <tr>
          <td width="100" align="center"><b>NISN</b> </td>
          <td width="150" align="center"><b>Nama Siswa</b></td>
          <td width="80" align="center"><b>Nilai UTS</b></td>
          <td width="80" align="center"><b>Nilai UAS</b></td>
        <tr>
        
            <?php	
            $tampil_murid="SELECT * FROM murid WHERE penjurusan = '$data_mapel[penjurusan]' and kelas = '$data_mapel[kelas]'";
            $hasil_murid=mysqli_query($conn,$tampil_murid);

            $N = 1;
            $T = 10000;
            $A = 20000;

            while ($data_murid=mysqli_fetch_array($hasil_murid))
            {
              $tampil_nilai="SELECT * FROM `nilai` WHERE nama_murid = '$data_murid[nama_murid]' and penjurusan = '$data_murid[penjurusan]' and kelas = '$data_mapel[kelas]' and nama_mapel = '$_POST[Mata_Pelajaran]'";
              $hasil_nilai=mysqli_query($conn,$tampil_nilai);
              $data_nilai=mysqli_fetch_array($hasil_nilai);

              echo "	<td> $data_murid[nisn] </td>
                  <td class='text-left'> <input class='border-0' type='text' name='$N' value='$data_murid[nama_murid]' Readonly> </td>
                  <td align='center'> <input type='text' name='$T' value='$data_nilai[nilai_UTS]' maxlength='3' size='1'/>  </td>
                  <td align='center'> <input type='text' name='$A' value='$data_nilai[nilai_UAS]' maxlength='3' size='1'/> </td>
                  </TR>
                ";
              $N++;
              $T++;
              $A++;
            }
                
            ?>
      </table>
      <center>
      <button class="btn btn-primary shadow-sm"> Simpan </button>
      </center>
	</form>
	</div>
</div><br><br><br><br>


<?php include "../footer.php" ?>





</body>
</html>