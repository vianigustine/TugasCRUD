<?php 
error_reporting(E_ALL);
include_once 'koneksi.php';
$title= 'Tambah';
if (isset($_POST['submit'])) {
	$judul=$_POST['title'];
	$content=$_POST['content'];
	$tanggal=$_POST['tanggal'];

	$sql='INSERT INTO artikel (title, content, tanggal)';
	$sql .="VALUE ('{$judul}', '{$content}', '{$tanggal}')";
	$result=mysqli_query($conn, $sql);
	if ( !$result) {
	 	die(mysqli_error($conn));
	 } 
	 header('location: artikel.php');
}
?>

<link rel="stylesheet" href="style2.css">
<body>
	<div class="container">>
		<header>
		<B><CENTER><BLINK><Font color="#1239FF"><font size="7"><font face="ARIAL BLACK">TUGAS CRUD</font></font></Font></BLINK></CENTER></B>
      </header>
		<nav>
			<a href="home.php">Home</a>
			<a href="profile.php">My Profile</a>
			<a href="#">Kontak</a>
      <a href="artikel.php">CRUD</a>
		</nav>
		<div class="wrap">
			<div class="side">
				
			</div>
			<div class="content">

<h2>Tambah Artikel</h2>
<form method="post" action="tambah.php" enctype="multipart/form-data">
	<div class="field">
		<label for="">Title</label>
		<input type="text" name="title" placeholder="Judul Artikel " />
	</div>
	<div class=field>
		<label for="">Content</label>
		<textarea name="content" cols="50" rows="10" placeholder="Isi Artikel"></textarea> 
	</div>
	<div class="field">
		<label for="">Tanggal</label>
		<input type="date" name="tanggal">
	</div>
	<div class="field submit">
		<input type="submit" class="btn btn-large "name="submit" value="Simpan" />
	</div>
</form>
</div>
<footer>
	<p>&copy; 2018, Vianigustine Varadina-311610002</p>
</footer>	
</body>