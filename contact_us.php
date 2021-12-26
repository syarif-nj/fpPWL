

<!doctype html>
<html lang="en">
  <head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <title>Kontak Kami</title>
  </head>
  <body>
    <?php include ('navbar.php'); ?>
    <div class="container d-flex justify-content-center align-items-center" style="min-height: 100vh">
      <form action="proses_contact_us.php" method="POST" class="row g-3 border shadow rounded-bottom-up bg-light bg-opacity-75"  style="border-radius: 25px; padding: 25px;">
        <h2 class="text-center fw-bold">Kontak Kami</h2>
          <div class="col-6 col-md-4">
            <h3>kontak</h3>
          </div>
          <div class="col-sm-6 col-md-8">
            <div class="row g-3">
            <p class="text-center">Silahkan tinggalkan pesan anda, pada kolom yang tersedia</p>
            <div class="col-12">
              <label for="inputNama" class="form-label">Nama</label>
              <input type="text" name="Nama" class="form-control" id="Nama">
            </div>
            <div class="col-md-6">
              <label for="inputEmail4" class="form-label">Email</label>
              <input type="email" name="Email" class="form-control" id="Email">
            </div>
            <div class="col-md-6">
              <label for="inputPhone" class="form-label">No Telepon</label>
              <input type="text" name="Phone" class="form-control" id="Phone">
            </div>
            <div class="col-12">
              <label for="inputPesan" class="form-label">Pesan anda :</label>
              <textarea class="form-control" name="Isi" id="Isi" rows="3"></textarea>
            </div>
            <div class="col-12">
            <button type="submit" value="Send" class="btn btn-primary">Kirim</button>
            </div>
            </div>
          </div>
      </form>
    </div>
    <!-- Optional JavaScript; choose one of the two! -->
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>