<?php 
session_start();
if(!isset($_SESSION['iduser'])) {
	echo "<script>window.location='index.php';</script>";
}
include "+koneksi.php";

$params = [
    "id"         => $_POST['id'],
    "nama"       => $_POST['nama'],
    "jk"       => $_POST['jk'],
    "Email"      => $_POST['Email'],
    "username"   => $_POST['username'],
    "password"   => md5($_POST['password'])
  ];

$sql = "UPDATE user SET
            nama = :nama,
            jk = :jk,
            Email = :Email,
            username = :username,
            password = :password
        WHERE id = :id";
$query = $con->prepare($sql);
if($query->execute($params)) { // prepare > execute menggunakan parameter array
    echo "<script>alert('Data berhasil diedit'); window.location='admin.php';</script>";
} else {
    echo "<script>alert('Data gagal diedit');</script>";
}


?>