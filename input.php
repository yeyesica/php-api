<!DOCTYPE html>
<html>
<head>
	<title>Membuat CRUD Dengan PHP Dan MySQL - Menampilkan data dari database</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<section id="box-judul">
		<div class="judul">
		<h1>Membuat CRUD Dengan PHP Dan MySQL</h1>
		<h1>Menampilkan data dari database</h1>
		<a href="index.php">Lihat Semua Data</a>
		</div>
	</div>
</section>
<section id="input-form">
	<h2><center>KUY INPUT DATA BARU !<center></h2>
		<form action="input-aksi.php" method="post">
			<div class="form">
				<label>Id</label>
				<input type="text" name="id">
			</div>
			<div class="form">
				<label>Username</label>
				<input type="text" name="username">
			</div>
			<div class="form">
				<label>Password</label>
				<input type="password" name="password">
			</div>
			<div class="form">
				<label>Level</label>
				<input type="text" name="level">
			</div>
			<div class="form">
				<label>Fullname</label>
				<input type="text" name="fullname">
			</div>
			<div class="form">
				<input type="submit" name="submit"
				value="Simpan" class="bg-blue">
			</div>
		</form>
	</section>
</body>
</html>