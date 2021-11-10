<?php
    $koneksi = mysqli_connect('localhost', 'root', '', 'fuzzy');

    mysqli_query($koneksi, "INSERT INTO hasil VALUES ('', '$_POST[nama]',
    '$_POST[j_kel]','$_POST[absensi]','$_POST[kerjasama]','$_POST[kemampuan]','$_POST[prediksi]','$_POST[hasil_prediksi]')");

    header('location:cetak.php');
?>