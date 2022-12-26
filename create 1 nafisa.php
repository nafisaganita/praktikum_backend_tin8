<?php
$namaserver = "sql304.byethost15.com";
$namauser  = "b5_32939299";
$password = "ratubalqis123";
$namadb = "b5_32939299_cafe";

$koneksi = new mysqli ($namaserver, $namauser, $password, $namadb);
?>

<html>
    <head>
        <title>Menambah Data Restoran</title>
    </head>
    <body>
        <form action="create.php" method="GET">
            NamaCafe<br>
            <input type="text" name="namacafe" value=" "><br>
            Alamat<br>
            <input type="text" name="alamat" value=" "><br>
            Instagram<br>
            <input type="text" name="instagram" value=" "><br>
            <input type="hidden" name="no" value=""><br>
            <input type ="submit" value="submit">
        </form>
    </body>
</html>
