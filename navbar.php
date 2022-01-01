<script src="/js/bootstrap.js"></script>
<script src="/css/bootstrap.css"></script>

<nav class="navbar navbar-expand-lg navbar-light bg-light shadow">
  <div class="container-fluid">
    <a class="navbar-brand  mx-5" href="index.php">
      <span>
      <div class="row">
        <div class="col">
        <img src="Asset/SMA.png" alt="" width="55" height="55" class="d-inline-block align-text-top">
        </div>
        <div class="col">
        <span class=" h2 fw-bold text-primary">SMA UNGGUL</span>
        <p style="font-size: small;">Mendidik menjadi generasi unggul</p>
        </div>
      </div>
      </span>
    </a>
    <button class="navbar-toggler " type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link fs-5 fw-bold text-primary" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link fs-5 fw-bold text-primary" href="galeri.php">Galeri</a>
        </li>
        <li class="nav-item">
          <a class="nav-link fs-5 fw-bold text-primary" href="profil.php">Profil</a>
        </li>
        <li class="nav-item">
          <a class="nav-link fs-5 fw-bold text-primary" href="contact_us.php">Contact</a>
        </li>
      </ul>
      <div class="d-flex">
        <?php
        @session_start();
        if (empty($_SESSION['username'])){
          echo "
          <div class='d-grid gap-2 d-md-block me-5'>
            <a class='btn btn-primary fw-bold' href='login.php' role='button'>Login</a>
            <!--<a class='btn btn-primary fw-bold ms-2' href role='button'>Button</a>-->
          </div>
          ";
        }
        else{
          if ($_SESSION['level']=="admin"){
            echo"
            <div class='dropdown me-5'>
              <button class='btn btn-secondary dropdown-toggle' type='button' id='dropdownMenuButton1' data-bs-toggle='dropdown' aria-expanded='false'>
                $_SESSION[username]
              </button>
              <ul class='dropdown-menu dropdown-menu-end' aria-labelledby='dropdownMenuButton1'>
                <li><a class='dropdown-item' href='Admin/admin.php'>Admin</a></li>
                <li><a class='dropdown-item' href='Admin/siswa.php'>Siswa</a></li>
                <li><a class='dropdown-item' href='Admin/guru.php'>Guru</a></li>
                <li><a class='dropdown-item' href='Admin/mapel.php'>Mata Pelajaran</a></li>
                <li><a class='dropdown-item' href='Admin/pengumuman.php'>Pengumuman</a></li>
                <li><a class='dropdown-item' href='Admin/mail.php'>Pesan</a></li>
                <li><a class='dropdown-item' href='logout.php'>Log out</a></li>
              </ul>
            </div>
            ";
          }
          else if($_SESSION['level']=="guru"){
            echo "
            <div class='dropdown me-5'>
              <button class='btn btn-secondary dropdown-toggle' type='button' id='dropdownMenuButton1' data-bs-toggle='dropdown' aria-expanded='false'>
                $_SESSION[username]
              </button>
              <ul class='dropdown-menu' aria-labelledby='dropdownMenuButton1'>
                <li><a class='dropdown-item' href='Guru/index.php'>Nilai siswa</a></li>
                <li><a class='dropdown-item' href='Guru/pengumuman.php'>Input Pengumuman</a></li>
                <li><a class='dropdown-item' href='logout.php'>Log out</a></li>
              </ul>
            </div>
            ";
          }
          else{
            echo "
            <div class='dropdown me-5'>
              <button class='btn btn-secondary dropdown-toggle' type='button' id='dropdownMenuButton1' data-bs-toggle='dropdown' aria-expanded='false'>
                $_SESSION[username]
              </button>
              <ul class='dropdown-menu dropdown-menu-end' aria-labelledby='dropdownMenuButton1'>
                <li><a class='dropdown-item' href='Siswa/index.php'>Melihat Nilai</a></li>
                <li><a class='dropdown-item' href='Siswa/pengumuman.php'>Melihat Pengumuman</a></li>
                <li><a class='dropdown-item' href='logout.php'>Log out</a></li>
              </ul>
            </div>
            ";
          }
        }
        ?>
        <span></span>
      </div>
    </div>
  </div>
</nav>