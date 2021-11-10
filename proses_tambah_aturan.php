<?php 
session_start();
if(!isset($_SESSION['iduser'])) {
	echo "<script>window.location='index.php';</script>";
}
include "+koneksi.php";

$aturan_absensi = $_POST['aabsensi'];
$aturan_kerjasama = $_POST['akerjasama'];
$aturan_kemampuan = $_POST['akemampuan'];
$hasil_keputusan = $_POST['keputusan'];

$query = $con->prepare("INSERT INTO aturan ( aabsensi, akerjasama, akemampuan, keputusan) 
                        VALUES (:aabsensi, :akerjasama, :akemampuan, :keputusan)");

$query->bindparam(':aabsensi', $aturan_absensi); // menggunakan bindparam
$query->bindparam(':akerjasama', $aturan_kerjasama); 
$query->bindparam(':akemampuan', $aturan_kemampuan);
$query->bindparam(':keputusan', $hasil_keputusan);

if($query->execute()) {
    echo "<script>alert('Data berhasil ditambahkan'); window.location='aturan.php';</script>";
} else {
    echo "<script>alert('Data gagal ditambahkan');</script>";
}

?>