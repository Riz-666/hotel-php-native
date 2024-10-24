<!DOCTYPE html>
<html lang="en">

<head>
	<meta http-equiv="Content-Type" charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php
	include('../konek.php');
	include('../template/header.php');

	session_start();
	if (!isset($_SESSION['role'])) {
		echo "<script> alert('Anda  Harus Login Terlebih Dahulu');
			window.location.replace('../login.php');</script>";
		exit;
	}

	$sql = "SELECT * FROM tb_user WHERE id_user='$id'";
	$query = mysqli_query($host, $sql);

	?>
	<style>
		body {
			font-family: Arial, Helvetica, sans-serif;
		}

		h1 {
			background-color: #6495ED;
		}

		.left ul li a {
			display: block;
			color: #000000;
		}
	</style>

</head>

<body>
	<?php include('../template/adm_nav.php'); ?>
	<br>
	<br>
	<br>
	<div class="container">
		<div class="card">
			<div class="card-header">
				<div class="row">
					<div class="col">
						<h1 align="center">Welcome <?php echo $_SESSION['username'] ?></h1>
					</div>
				</div>
			</div>
			<div class="card-body">
				<div class="row">
					<div class="left col" align="center">
						<ul class="list-group">
							<li class="list-group-item">
								<h1>Menu</h1>
							</li>
							<li class="list-group-item"><a href="kamar/v_kamar.php">Kelola Kamar</a></li>
							<li class="list-group-item"><a href="fas/v_fasilitas.php">Kelola Fasilitas</a></li>
						</ul>
					</div>
					<div class="middle col" align="center">
						<img src="../images/profil/profil.png.png" alt="" width="300px">
					</div>
					<div class="right col" align="center">
						<ul class="list-group">
							<li class="list-group-item">
								<h1>News</h1>
							</li>
							<li class="list-group-item">Berita 01</li>
							<li class="list-group-item">berita 02</li>
						</ul>
					</div>
				</div>
			</div>

			<div class="card-footer">
				<h1 align="center">Admin Dashboard</h1>
			</div>
		</div>
	</div>
	<?php include('../template/footer.php'); ?>
</body>

</html>