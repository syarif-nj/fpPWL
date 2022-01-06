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
    </div><br>

    <div class="clearfix"> </div> 
	
<!-- Pilih Mata Pelajaran -->
<div id="Pilih_Mata_Pelajaran">
	<div class="container ">
    <p class="fs-2 text-primary d-flex justify-content-center">Menginputkan Nilai Siswa</p><br><br>
	<form action="input_nilai.php" method="post">
	<table class="table-condensed fs-5" border=0>
		<tr>
			<td width="150">Mata Pelajaran :</td>
			<td>
				<select name="Mata_Pelajaran">
                    <?php
                    $cari_guru="SELECT * FROM `guru` WHERE username= '$_SESSION[username]' ";
                    $hasil_guru=mysqli_query($conn,$cari_guru);
                    $data_guru=mysqli_fetch_array($hasil_guru);

                    $tampil="SELECT * FROM `mapel` WHERE nip = '$data_guru[nip]'";
                    $hasil=mysqli_query($conn,$tampil);

                    while ($data=mysqli_fetch_array($hasil))
                    {
                        echo "	<option value='$data[nama_mapel]'>$data[nama_mapel]</option> ";
                    }
                    ?>
				</select><br>
			</td>
		</tr>
		<tr>
            <td></td>
			<td align="left" ><br><button class="btn btn-primary fs-6"> Tampilkan </button> </td>
		</tr>
	</table>
	</form>
	</div>
</div>
<br><br>
<div class="fixed-bottom">
<?php include "../footer.php" ?>
</div>



</body>
</html>