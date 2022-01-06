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
      <p class="fs-2 text-primary d-flex justify-content-center">Halaman Pengumuman</p><br>
      <table class="table-condensed">
        <tr>
          <td> Nama </td>
          <td> : </td>
          <td> <input class="border-0" type="text" id="nama" value="<?php echo $data['nama_murid']; ?>" Readonly > </td>
        </tr>
        <tr>
          <td> Kelas </td>
          <td> : </td>
          <td> <input class="border-0" type="text" id="kelas" value="<?php echo $data['kelas']; ?>" Readonly > </td>
        </tr>
        <tr>
          <td> Jurusan </td>
          <td> : </td>
          <td> <input class="border-0" type="text" id="penjurusan" value="<?php echo $data['penjurusan']; ?>" Readonly > </td>
        </tr>
      </table>
              <br><br>
      <table border=1 class="table table-bordered shadow">
        <tr>
          <td width="100"><b> Tanggal </td>
          <td><b> Kelas </b></td>
          <td><b> subjectj</b> </td>
          <td><b> Isi </b> </td>
        </tr>
        <?php
        include ('../koneksi_db.php');
        $tampil="SELECT * FROM `pengumumam` ";
        $hasil=mysqli_query($conn,$tampil);
        while ($data=mysqli_fetch_array($hasil))
        {
            echo "
                <tr>
                    <td> $data[1] </td>
                    <td class='text-left'> $data[2] </td>
                    <td class='text-left'> $data[3] </td>
                    <td> $data[4] </td>
                </tr>";
        }
        ?>
      </table>
    </div>
    <?php include ('../footer.php'); ?>
  </div>
</body>
</html>