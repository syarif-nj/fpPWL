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
  <?php include ('../navbar1.php'); ?>
  <div id="Pengumuman">
    <div class="container roma-batasan">
      <br>
      <p class="fs-2 text-primary d-flex justify-content-center">Halaman Pengumuman</p><br>
              <br>
      <table border=1 class="table table-bordered shadow">
        <tr>
          <td width="100"><b> Tanggal </td>
          <td><b> Kelas </b></td>
          <td><b> subjectj</b> </td>
          <td><b> Isi </b> </td>
        </tr>
        <?php
        include ('../koneksi_db.php');
        $tampil="SELECT * FROM `pesan` ORDER BY `pesan`.`tanggal` ASC ";
        $hasil=mysqli_query($conn,$tampil);
        while ($data=mysqli_fetch_array($hasil))
        {
            echo "
                <tr>
                    <td> $data[tanggal] </td>
                    <td class='text-left'> $data[kelas] </td>
                    <td class='text-left'> $data[subject] </td>
                    <td> $data[isi] </td>
                </tr>";
        }
        ?>
      </table>
    </div>
    <?php include ('../footer.php'); ?>
  </div>
</body>
</html>