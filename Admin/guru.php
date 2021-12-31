<?php include "../koneksi_db.php"; ?>

<link rel="stylesheet" href="../css/bootstrap.css">
<link rel="stylesheet" href="../js/bootstrap.js">
<?php
/*if (empty($_SESSION['username']) AND empty($_SESSION['password'])) {
    echo "<link href='style.css' rel='stylesheet' type='text/css'>
 <center>Untuk mengakses modul, Anda harus login <br>";
    echo "<a href=../../index.php><b>LOGIN</b></a></center>";
} else {*/
  include ("../navbar1.php");
  include ("../koneksi_db.php");
    $link = "proses_guru.php";
    switch (isset($_GET['act'])) {
        case 'editor':
          if (isset($_GET['id'])) {
                $query = mysqli_query($conn,"select * from guru where username='$_GET[id]'");
                $result = mysqli_fetch_array($query);
                $query2 = mysqli_query($conn,"select * from akun where username='$_GET[id]'");
                $result2 = mysqli_fetch_array($query2);
                $nip = $result[0]; $nama_guru = $result[1]; $username = $result[2];
                $kelas = $result[3]; $penjurusan = $result[4]; $gender = $result[5];
                $alamat = $result[6]; $nohp = $result[7]; $password = $result2[1];
                $aksi = "update";
                $readonly="readonly";
            } else {
                $nip=""; $nama_guru=""; $username=""; $kelas=""; $penjurusan=""; $gender=""; $alamat=""; $nohp="";
                $aksi = "insert";
                $readonly="";
            }
            ?>
            <p class="fs-2 text-primary d-flex justify-content-center">Insert/Update Admin</p><br><br>
            <div class="container" style="min-height: 100vh">
                <form class="shadow bg-light bg-opacity-75" action="<?php echo $link; ?>?menu=admin&act=<?php echo $aksi; ?>" method=post id="frmmodul"
                style="border-radius: 25px; padding: 25px;">
                    <div class="form-group">
                        <label for="nama">NIP :</label>
                        <input type="text" class="form-control" <?php echo $readonly;?> id="nip" name="nip" value="<?php echo $nip; ?>">
                    </div><br>
                    <div class="form-group">
                        <label for="alamat">Nama Guru :</label>
                        <input type="text" class="form-control" id="nama_guru" name="nama_guru" value="<?php echo $nama_guru; ?>">
                    </div><br>
                    <div class="form-group">
                        <label for="nama">Username :</label>
                        <input type="text" class="form-control" <?php echo $readonly;?> id="username" name="username" value="<?php echo $username; ?>">
                    </div><br>
                    <div class="form-group">
                        <label for="alamat">Password anda:</label>
                        <input type="text" class="form-control" id="password" name="password" value="<?php echo $password; ?>">
                    </div><br>
                    <div class="form-group">
                        <label for="nama">Mengajar Kelas :</label>
                        <!-- <input type="text" class="form-control" id="kelas" name="kelas" value="<?php echo $kelas; ?>"> -->
                        <select class="form-select" name="kelas" id="kelas">
                          <option selected>Pilih Kelas</option>
                          <option value="10">10</option>
                          <option value="12">11</option>
                          <option value="13">12</option>
                        </select>
                    </div><br>
                    <div class="form-group">
                        <label for="nama">Penjurusan :</label>
                        <!-- <input type="text" class="form-control" id="penjurusan" name="penjurusan" value="<?php echo $penjurusan; ?>"> -->
                        <select class="form-select" name="penjurusan" id="penjurusan">
                          <option selected>Pilih Penjurusan</option>
                          <option value="IPA">IPA</option>
                          <option value="IPS">IPS</option>
                        </select>
                    </div><br>
                    <div class="form-group">
                        <label for="nama">Jenis Kelamin :</label>
                        <!-- <input type="text" class="form-control" id="gender" name="gender" value="<?php echo $gender; ?>"> -->
                        <select class="form-select" name="gender" id="gender">
                          <option selected>Pilih Jenis Kelamin</option>
                          <option value="Laki-laki">Laki-laki</option>
                          <option value="Perempuan">Perempuan</option>
                        </select>
                    </div><br>
                    <div class="form-group">
                        <label for="nama">Alamat :</label>
                        <input type="text" class="form-control"  id="alamat" name="alamat" value="<?php echo $alamat; ?>">
                    </div><br>
                    <div class="form-group">
                        <label for="nama">No Handphone :</label>
                        <input type="text" class="form-control"  id="nohp" name="nohp" value="<?php echo $nohp; ?>">
                    </div><br>
                    <input type="submit" class="btn btn-primary"></input>
                </form>
            </div>
            <?php
            break;
            default:
            ?>
    </table>
    <div id="guru">
      <div class="container">
        <br>
        <center><br>
          <p class="fs-2 text-primary d-flex justify-content-center">Halaman Data Guru</p>
          <button type="button" class="btn btn-primary" onclick="location.href='?menu=admin&act=editor'">Tambah</button> <br><br>
        </center>
        <table border=1 class="table table-bordered shadow">
          <tr>
            <td><b>NIP</b></td>
            <td><b> Nama Guru </b> </td>
            <td><b> Username </b></td>
            <td width="70"><b> Kelas Ngajar</b> </td>
            <td width="90"><b> Penjurusan </b> </td>
            <td><b>Jenis Kelamin</b></td>
            <td><b>Alamat</b></td>
            <td><b> No_Handphone</b></td>
            <td width="100"><b>Aksi</b></td>
          </tr>
          <?php
          //include ('../koneksi_db.php');
          $tampil="SELECT * FROM guru";
          $hasil=mysqli_query($conn,$tampil);
          while ($data=mysqli_fetch_array($hasil))
          {
            echo '
                  <tr>
                    <td>'.$data[0].'</td>
                    <td class="text-left">'.$data[1].'</td>
                    <td class="text-left">'. $data[2].'</td>
                    <td width="70">'.$data[3].'</td>
                    <td>'.$data[4].'</td>
                    <td>'.$data[5].'</td>
                    <td>'.$data[6].'</td>
                    <td>'.$data[7].'</td>
                    <td><a href="?menu=admin&act=editor&id=' . $data[2] . '">Edit </a>||
                        <a onclick="return confirm(\'Apakah anda yakin akan menghapus?\')"
                            href="' . $link . '?&act=delete&id='. $data[2].'">Hapus</a>
                    </td>
                  </tr>';
          }
          ?>
        </table>
      </div>
    </div>
    <?php
    include ("../footer.php");
}
//}
?>