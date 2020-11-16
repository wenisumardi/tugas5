<!DOCTYPE html>
<html>
<head>
	<title>E-commerccee</title>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="assets/css/custom.css">
</head>
<body id="home">

	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<div class="container">
			<a class="navbar-brand" href="#">E-commerccee</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse justify-content-end" id="navbarNav">
				<ul class="navbar-nav">
					<li class="nav-item active">
						<a class="nav-link" href="#home"> HOME</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#product">PRODUCT</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#login" data-toggle="modal">LOGIN</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>


	<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
		<ol class="carousel-indicators">
			<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
		</ol>
		<div class="carousel-inner">
			<div class="carousel-item active">
				<img src="assets/img/4.jpg" class="d-block w-100" alt="assets/img/1.jpg">
			</div>
			<div class="carousel-item">
				<img src="assets/img/5.jpg" class="d-block w-100" alt="assets/img/1.jpg">
			</div>
			<div class="carousel-item">
				<img src="assets/img/6.jpg" class="d-block w-100" alt="assets/img/1.jpg">
			</div>
		</div>
		<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
	</div>

	<section class="feature">
		<h3 class="feture-title">FEATURE</h3>
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<div class="card-feature">
						<i class="material-icons">persons</i>
						<span class="card-feature-title">Persons</span>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
					</div>
				</div>
				<div class="col-md-4">
					<div class="card-feature">
						<i class="material-icons">persons</i>
						<span class="card-feature-title">Persons</span>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
					</div>
				</div>
				<div class="col-md-4">
					<div class="card-feature">
						<i class="material-icons">persons</i>
						<span class="card-feature-title">Persons</span>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="feature" id="product">
		<h3 class="feture-title">PRODUCT</h3>
		<div class="container">
			<div class="row">
				<?php 

				include 'admin/koneksi.php';
				$mysq = mysqli_query($koneksi, "SELECT * FROM product");
				while ($data  = mysqli_fetch_array($mysq)) {
					
					?>

					<div class="col-md-4">
						<div class="card">
							<img src="assets/img/4.jpg" class="card-img-top" alt="...">
							<div class="card-body">
								<h5 class="card-title">Card title</h5>
								<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
								<a href="#" class="btn btn-success mt-3">Add to card</a>
							</div>
						</div>
					</div>
				<?php } ?>

			</div>
		</div>
	</section>



	<!-- Modal -->
	<div class="modal fade" id="login" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
			
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">LOGIN FORM</h5>
				</div>
				<div class="modal-body">
					<table class="table">
						<form class="">
							<tr>
								<td>
									<label>Username</label>
									<input type="text" name="" class="form-control" required="" placeholder="Masukan username anda ..." autocomplete="off">
								</td>
							</tr>
							<tr>
								<td>
									<label>Password</label>
									<input type="text" name="" class="form-control" required="" placeholder="Masukan password anda ..." autocomplete="off">
								</td>
							</tr>
							<tr>
								<td align="right">
									<button type="submit" class="btn btn-primary">LOG-IN</button>
								</td>
							</tr>
						</form>
					</table>
				</div>
			</div>
			
		</div>
	</div>



	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</body>
</html>

<?php

if (isset($POST['simpan'])) {
	

	$nama_user = $_POST['nama_user'];
    $username_user = $_POST['username_user'];
    $password_user = $_POST['password_user'];


    $cek = mysqli_query($koneksi, "SELECT * FROM user WHERE nama_user='$nama_user'");
    $ada = mysql_num_rows($cek);
    if ($ada == 1) {
    	echo "<script>alert('maaf nama user sudah ada')</script>";
    	echo "<meta http-equiv= 'refresh' content=0'; url=index.php'></script>";
    	# code...
    }else{
    	$input = mysql_query($koneksi, "INSERT INTO user VALUES ( NULL, '$nama_user', '$email_user', '$password_user');");

   	if ($mysql) {
       echo "<script>alert('Sukses')</script>";
       echo "<meta http-equiv='refresh' content='0; url=?page=user/index'></script>";
    }else{
      	echo "<script>alert('Terjadi kesalahan, coba ulangi kembali')</script>";
        echo "<meta http-equiv='refresh' content='0; url=?page=user/tambah'></script>";
     }
    }


}

?>