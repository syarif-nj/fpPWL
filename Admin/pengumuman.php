<?php include "../koneksi_db.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SMA UNGGUL | Contact Us</title>

  <link rel="stylesheet" href="../css/bootstrap.css">
</head>
<body>
  <div class="shadow">
        <?php include ('../navbar1.php'); ?>
    </div><br>
    <div id="Pengumuman">
    <div class="container roma-batasan">
      <br>
      <p class="fs-2 text-primary d-flex justify-content-center">Halaman Pengumuman</p><br>
              <br>
      <table border=1 class="table table-bordered shadow">
      <tr>
          <td width="100"><b>Tanggal</b></td>
          <td width="70"><b> Kelas</b> </td>
          <td><b> Subject</b></td>
          <td><b> Isi</b> </td>
          <td width="50"><b>Aksi</b></td>
        </tr>
        <?php
        //include ('../koneksi_db.php');
        $tampil="SELECT * FROM pengumumam";
        $hasil=mysqli_query($conn,$tampil);
        while ($data=mysqli_fetch_array($hasil))
        {
            echo '<tr>
                  <td>'.$data[1].'</td>
                  <td class="text-left">'.$data[2].'</td>
                  <td class="text-left">'.$data[3].'</td>
                  <td>'.$data[4].'</td>
                  <td width="100"> <a onclick="return confirm(\'Apakah anda yakin akan menghapus?\')"
                  href="proses_hapus_pengumuman.php?id='.$data[0].'">Hapus </a> </td>
                </tr>';
        }
        ?>
      </table>
    </div>
    <?php include ('../footer.php'); ?>
  </div>
</body>
</html>