<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <style>
.container5 {
	max-width : 1200px;
	margin : auto ;
	background : #fff;
	overflow : auto;
}
.gallery {
margin : 5px;
margin-top : 30px;
margin-bottom : 30px;
border : 1px solid #ccc;
float : left;
width : 390px;
}
.gallery img {
width : 100%;
height : 200px;
}

.desc h3 {
padding : 15px;
text-align : center ;
}

.judul h2 {
margin-top : 20px;
}
.warna-teks {
margin-left:5px;
color : #000000;
}

</style>
    <title>Galeri SMA UNGGUL</title>
  </head>
  <body>
    <div>
    <?php include ('navbar.php'); ?>
    </div>
    <div class = "container5">
<div class ="judul">
<center><h2>Galeri SMA UNGGUL</h2></center>
</div>
	<div class="gallery">
		<img src="ASSET/sekolah1.jfif"  >
		<div class ="desc">
				<h3>SEKOLAH</h3>
			</div>
		</div>
		<div class="gallery">
		<img src="ASSET/sekolah2.jpg" >
		<div class ="desc">
				<h3>Halaman Sekolah</h3>
			</div>
		</div>
		<div class="gallery">
		<img src="ASSET/perpustakaan.jpg">
		<div class ="desc">
				<h3>Perpustakaan</h3>
			</div>
		</div>
		<div class="gallery">
		<img src="ASSET/lab komputer.jpg" >
		<div class ="desc">
				<h3>Lab Komputer</h3>
			</div>
            </div>
		<div class="gallery">
		<img src="ASSET/parkiran.jpg" >
		<div class ="desc">
				<h3>Parkiran Motor</h3>
			</div>
		</div>
		<div class="gallery">
		<img src="ASSET/kantin-sekolah.jpg">
		<div class ="desc">
				<h3>Kantin Sekolah</h3>
			</div>
		</div>
	
</div>
  


    <footer>
      <?php include ('footer.php'); ?>
    </footer>
  </body>
</html>