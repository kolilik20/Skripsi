<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cetak Hasil Prediksi</title>
</head>

<body>
  <table border="1" style="border-collapse: collapse;" class="table col-md-7 text-center  table-bordered table-striped table-hover">
    <caption><h4>Hasil Prediksi Karyawan CV Mandiri Bangun Berkah</h4></caption>

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
            $koneksi = mysqli_connect('localhost', 'root', '', 'fuzzy');
            $no = 1;
            $query = mysqli_query($koneksi, "SELECT * FROM hasil");
            while($data = mysqli_fetch_array($query)){
          ?>
      <tr>
        <td align="'left'"><?php echo $no++; ?>.</td>
        <td><?php echo $data['nama']; ?></td>
        <td><?php echo $data['j_kel']; ?></td>
        <td><?php echo $data['absensi']; ?></td>
        <td><?php echo $data['kerjasama']; ?></td>
        <td><?php echo $data['kemampuan']; ?></td>
        <td><?php echo $data['prediksi']; ?></td>
        <td><?php echo $data['hasil_prediksi']; ?></td>
      </tr>
      <?php } ?>
    </tbody>
  </table>
  <script type="text/javascript">
    window.print();
  </script>
</body>

</html>