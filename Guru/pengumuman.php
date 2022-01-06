<?php include "../koneksi_db.php"; ?>

<link rel="stylesheet" href="../css/bootstrap.css">
<link rel="stylesheet" href="../js/bootstrap.js">
<div class="shadow">
    <?php include ('../navbar1.php'); ?>
  </div>
<?php
  include ("../koneksi_db.php");
    $link = "proses_pengumuman.php";
    switch (isset($_GET['act'])) {
        case 'editor':
            ?>
            <p class="fs-2 text-primary d-flex justify-content-center">Menambahkan Pengumuman Baru</p><br><br>
            <div class="container" style="min-height: 100vh">
                <form class="shadow bg-light bg-opacity-75" action="<?php echo $link; ?>?&act=insert" method=post id="frmmodul"
                style="border-radius: 25px; padding: 25px;">
                <div class="row mb-3">
                  <label for="inputEmail3" class="col-sm-2 col-form-label">Kelas</label>
                  <div class="col-sm-10">
                    <select class="form-select" name="kelas" id="kelas">
                      <option selected>Pilih Kelas</option>
                      <option value="10">10</option>
                      <option value="12">11</option>
                      <option value="13">12</option>
                    </select>
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputEmail3" class="col-sm-2 col-form-label">Subject</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="subject" id="subject">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputPassword3" class="col-sm-2 col-form-label">Isi Pengumuman</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="isi"  id="isi">
                  </div>
                </div>
                <!-- <button type="submit" class="btn btn-primary">Sign in</button> -->
                    <input type="submit" class="btn btn-primary"></input>
                </form>
            </div>
            <?php
            break;
            default:
            ?>
    </table>
    <div class="container">
        <center><br><br>
            <p class="fs-2 text-primary d-flex justify-content-center">Halaman Pengumuman</p>
            <button type="button" class="btn btn-primary" onclick="location.href='?menu=admin&act=editor'">Tambah Pengumuman</button> <br><br>
        </center>
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
                  href="proses_pengumuman.php?act=delete&id='.$data[0].'">Hapus </a> </td>
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
