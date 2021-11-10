<?php 
session_start();
if(!isset($_SESSION['iduser'])) {
	echo "<script>window.location='index.php';</script>";
}
include "+koneksi.php";

$params = [
    "id_karyawan"    => $_POST['id_karyawan'],
    "nama"           => $_POST['nama'],
    "jk"             => $_POST['jk'],
    "absen"       => $_POST['absen'],
    "kerjasama"     => $_POST['kerjasama'],
    "kemampuan"     => $_POST['kemampuan'],
  ];

$sql = "UPDATE karyawan SET
            nama       = :nama,
            jk         = :jk,
            absen   = :absen,
            kerjasama = :kerjasama,
            kemampuan = :kemampuan
        WHERE id_karyawan = :id_karyawan";
$query = $con->prepare($sql);
if($query->execute($params)) { // prepare > execute menggunakan parameter array
    echo "<script>alert('Data berhasil diedit'); window.location='karyawan.php';</script>";
} else {
    echo "<script>alert('Data gagal diedit');</script>";
}


?>