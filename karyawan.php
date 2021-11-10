<?php
session_start();
if(!isset($_SESSION['iduser'])) {
	echo "<script>window.location='dashboard.php';</script>";
}

include "+koneksi.php";
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Karyawan</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>
<body>
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

<nav class="navbar navbar-expand-lg navbar-dark "  style="background-color: #00695c;">
  <a class="navbar-brand" href="dashboard.php">Dashboard</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarText">
    <ul class="navbar-nav mr-auto">
        <a class="nav-link" href="dashboard.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="admin.php">Admin</a>
      </li>
      <li class="nav-item">
	  <li class="nav-item active">
        <a class="nav-link" href="karyawan.php">Karyawan</a>
      </li>
      <li class="nav-item">
		<a class="nav-link" href="aturan.php">Aturan</a>
      </li>
	  <li class="nav-item">
		<a class="nav-link" href="hasil.php">Hasil Fuzzy</a>
      </li>
	  <li class="nav-item">
		<a class="nav-link" href="cetak.php">Cetak</a>
      </li>
    </ul>
  </div>
  
</nav>
<br>
<div align="right">
		Selamat datang  <?=$_SESSION['username']?> |   
		<a href="logout.php">
			<span style="color:#ff3333">Logout</span>
		</a>
	</div>
</br><center>
<table class="table col-md-8 text-center  table-bordered table-striped table-hover" >
<div align="center">
		<a href="form_tambah_karyawan.php">
		<button class="btn"  style="background-color: #66BB6A">+ Tambah Karyawan Baru</button>
		</a>
	</div>
  <caption>Data Karyawan</caption>
  <br>
  <thead>
    <tr>
      <th>No.</th>
      <th>Nama</th>
      <th>Jenis Kelamin</th>
	  <th>Absensi</th>
      <th>Kerjasama</th>
	  <th>Kemampuan</th>
      <th>Opsi</th>
    </tr>
   </thead>
   <tbody>
    <?php 
			$query = $con->query("SELECT * FROM karyawan"); // tampil menggunakan method query
			$nomor = 1;
			while($data = $query->fetch(PDO::FETCH_ASSOC)) { ?>
				<tr>
					<td align="'left'"><?php echo $nomor++; ?>.</td>
					<td><?php echo $data['nama']; ?></td>
					<td><?php echo $data['jk']; ?></td>
					<td><?php echo $data['absen']; ?></td>
					<td><?php echo $data['kerjasama']; ?></td>
					<td><?php echo $data['kemampuan']; ?></td>
					<td >
						<a href="form_edit_karyawan.php?id=<?php echo $data['id_karyawan']; ?>"><button class="btn" style="background-color: #039BE5">Edit</button></a> 
						<a href="proses_hapus_karyawan.php?id=<?php echo $data['id_karyawan']; ?>" onclick="return confirm('Yakin hapus data?')"><button class="btn" style="background-color: #00B8D4">Hapus</button></a>					
					</td>
				</tr> <?php
			} ?>
    </tbody>
</table></center>
</div>
</body>
</html>
