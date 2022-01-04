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
    <div class="container">
      <?php
      $sql="SELECT * FROM murid WHERE username = '$_SESSION[username]'";
      $query=mysqli_query($conn, $sql);
      $data=mysqli_fetch_array($query);
      ?>

      <br>
      <p class="fs-2 text-primary d-flex justify-content-center">Halaman Pesan Dari Pengunjung</p><br><br>
      <table border=1 class="table table-bordered shadow">
        <tr>
          <td width="100"><b> Tanggal </td>
          <td><b> Nama </b></td>
          <td><b> Email</b> </td>
          <td width="150"><b> Nomor Handphone </b> </td>
          <td><b> Isi</b></td>
          <!--<td width="50"><b>Aksi</b></td>-->
        </tr>
        <?php
        //include ('../koneksi_db.php');
        $tampil="SELECT * FROM `mail` ORDER BY `mail`.`Tanggal` ASC ";
        $hasil=mysqli_query($conn,$tampil);
        while ($data=mysqli_fetch_array($hasil))
        {
            echo "
                <tr>
                  <td> $data[Tanggal] </td>
                  <td class='text-left'> $data[Nama] </td>
                  <td class='text-left'> $data[Email] </td>
                  <td> $data[No_HP] </td>
                  <td> $data[Isi] </td>
                  <td width='120'> <a onclick='return confirm(\'Apakah anda yakin akan menghapus?\')'
                  href='proses_hapus_mail.php?hapus=$data[4]'> Hapus</a> </td>
                </tr>";
        }
        ?>
      </table>
    </div>
    <?php include ('../footer.php'); ?>
  </div>
</body>
</html>