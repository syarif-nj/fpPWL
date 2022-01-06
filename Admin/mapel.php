<?php include "../koneksi_db.php"; ?>

<link rel="stylesheet" href="../css/bootstrap.css">
<link rel="stylesheet" href="../js/bootstrap.js">
<div class="shadow">
        <?php include ('../navbar1.php'); ?>
</div><br>
<?php
  include ("../koneksi_db.php");
    $link = "proses_mapel.php";
    switch (isset($_GET['act'])) {
        case 'editor':
          if (isset($_GET['id'])) {
                $query = mysqli_query($conn,"select * from mapel where id_mapel='$_GET[id]'");
                $result = mysqli_fetch_array($query);
                $id_mapel=$result[0]; $nama_mapel=$result[1]; $kelas=$result[2]; $penjurusan=$result[3];$nip=$result[4];
                $guru=$_GET['guru']; $nipguru=$_GET['nip'];
                $aksi = "update";
                $readonly="readonly";
            } else {
                $id_mapel=""; $nama_mapel=""; $kelas="Pilih Kelas"; $penjurusan="Pilih Penjurusan";
                $guru="Pilih Guru"; $nipguru="Unknow";
                $aksi = "insert";
                $readonly="";
            }
            ?>
            <p class="fs-2 text-primary d-flex justify-content-center">Insert/Update Admin</p><br><br>
            <div class="container" style="min-height: 100vh">
                <form class="shadow bg-light bg-opacity-75" action="<?php echo $link; ?>?menu=admin&act=<?php echo $aksi; ?>" method=post id="frmmodul"
                style="border-radius: 25px; padding: 25px;">
                    <div class="form-group">
                        <label for="nama">Kode Mata Pelajaran :</label>
                        <input type="text" class="form-control" <?php echo $readonly;?> id="id_mapel" name="id_mapel" value="<?php echo $id_mapel; ?>">
                    </div><br>
                    <div class="form-group">
                        <label for="alamat">Nama Mata Pelajaran :</label>
                        <input type="text" class="form-control" id="nama_mapel" name="nama_mapel" value="<?php echo $nama_mapel; ?>">
                    </div><br>
                    <div class="form-group">
                        <label for="nama">Kelas :</label>
                        <!-- <input type="text" class="form-control" id="kelas" name="kelas" value="<?php echo $kelas; ?>"> -->
                        <select class="form-select" name="kelas" id="kelas">
                          <option selected value="<?php echo $kelas; ?>"><?php echo $kelas; ?></option>
                          <option value="10">10</option>
                          <option value="12">11</option>
                          <option value="13">12</option>
                        </select>
                    </div><br>
                    <div class="form-group">
                        <label for="nama">Penjurusan :</label>
                        <select class="form-select" name="penjurusan" id="penjurusan">
                          <option selected value="<?php echo $penjurusan; ?>"><?php echo $penjurusan; ?></option>
                          <option value="IPA">IPA</option>
                          <option value="IPS">IPS</option>
                        </select>
                    </div><br>
                    <div class="form-group">
                        <label for="nama">Nama Guru :</label>
                        <!-- <input type="text" class="form-control" id="gender" name="gender" value="<?php echo $gender; ?>"> -->
                        <select class="form-select" name="nip" id="nip">
                          <option selected value="<?php echo $nipguru; ?>"><?php echo $guru; ?></option>
                          <?php
                            $tampil="SELECT * FROM guru";
                            $hasil=mysqli_query($conn,$tampil);
                              while ($data=mysqli_fetch_array($hasil))
                              {
                                echo "<option value='$data[0]'> $data[1] </option> ";
                              }?>
                        </select>
                    </div><br>
                    <input type="submit" class="btn btn-primary"></input>
                </form>
            </div>
            <?php
            break;
            default:
            ?>
    </table>
    <div id="mapel">
      <div class="container">
        <br>
        <center><br>
          <p class="fs-2 text-primary d-flex justify-content-center">Halaman Data Mata Pelajaran</p>
          <button type="button" class="btn btn-primary" onclick="location.href='?menu=admin&act=editor'">Tambah Mata Pelajaran</button> <br><br>
        </center>
        <table border=1 class="table table-bordered shadow">
          <tr>
            <td><b>Kode Mapel</b></td>
            <td><b> Nama Mata Pelajaran </b> </td>
            <td><b> Nama Guru </b> </td>
            <td><b> Kelas </b></td>
            <td width="100"><b> Penjurusan</b> </td>
            <td><b>Aksi</b></td>
          </tr>
          <?php
          //include ('../koneksi_db.php');
          $tampil="SELECT * FROM mapel";
          $hasil=mysqli_query($conn,$tampil);
          while ($data=mysqli_fetch_array($hasil))
          {
              $query3 = mysqli_query($conn,"select * from guru where nip='$data[4]'");
              $result3 = mysqli_fetch_array($query3);
              echo '<tr>
                    <td>'.$data[0].'</td>
                    <td class="text-left">'.$data[1].'</td>
                    <td class="text-left">'.$result3[1].'</td>
                    <td class="text-left">'.$data[2].'</td>
                    <td>'.$data[3].'</td>
                    <td width="120"><a href="?act=editor&id=' . $data[0] . '&guru='.$result3[1].'&nip='.$result3[0].'">Edit </a>||
                    <a onclick="return confirm(\'Apakah anda yakin akan menghapus?\')"
                        href="' . $link . '?&act=delete&id='. $data[0].'">Hapus</a>
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
?>