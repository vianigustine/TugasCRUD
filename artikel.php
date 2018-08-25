<?php
include_once 'koneksi.php';
//include('login_session.php');
$title = 'Artikel';
$sql = 'SELECT * FROM artikel order by tanggal DESC';
$result = mysqli_query($conn, $sql);

 ?>
 <link rel="stylesheet" href="style2.css">
 <div class="container">>
		<header>
			<header>
        <B><CENTER><BLINK><Font color="#1239FF"><font size="7"><font face="ARIAL BLACK">TUGAS CRUD</font></font></Font></BLINK></CENTER></B>
      </header>
		</header>
		<nav>
			<a href="home.php">Home</a>
			<a href="profile.php">My Profile</a>
			<a href="#">Kontak</a>
      <a href="artikel.php">CRUD</a>
		</nav>
		
      <div class="wrap">
		<div class="side"></div>
		<div class="content">
   		<div class="daftar">
   			<div class="field">
   				<h1> Data Artikel</h1>
   				<br>
     <table border="1">
     	<th>Judul</th>
       <th>Tanggal</th>
       <th>Aksi</th>
       <?php while ($row = mysqli_fetch_array($result)):?>
         <tr>
           <td><?php echo $row['title']; ?></td>
           <td><?php echo date("j F Y", strtotime($row['tanggal'])) ;?></td>
           <td>
     				<a class="btn btn-default" href="edit.php?id=<?php echo $row['id'];?>">Edit</a>
     				<a class="btn btn-alert" onclick="return confirm('Yakin akan menghapus data?');"
              href="hapus.php?id=<?php echo $row['id'];?>">Delete</a>

     			</td>
         </tr>
       <?php endwhile; ?>
     </table>
     <?php
        echo '<a href="tambah.php" class="btn btn-large">Tambah Artikel</a>';
      ?>
   		</div>
 	</div>
 </div>
</div>
<footer>
	<p>&copy; 2018, Vianigustine Varadina-311610002</p>
</footer>
</div>
</div>				
 <?php
 //include('footer.php');
  ?>
side