<?php 
session_start();
if(!isset($_SESSION['iduser'])) {
	echo "<script>window.location='index.php';</script>";
}
include "+koneksi.php";

$params = [
    "id"             => $_POST['id'],
    "aabsensi"       => $_POST['aabsensi'],
    "akerjasama"     => $_POST['akerjasama'],
    "akemampuan"     => $_POST['akemampuan'],
    "keputusan"      => $_POST['keputusan']
  ];

$sql = "UPDATE aturan SET
            aabsensi   = :aabsensi,
            akerjasama = :akerjasama,
            akemampuan = :akemampuan,
            keputusan  = :keputusan
        WHERE id = :id";
$query = $con->prepare($sql);
if($query->execute($params)) { // prepare > execute menggunakan parameter array
    echo "<script>alert('Data berhasil diedit'); window.location='aturan.php';</script>";
} else {
    echo "<script>alert('Data gagal diedit');</script>";
}


?>