<?php 
session_start();
if(!isset($_SESSION['iduser'])) {
	echo "<script>window.location='index.php';</script>";
}
include "+koneksi.php";

$id = $_GET['id_karyawan'];
$param = array(':id_karyawan' => $id);

$query = $con->prepare("DELETE FROM karyawan WHERE id_karyawan = :id_karyawan");

if($query->execute($param)) {
    echo "<script>alert('Data berhasil dihapus'); window.location='karyawan.php';</script>";
} else {
    echo "<script>alert('Data gagal dihapus'); window.location='karyawan.php';</script>";
}


?>