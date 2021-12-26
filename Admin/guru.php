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
      <?php
      $sql="SELECT * FROM murid WHERE username = '$_SESSION[username]'";
      $query=mysqli_query($conn, $sql);
      $data=mysqli_fetch_array($query);
      ?>

      <br>
      <p class="fs-2 text-primary d-flex justify-content-center">Halaman Pesan Dari Pengunjung</p><br><br>
      <table border=1 class="table table-bordered shadow">
        <tr>
          <td><b>NIP</b></td>
          <td><b> Nama Guru </b> </td>
          <td><b> Username </b></td>
          <td width="100"><b> Mengajar Kelas</b> </td>
          <td width="100"><b> Penjurusan </b> </td>
          <td><b>Jenis Kelamin</b></td>
          <td><b>Alamat</b></td>
          <td><b> No_Handphone</b></td>
          <td width="50"><b>Aksi</b></td>
        </tr>
        <?php
        //include ('../koneksi_db.php');
        $tampil="SELECT * FROM guru";
        $hasil=mysqli_query($conn,$tampil);
        while ($data=mysqli_fetch_array($hasil))
        {
            echo "
                <tr>
                  <td> $data[nip] </td>
                  <td class='text-left'> $data[nama_guru] </td>
                  <td class='text-left'> $data[username] </td>
                  <td> $data[kelas] </td>
                  <td> $data[Penjurusan] </td>
                  <td> $data[gender]</td>
                  <td> $data[alamat] </td>
                  <td> $data[nohp] </td>
                  <td width='100'> <a href='proses_hapus_mail.php?hapus=$data[username]'> Hapus</a> </td>
                </tr>";
        }
        //$kode=$_GET['hapus'];
        //echo	"<script>	alert('$kode'); </script>";
        ?>
      </table>
    </div>
    <?php include ('../footer.php'); ?>
  </div>
</body>
</html>