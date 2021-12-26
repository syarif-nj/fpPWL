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
    <?php include ('../navbar1.php'); ?>

    <div id="Laporan Nilai">
        <div class="container roma-batasan">
            <?php
            $sql="SELECT * FROM murid WHERE username = '$_SESSION[username]'";
            $query=mysqli_query($conn, $sql);
            $data=mysqli_fetch_array($query);
            ?>

        <br>
      <p class="fs-2 text-primary d-flex justify-content-center">Nilai Siswa </p><br>
            <table>
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
                    <td width="150" align="center"> <b>Mata Pelajaran</b></td>
                    <td width="80" align="center"><b>Nilai_UTS</b></td>
                    <td width="80" align="center"><b>nilai_UAS</b></td>
                </tr>

                <?php
                $Nama_Murid = $data['nama_murid'];
                $Kelas 		= $data['kelas'];
                $Jurusan	= $data['penjurusan'];
                $tampil="SELECT * FROM nilai WHERE nama_murid = '$Nama_Murid' AND kelas = '$Kelas' AND penjurusan = '$Jurusan'";
                $result=mysqli_query($conn, $tampil);

                while ($data=mysqli_fetch_array( $result))
                {
                    echo "	<tr>
                                <td> $data[nama_mapel]</td>
                                <td align='center'>$data[nilai_UTS]</td>
                                <td align='center'>$data[nilai_UAS]</td>
                            </tr>
                        ";
                }
                ?>
            </table>
        </div>
    </div>
</body>
</html>