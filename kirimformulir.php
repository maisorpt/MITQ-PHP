<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mysql</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  <body>

<?php
include 'koneksi.php';

$nama = $_POST['nama'];
$kota_asal = $_POST['kota_asal'];
$alamat = $_POST['alamat'];
$kota_lahir = $_POST['kota_lahir'];
$tanggal = $_POST['tanggal'];
$handphone = $_POST['handphone'];
$motivasi = $_POST['motivasi'];


$sql="INSERT INTO `santri_baru` (`id`, `nama`, `kota_asal`, `alamat`, `kota_lahir`, `tanggal`, `handphone`, `motivasi`) VALUES (NULL, '$nama', '$kota_asal', '$alamat', '$kota_lahir', '$tanggal', '$handphone', '$motivasi')";

if ($conn->query($sql) === TRUE) {
    echo "<span class=\"btn btn-success\">New Record created successfully </span>";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }

$conn->close();
?>

</body>
</html>