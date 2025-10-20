<!DOCTYPE html>
<html>
<head>
    <title>Latihan PHP Dasar</title>
</head>
<body>

<?php
// Menampilkan teks
echo "<h3>Menampilkan Teks dan Variabel</h3>";
echo "Hallo semuanya!<br>";

// Variabel dasar
$kata = "Ini Tes";
$angka = 88;

// Menampilkan variabel
$teks = "Hallo semuanya!";
echo $teks . "<br>";

// Menggabungkan dua variabel teks
$teks2 = "12345";
echo $teks . " " . $teks2 . "<br>";

// Fungsi strlen (menghitung panjang string)
echo "Panjang teks: " . strlen("Hallo semuanya!") . "<br>";

// Fungsi strpos (mencari posisi kata dalam string)
echo "Posisi kata 'semua': " . strpos("Hallo semuanya!", "semua") . "<br>";

// Array numerik
echo "<h3>Array Numerik</h3>";
$nama[0] = "Joko";
$nama[1] = "Parto";
$nama[2] = "Jono";
echo $nama[1] . " dan " . $nama[2] . " adalah tetangga Pak " . $nama[0] . "<br>";

// Array asosiatif
echo "<h3>Array Asosiatif</h3>";
$umur = array(
    "Joko" => 33,
    "Parto" => 35,
    "Jono" => 29
);
foreach ($umur as $orang => $usia) {
    echo "$orang berumur $usia tahun<br>";
}

// Array multidimensi
echo "<h3>Array Multidimensi</h3>";
$keluarga = array(
    "Joko" => array("Jojon", "Joni", "Joana"),
    "Parto" => array("Parmi", "Parno"),
    "Warto" => array("Warman", "Warno", "Warmin")
);
echo "Anak pertama Pak Joko adalah " . $keluarga["Joko"][0] . "<br>";
echo "Anak pertama Pak Warto adalah " . $keluarga["Warto"][0] . "<br>";

// Percabangan IF
echo "<h3>Percabangan IF</h3>";
$d = date("D");
if ($d == "Sat")
    echo "Selamat berakhir pekan!<br>";
else
    echo "Semoga hari anda menyenangkan!<br>";

// IF dengan blok
echo "<h3>IF dengan Blok</h3>";
if ($d == "Sat") {
    echo "Hallo!<br />";
    echo "Selamat berakhir pekan! ";
    echo "Sampai jumpa di hari Senin!<br>";
}

// IF-ELSEIF-ELSE
echo "<h3>IF-ELSEIF-ELSE</h3>";
if ($d == "Sat")
    echo "Selamat berakhir pekan!<br>";
elseif ($d == "Sun")
    echo "Semoga hari Minggu anda menyenangkan!<br>";
else
    echo "Semoga hari anda menyenangkan!<br>";

// Switch-case
echo "<h3>Switch Case</h3>";
$x = 2;
switch ($x) {
    case 1:
        echo "Angka 1<br>";
        break;
    case 2:
        echo "Angka 2<br>";
        break;
    case 3:
        echo "Angka 3<br>";
        break;
    default:
        echo "Bukan angka antara 1 sampai 3<br>";
}

// Perulangan While
echo "<h3>Perulangan While</h3>";
$i = 1;
while ($i <= 5) {
    echo "Angka " . $i . "<br />";
    $i++;
}

// Perulangan Do While
echo "<h3>Perulangan Do While</h3>";
$i = 0;
do {
    $i++;
    echo "Angka " . $i . "<br />";
} while ($i < 5);

// Perulangan For
echo "<h3>Perulangan For</h3>";
for ($i = 1; $i <= 5; $i++) {
    echo "Hello World!<br />";
}

// Perulangan Foreach
echo "<h3>Perulangan Foreach</h3>";
$arr = array("satu", "dua", "tiga");
foreach ($arr as $nilai) {
    echo "Nilai: " . $nilai . "<br />";
}
?>

</body>
</html>
