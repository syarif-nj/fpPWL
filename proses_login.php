<?php
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['username'])) {
    header("location:index.php");
}

include 'koneksi_db.php';

if (isset($_POST['username']) && isset($_POST['password'])) {
    function validate($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    $user = validate($_POST['username']);
    $pass = validate($_POST['password']);
    //$md5pass = hash("md5", $pass);
    $md5pass= md5($pass);
    // $md5pass = hash("sha256", $pass);


    if (empty($user)) {
        header("location:login.php?error=Username wajib diisi");
        exit();
    } else if (empty($pass)) {
        header("location:login.php?error=Password wajib diisi");
        exit();
    } else {
        $sql = "SELECT * FROM akun WHERE username='$user' AND password='$md5pass'";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) === 1) {
            $row = mysqli_fetch_assoc($result);
            if ($row['username'] === $user && $row['password'] === $md5pass) {
                //$_SESSION['username'] = $row['username'];
                //$_SESSION['name'] = $row['name'];
                //$_SESSION['id'] = $row['id'];

                if($row['level']==1){
                    $_SESSION['username']=$user;
                    $_SESSION['level']='siswa';
                    header("Location: index.php");
                    exit();
                }
                else if($row['level']==2){
                    $_SESSION['username']=$user;
                    $_SESSION['level']='guru';
                    header("Location: index.php");
                    exit();
                }
                else if($row['level']==3){
                    $_SESSION['username']=$user;
                    $_SESSION['level']='admin';
                    header("Location: index.php");
                    exit();
                }
                else{
                    echo '<script language="javascript">alert("Username dan Password tidak terdaftar");
                    document.location="login.php"; </script>';
                }

                //header("location:index.php");
                //exit();
            } else {

                //echo $;
                header("location:login.php?error=Salah username atau password ya0000!");
                exit();
            }
        } else {
            header("location:login.php?error=Salah username atau password ya!");
            exit();
        }
    }
}