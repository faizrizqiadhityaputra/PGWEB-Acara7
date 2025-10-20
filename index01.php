<!DOCTYPE html>
<html>
<head>
    <title>Latihan PHP Dasar</title>
</head>
<body>

<?php
// Contoh penggunaan include
echo "Sebuah $buah $warna<br>"; // variabel belum dikenali

include 'vars.php'; // memanggil file vars.php

echo "Sebuah $buah $warna<br>"; // variabel sudah dikenali
?>

<hr>

<?php
// Contoh fungsi
function tulisNama()
{
    echo "Merapi";
}
echo "Gunung: ";
tulisNama();
?>

<hr>

<?php
// Link dengan parameter GET
echo '<a href="vars.php?nama=Merapi&alamat=Sleman">Gunung</a><br>';
?>

<hr>

<!-- Form dengan metode POST -->
<form action="welcome.php" method="post">
    Nama: <input type="text" name="nama" />
    Umur: <input type="text" name="umur" />
    <input type="submit" value="Kirim" />
</form>

</body>
</html>
