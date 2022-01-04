<link rel="stylesheet" href="../css/bootstrap.css">
<link rel="stylesheet" href="../js/bootstrap.js">
<?php
  include ("../navbar1.php");
  include ("../koneksi_db.php");
    $link = "proses_admin.php";
    switch (isset($_GET['act'])) {
        case 'editor':
            if (isset($_GET['id'])) {
                $query = mysqli_query($conn,"select * from akun where username='$_SESSION[username]'");
                $result = mysqli_fetch_array($query);
                $username = $result[0];
                $password = $result[1];
                $aksi = "update";
                $readonly="readonly";
            } else {
                $username = "";
                $password = "";
                $aksi = "insert";
                $readonly="";
            }
            ?>
            <p class="fs-2 text-primary d-flex justify-content-center">Insert/Update Admin</p><br><br>
            <div class="container" style="min-height: 100vh">
                <form class="shadow bg-light bg-opacity-75" action="<?php echo $link; ?>?menu=admin&act=<?php echo $aksi; ?>" method=post id="frmmodul"
                style="border-radius: 25px; padding: 25px;">   
                    <div class="form-group">
                        <label for="nama">Username anda:</label>
                        <input type="text" class="form-control" <?php echo $readonly;?> id="username" name="username" value="<?php echo $username; ?>">
                    </div><br>
                    <div class="form-group">
                        <label for="alamat">Password anda:</label>
                        <input type="text" class="form-control" id="password" name="password" value="<?php echo $password; ?>">
                    </div><br>
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
            <h3 class="text-primary"> Halaman Data Admin</h3>
            <button type="button" class="btn btn-primary" onclick="location.href='?menu=admin&act=editor'">Tambah</button> <br><br>
        </center>
            <table border="1" class="table table-bordered rounded shadow-lg">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Username</th>
                        <th>Password</th>
                        <th>aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    $sql = mysqli_query($conn,"SELECT * FROM akun WHERE level = 3") or die("Query error : " . $conn->error);
                    while ($row = mysqli_fetch_array($sql)) {
                        echo '<tr><td>' . $no . '</td>
                        <td>' . $row[0] . '</td>
                        <td>' . $row[1] . '</td>
                        <td><a href="?menu=admin&act=editor&id=' . $row[1] . '">Edit </a>||
                            <a onclick="return confirm(\'Apakah anda yakin akan menghapus?\')"
                                href="' . $link . '?menu=modul&act=delete&id='. $row[0].'">Hapus</a>
                        </td></tr>';
                        $no++;
                    }
                    ?>
                </tbody>
            </table>
    </div>
    </div>
    <?php
}
?>