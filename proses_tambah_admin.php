<?php 
session_start();
if(!isset($_SESSION['iduser'])) {
	echo "<script>window.location='index.php';</script>";
}
include "+koneksi.php";

$name = $_POST['nama'];
$jenis_kelamin = $_POST['jk'];
$input_email = $_POST['email'];
$input_username = $_POST['username'];
$input_password = md5($_POST['password']);

$query = $con->prepare("INSERT INTO user (nama, jk, email, username, password) 
                        VALUES (:nama, :jk, :email, :username, :password)");

$query->bindparam(':nama', $name); // menggunakan bindparam
$query->bindparam(':jk', $jenis_kelamin);
$query->bindparam(':email', $input_email);
$query->bindparam(':username', $input_username);
$query->bindparam(':password', $input_password);

if($query->execute()) {
    echo "<script>alert('Data berhasil ditambahkan'); window.location='admin.php';</script>";
} else {
    echo "<script>alert('Data gagal ditambahkan');</script>";
}

?>