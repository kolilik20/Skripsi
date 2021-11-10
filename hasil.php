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
	<title>Hasil Fuzzy</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <style>
    @import url(https://fonts.googleapis.com/css?family=Roboto:300);
    .regist-page {
        width: 400px;
        padding: 1% 0 0;
        margin: auto;
    }
    .form {
        position: relative;
        z-index: 1;
        background: ;
        max-width: 360px;
        margin: 0 auto 100px;
        padding:30px;
        text-align: center;
        box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
    }
    .form input {
        font-family: "Roboto", sans-serif;
        outline: 0;
        background: #f2f2f2;
        width: 90%;
        border: 0;
        margin: 0 0 10px;
        padding: 10px;
        box-sizing: border-box;
        font-size: 14px;
    }
    .form button {
        margin-left: 73px;
        font-family: "Roboto", sans-serif;
        text-transform: uppercase;
        outline: 0;
        background: #00695c;
        width: 100%;
        border: 0;
        padding: 10px;
        color: #FFFFFF;
        font-size: 14px;
        -webkit-transition: all 0.3 ease;
        transition: all 0.3 ease;
        cursor: pointer;
    }
    .form button:hover,.form button:active,.form button:focus {
        background: #43A047;
    }
    .form .message {
        margin: 15px 0 0;
        color: #b3b3b3;
        font-size: 12px;
    }
    .form .message a {
        color: #004d40;
        text-decoration: none;
    }
    .form .register-form { display: none; }
    .container {
        position: relative;
        z-index: 1;
        max-width: 300px;
        margin: 0 auto;
    }
    .container:before, .container:after {
        content: "";
        display: block;
        clear: both;
    }
    .container .info {
        margin: 50px auto;
        text-align: center;
    }
    .container .info h1 {
        margin: 0 0 15px;
        padding: 0;
        font-size: 36px;
        font-weight: 300;
        color: #1a1a1a;
    }
    .container .info span {
        color: #4d4d4d;
        font-size: 12px;
    }
    .container .info span a {
        color: #000000;
        text-decoration: none;
    }
    .container .info span .fa { color: #EF3B3A; }
    body {
     background: ;      
    }
    </style>
</head>
<body style="background-color: ;">
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
        <a class="nav-link" href="karyawan.php">Karyawan</a>
      </li>
      <li class="nav-item">
		<a class="nav-link" href="aturan.php">Aturan</a>
      </li>
	  <li class="nav-item">
      <li class="nav-item active">
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
<form action="<?php echo $_SERVER["PHP_SELF"];?>" method="GET">
            <p>ID Karyawan:</p>
            <select name="id_karyawan" style="width:50px;">
               <?php
               include "+koneksi.php";
                //query menampilkan id karyawan ke dalam combobox
                $query = $con->query("SELECT * FROM karyawan ORDER BY id_karyawan"); // tampil menggunakan method query
		          	while($data = $query->fetch(PDO::FETCH_ASSOC)) {
                ?>
                <option class="btn" value="<?=$data['id_karyawan'];?>"><?php echo $data['id_karyawan'];?></option>
                <?php
                }
                ?>
            </select>
            <input class="btn" style="background-color: #039BE5" type="submit" value="Pilih">
           <a href="hasil.php">Refresh</a> 
        </form>
        
        <?php
        if (isset($_GET['id_karyawan'])) {
            $id_karyawan=$_GET['id_karyawan'];
            $nomor = 1;
            //menampilkan data karyawan berdasarkan pilihan combobox ke dalam form
            $tamPeg=$con->query("SELECT * FROM karyawan WHERE id_karyawan='$id_karyawan'");
            $tpeg = $tamPeg->fetch(PDO::FETCH_ASSOC);
        
        ?>
        <form action="#" method="POST">
        <table class="table col-md-9 text-center  table-bordered table-striped table-hover" >
            <caption>Data Karyawan</caption>
            <br>
        <thead>
            <tr>
            <h4>Data Karyawan</h4><br>
                <th>No.</th>
                <th>ID</th>
                <th>Nama</th>
                <th>Jenis Kelamin</th>
	            <th>Absensi</th>
                <th>Kerjasama</th>
	            <th>Kemampuan</th>
                <th>Hasil Fuzzyfikasi Absensi</th>
                <th>Hasil Fuzzyfikasi Kerjasama</th>
                <th>Hasil Fuzzyfikasi Kemampuan</th>
            </tr>
        </thead>
        <tbody>
		    <td align="'left'"><?php echo $nomor++; ?>.</td>
		    <td><?php echo $tpeg['id_karyawan']; ?></td>
            <td><?php echo $tpeg['nama']; ?></td>
		    <td><?php echo $tpeg['jk']; ?></td>
		    <td><?php echo $tpeg['absen']; ?></td>
		    <td><?php echo $tpeg['kerjasama']; ?></td>
		    <td><?php echo $tpeg['kemampuan']; ?></td>
            <td><?php // PROSES MENGUBAH NILAI TEGAS (CRISP) KE NILAI FUZZY
            $absensi = $tpeg['absen']; // ABSENSI
            if($absensi >= 2 && $absensi <= 5){
                if($absensi >= 4 && $absensi <=5){        
                    $absen_buruk = ($absensi-4)/(5-4);
                    $absen_sedang = (5-$absensi)/(5-4);
                    $absen_baik = 0;
                    echo " buruk = " . $absen_buruk;echo "<br>";
                    echo " sedang =  " . $absen_sedang;echo "<br>";
                    echo " baik = " . $absen_baik;
                }
                else if($absensi >= 2 && $absensi <= 3){
                    $absen_buruk = 0;
                    $absen_sedang=($absensi-2) / (3-2);
                    $absen_baik=(3-$absensi)/(3-2);
                    echo "buruk = " . $absen_buruk;echo "<br>";
                    echo " sedang =  " . $absen_sedang;echo "<br>";
                    echo " baik=  " . $absen_baik;
                    echo "<br>";
                }
                else if($absensi >= 3 && $absensi <= 4){
                    $absen_buruk = 0;
                    $absen_sedang = 1;
                    $absen_baik = 0;
                    echo "buruk = " . $absen_buruk;echo "<br>";
                    echo "sedang = " . $absen_sedang;echo "<br>";
                    echo "baik = " . $absen_baik;
                    echo "<br>";
                }
            }  
                else if($absensi <= 2 ){
                    $absen_buruk = 0;
                    $absen_sedang = 0;
                    $absen_baik = 1;
                    echo "buruk = " . $absen_buruk;echo "<br>";
                    echo "sedang = " . $absen_sedang;echo "<br>";
                    echo "baik = " . $absen_baik;
                    echo "<br>";
                }
                else if($absensi >= 5 ){ 
                    $absen_buruk = 1;
                    $absen_sedang = 0;
                    $absen_baik = 1;
                    echo "buruk = " . $absen_buruk;echo "<br>";
                    echo "sedang = " . $absen_sedang;echo "<br>";
                    echo "baik = " . $absen_baik;
                    echo "<br>";
                }  ?></td>
                <td><?php
            $kerjasama = $tpeg['kerjasama']; // KERJASAMA
                if($kerjasama >= 65 && $kerjasama <=95){
                        if($kerjasama >= 65 && $kerjasama <=75){        
                            $kerjasama_buruk = (75-$kerjasama)/(75-65);
                            $kerjasama_sedang = ($kerjasama-65)/(75-65);
                            $kerjasama_baik = 0;
                            echo "buruk =  " . $kerjasama_buruk;echo "<br>";
                            echo "sedang =  " . $kerjasama_sedang;echo "<br>";
                            echo "baik = " . $kerjasama_baik;
                            echo "<br>";
                        }
                        else if($kerjasama >= 85 && $kerjasama <=95){
                            $kerjasama_buruk = 0;
                            $kerjasama_sedang=(95-$kerjasama) / (95-85);
                            $kerjasama_baik=($kerjasama-85)/(95-85);
                            echo "buruk = " . $kerjasama_buruk;echo "<br>";
                            echo " sedang =  " . $kerjasama_sedang;echo "<br>";
                            echo " baik=  " . $kerjasama_baik;
                            echo "<br>";
                        }
                        else if($kerjasama >= 75 && $kerjasama <=85){
                            $kerjasama_buruk = 0;
                            $kerjasama_sedang = 1;
                            $kerjasama_baik = 0;
                            echo "buruk = " . $kerjasama_buruk;echo "<br>";
                            echo "sedang = " . $kerjasama_sedang;echo "<br>";
                            echo "baik = " . $kerjasama_baik;
                            echo "<br>";
                    }
                }
                else if($kerjasama >= 95 ){
                    $kerjasama_buruk = 0;
                    $kerjasama_sedang = 0;
                    $kerjasama_baik = 1;
                    echo "buruk = " . $kerjasama_buruk;echo "<br>";
                    echo "sedang = " . $kerjasama_sedang;echo "<br>";
                    echo "baik = " . $kerjasama_baik;
                    echo "<br>";
                }
                else if($kerjasama <= 65 ){
                    $kerjasama_buruk = 1;
                    $kerjasama_sedang = 0;
                    $kerjasama_baik = 0;
                    echo "buruk = " . $kerjasama_buruk;echo "<br>";
                    echo "sedang = " . $kerjasama_sedang;echo "<br>";
                    echo "baik = " . $kerjasama_baik;
                    echo "<br>";
                }    
                ?></td> 
            <td><?php               
            $kemampuan = $tpeg['kemampuan'];    // KEMAMPUAN
            if($kemampuan >= 65 && $kemampuan <=95){
                if($kemampuan >= 65 && $kemampuan <=75){        
                    $kemampuan_buruk = (75-$kemampuan)/(75-65);
                    $kemampuan_sedang = ($kemampuan-65)/(75-65);
                    $kemampuan_baik = 0;
                    echo " buruk =  " . $kemampuan_buruk;echo "<br>";
                    echo " sedang =  " . $kemampuan_sedang;echo "<br>";
                    echo " baik = " . $kemampuan_baik;
                    echo "<br>";
                }
                else if($kemampuan >= 85 && $kemampuan <=95){
                    $kemampuan_buruk = 0;
                    $kemampuan_sedang=(95-$kemampuan) / (95-85);
                    $kemampuan_baik=($kemampuan-85)/(95-85);
                    echo "buruk = " . $kemampuan_buruk;echo "<br>";
                    echo "sedang =  " . $kemampuan_sedang;echo "<br>";
                    echo " baik=  " . $kemampuan_baik;
                    echo "<br>";
                }
                else if($kemampuan >= 75 && $kemampuan <=85){
                    $kemampuan_buruk = 0;
                    $kemampuan_sedang = 1;
                    $kemampuan_baik = 0;
                    echo "buruk = " . $kemampuan_buruk;echo "<br>";
                    echo "sedang = " . $kemampuan_sedang;echo "<br>";
                    echo "baik = " . $kemampuan_baik;
                    echo "<br>";
            }
        }
        else if($kemampuan >= 95 ){
            $kemampuan_buruk = 0;
            $kemampuan_sedang = 0;
            $kemampuan_baik = 1;
            echo "buruk = " . $kemampuan_buruk;echo "<br>";
            echo "sedang = " . $kemampuan_sedang;echo "<br>";
            echo "baik = " . $kemampuan_baik;
            echo "<br>";
        }
        else if($kemampuan <= 65 ){
            $kemampuan_buruk = 1;
            $kemampuan_sedang = 0;
            $kemampuan_baik = 0;
            echo "buruk = " . $kemampuan_buruk;echo "<br>";
            echo "sedang = " . $kemampuan_sedang;echo "<br>";
            echo "baik = " . $kemampuan_baik;
            echo "<br>";
        }
          ?></td>
         <?php
            ?>
        </tbody>
        </table>
        </form>
        
<table class="table col-md-7 text-center  table-bordered table-striped table-hover" >
<div align="center">
		<a href="#">
		</a>
	</div>
  <caption>Proses Inferensi</caption>
  <h4>Mencari alfa predikat disetiap aturan</h4>
  <br>
  <thead>
    <tr>
	  <th>Aturan</th>
	  <th>Absensi</th>
      <th>Kerjasama</th>
	  <th>Kemampuan</th>
      <th>Keputusan</th>
	  <th>Hasil Absensi</th>
      <th>Hasil Kerjasama</th>
	  <th>Hasil Kemampuan</th>
      <th>Nilai Minimum</th>
    </tr>
   </thead>  
   <tbody>
    <?php 
            $totala = 0;
            $hasilplus = 0;
            $hasilaz = 0;
            $hasilarra = [];
            $hasilarrz = [];
			$query = $con->query("SELECT * FROM aturan"); // tampil menggunakan method query
			$nomor = 1;
			while($data = $query->fetch(PDO::FETCH_ASSOC)) { ?>
				<tr>
					<td align="'left'"><?php echo $nomor++; ?>.</td>
					<td><?php echo $data['aabsensi'];?></td>
					<td><?php echo $data['akerjasama']; ?></td>
					<td><?php echo $data['akemampuan']; ?></td>     
                    <td><?php echo $data['keputusan']; ?></td>
                    <td><?php   // MENCARI ALFA PREDIKAT DITIAP ATURAN
                        if($data['aabsensi'] == "Baik"){
                        $satu = $absen_baik;
                        echo $absen_baik; 
                    }
                        else if($data['aabsensi'] == "Sedang"){
                        $satu = $absen_sedang;
                        echo $absen_sedang;
                    }
                        else if($data['aabsensi'] == "Buruk"){
                        $satu = $absen_buruk;
                        echo $absen_buruk;
                    }
                     ?></td>
                    <td><?php 
                        if($data['akerjasama'] == "Baik"){
                        $dua = $kerjasama_baik;
                        echo $kerjasama_baik; 
                    }
                        else if($data['akerjasama'] == "Sedang"){
                        $dua = $kerjasama_sedang;
                        echo $kerjasama_sedang;
                    }
                        else if($data['akerjasama'] == "Buruk"){
                        $dua = $kerjasama_buruk;
                        echo $kerjasama_buruk;
                    }
                     ?></td>
                    <td><?php 
                        if($data['akemampuan'] == "Baik"){
                        $tiga = $kemampuan_baik;
                        echo $kemampuan_baik; 
                    }
                        else if($data['akemampuan'] == "Sedang"){
                        $tiga = $kemampuan_sedang;
                        echo $kemampuan_sedang;
                    }
                        else if($data['akemampuan'] == "Buruk"){
                        $tiga = $kemampuan_buruk;
                        echo $kemampuan_buruk;
                    }
                     ?></td>
                    <td> 
                        <?=min($satu, $dua, $tiga)?>
                        
                        <?php $hasil5 =array ( min($satu, $dua, $tiga));?>
                    </td>
                    
				</tr>
      </tbody>           
      <?php 
                    
                       /* foreach ($hasil5 as $key => $alpha){
                            echo "<br>";
                            echo "a :" . $alpha; 
                            echo " ";
                            echo "Z :" . $a[$key] = 80 + $alpha * (90-80);
                            echo "<br>";
                            $hasilZ=$alpha * $a[$key];
                            $hasilakhirZ=($hasilZ+$hasilZ);
                            echo "Hasil Alpha * Z = " . $hasilakhirZ;
                            $hasilalpha=$alpha+$alpha;
                            echo "<br>Hasil Penjumlahan Alpha = " . $hasilalpha;
                            
                            }
                            $akhir=$hasilakhirZ/$hasilalpha;
                            echo "<br>Hasil Akhir = " . $akhir;
                            echo "<br>===================================";
                */
                
                foreach ($hasil5 as $key => $alpha){
                if($alpha>0){ //Karena yang dihitung hanya alpha yg lebih dari 0
                    if ($data['keputusan']=="Dapat"){
                            echo " | ";
                            echo "a :" . $alpha; 
                            echo " ";
                            echo "Z : " . $a[$key] = 85 + ($alpha * (95-85));
                            // Cari total a
                            $totala = $totala + $alpha;
                            $hasila = $alpha;
                            $hasilz = $a[$key] = 85 + ($alpha * (95-85));
                            $hasilaz = $hasila*$hasilz;
                            $hasilplus = $hasilplus+$hasilaz;

                            // array_push($hasilarra, )

                    }  
                    else if($data['keputusan']=="Dipertimbangkan"){
                            echo " | ";
                            echo "a :" . $alpha; 
                            echo " ";
                            $z1[$key] = 75 - ($alpha * (85-75));
                            $z2[$key] = 65 + ($alpha * (75-65));
                            $a[$key]= ($z1[$key]+$z2[$key])/2;
                            echo "Z : " . $a[$key];
                            // Cari total a
                            $totala = $totala + $alpha;
                            $hasila = $alpha;
                            $hasilz = $a[$key];

                            $hasilaz = $hasila*$hasilz;
                            $hasilplus = $hasilplus+$hasilaz;
                    }
                    else if($data['keputusan']=="Tidak Dapat"){
                            echo " | ";
                            echo "a :" . $alpha; 
                            echo " ";
                            echo "Z : " . $a[$key] = 65 - ($alpha * (65-55));
                            // Cari total a
                            $totala = $totala + $alpha;
                            $hasila = $alpha;
                            $hasilz = $a[$key] = 65 - ($alpha * (65-55));

                            $hasilaz = $hasila*$hasilz;
                            $hasilplus = $hasilplus+$hasilaz;
                    }
                } 
                } 
            }
            $hasilakhir = $hasilplus/$totala;
            // echo 'Hasil AKhir:'.$hasilakhir;
                ?>
<table class="table col-md-7 text-center  table-bordered table-striped table-hover" >
<div align="center">
		<a href="#">
		</a>
	</div>
  <caption>Hasil Prediksi Karyawan</caption>
  <h5>Hasil Prediksi Karyawan CV Mandiri Bangun Berkah</h5>
  <br>
  <thead>
    <tr>
	  <th>No</th>
	  <th>Nama</th>
      <th>Jenis Kelamin</th>
	  <th>Absensi</th>
      <th>Kerjasama</th>
	  <th>Kemampuan</th>
	  <th>Hasil Prediksi</th>
      <th>Hasil Keputusan</th>
    </tr>
   </thead>  
   <tbody>
    <?php 
			$query = $con->query("SELECT * FROM karyawan WHERE id_karyawan='$id_karyawan' "); // tampil menggunakan method query
			$nomor = 1;
			while($data = $query->fetch(PDO::FETCH_ASSOC)) { ?>
				<tr>
					<td align="'left'"><?php echo $nomor++; ?>.</td>
					<td><?php echo $tpeg['nama']; ?></td>
		            <td><?php echo $tpeg['jk']; ?></td>
		            <td><?php echo $tpeg['absen']; ?></td>
		            <td><?php echo $tpeg['kerjasama']; ?></td>
		            <td><?php echo $tpeg['kemampuan']; ?></td>
                    <td><?=$hasilakhir?></td>
                    <td><?=($hasilakhir<=65 ? 'Tidak Dapat' : ($hasilakhir>=65 && $hasilakhir<=85 ? 'Dipertimbangkan' : 'Dapat'))?></td>
				</tr>
      </tbody>           
                <?php
            }
			 ?>   
    </table>
    <form action="simpan.php" method="POST">
        <input type="hidden" name="nama" value="<?=$tpeg['nama'];?>">
        <input type="hidden" name="j_kel" value="<?=$tpeg['jk'];?>">
        <input type="hidden" name="absensi" value="<?=$tpeg['absen'];?>">
        <input type="hidden" name="kerjasama" value="<?=$tpeg['kerjasama'];?>">
        <input type="hidden" name="kemampuan" value="<?=$tpeg['kemampuan'];?>">
        <input type="hidden" name="prediksi" value="<?=$hasilakhir?>">
        <input type="hidden" name="hasil_prediksi" value="<?=($hasilakhir<=65 ? 'Tidak Dapat' : ($hasilakhir>=65 && $hasilakhir<=85 ? 'Dipertimbangkan' : 'Dapat'))?>">
        <button class="submit" style="background-color: #039BE5"type="submit">Simpan</button>
    </form>
                <?php
            }
			 ?>

</center>
</div>
</body>
</html>
