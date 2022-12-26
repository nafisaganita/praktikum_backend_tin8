<?php
$namaserver = "sql304.byethost15.com";
$namauser  = "b5_32939299";
$password = "ratubalqis123";
$namadb = "b5_32939299_cafe";

$koneksi = new mysqli ($namaserver, $namauser, $password, $namadb);

$nomorcafe = $_GET["no"];
$namacafe = $_GET["namacafe"];
$alamat = $_GET["alamat"];
$instagram = $_GET["instagram"];

$perintah = "INSERT INTO CafeBandung VALUES ('$nomorcafe','$namacafe', '$alamat', '$instagram')";

if ($koneksi->query($perintah) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $perintah . "<br>" . $koneksi->error;
}
$koneksi->close();
  echo"<br>";
  echo "<a href='konekDBCafe.php'>kembali</a>";
?>
