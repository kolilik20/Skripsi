<?php 
session_start();
if(!isset($_SESSION['iduser'])) {
	echo "<script>window.location='index.php';</script>";
}
include "+koneksi.php";

$nama_karyawan = $_POST['nama'];
$input_jk = $_POST['jk'];
$nilai_absen = $_POST['absen'];
$nilai_kerjasama = $_POST['kerjasama'];
$nilai_kemampuan = $_POST['kemampuan'];

$query = $con->prepare("INSERT INTO karyawan (nama, jk, absen, kerjasama, kemampuan) 
                        VALUES (:nama, :jk, :absen, :kerjasama, :kemampuan)");

$query->bindparam(':nama', $nama_karyawan); // menggunakan bindparam
$query->bindparam(':jk', $input_jk);
$query->bindparam(':absen', $nilai_absen);
$query->bindparam(':kerjasama', $nilai_kerjasama);
$query->bindparam(':kemampuan', $nilai_kemampuan);

if($query->execute()) {
    echo "<script>alert('Data berhasil ditambahkan'); window.location='karyawan.php';</script>";
} else {
    echo "<script>alert('Data gagal ditambahkan');</script>";
}

?>