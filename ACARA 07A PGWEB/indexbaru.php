<?php

include 'vars.php';

// Perintah dasar
echo "Hallo semuanya!";
echo "<br><br>";

// Komentar
// Ini adalah komentar yg akan diabaikan
/*
Dan ini adalah
satu blok komentar
*/
echo "Komentar tidak akan ditampilkan.";
echo "<br><br>";

// Variabel
$kata = "Ini Tes";
$angka = 88;
echo "Isi variabel \$kata: " . $kata . "<br>";
echo "Isi variabel \$angka: " . $angka . "<br>";
echo "<br><br>";

// String
$teks = "Hallo semuanya!";
echo $teks;
echo "<br><br>";

// Operator penggabungan string
$teks  = "Hallo semuanya!";
$teks2 = "12345";
echo $teks . " " . $teks2;
echo "<br><br>";

// Mengetahui panjang string
echo strlen("Hallo semuanya!");
echo "<br><br>";

// Mencari karakter di dalam string
echo strpos("Hallo semuanya!", "semua");
echo "<br><br>";

// Array numerik
$nama[0] = "Joko";
$nama[1] = "Parto";
$nama[2] = "Jono";
echo $nama[1] . " dan " . $nama[2] . " adalah tetangga Pak " . $nama[0];
echo "<br><br>";

// Array asosiatif
// $umur = array("Joko"=>33, "Parto"=>35, "Jono"=>29);
// Untuk hasil yang sama dengan contoh diatas bisa juga dilakukan dengan cara:
$umur['Joko'] = "33";
$umur['Parto'] = "35";
$umur['Jono'] = "29";
echo "Umur Pak Joko adalah " . $umur['Joko'] . " tahun.";
echo "<br><br>";


// Array multidimensi
$keluarga = array(
    "Joko" => array(
        "Jojon",
        "Joni",
        "Joana"
    ),
    "Parto" => array(
        "Parmi"
    ),
    "Warto" => array(
        "Warman",
        "Warno",
        "Warmin"
    )
);

// Menampilkan salah satu isi dari array multidimensi
echo $keluarga["Joko"][2] . " adalah anggota keluarga Joko";
echo "<br><br>";


// Menggunakan if..else
$d = date("D");
if ($d == "Sat") {
    echo "Selamat berakhir pekan!";
} else {
    echo "Semoga hari anda menyenangkan!";
}
echo "<br>";

$d = date("D");
if ($d == "Sat") {
    echo "Hallo!<br />";
    echo "Selamat berakhir pekan! ";
    echo "Sampai jumpa di hari Senin!";
}
echo "<br><br>";

// Menggunakan elseif
$d = date("D");
if ($d == "Fri") {
    echo "Selamat berakhri pekan!";
} elseif ($d == "Sun") {
    echo "Semoga hari Minggu anda menyenangkan!";
} else {
    echo "Semoga hari anda menyenangkan!";
}
echo "<br><br>";

// Menggunakan switch
$x = 2;
switch ($x) {
    case 1:
        echo "Angka 1";
        break;
    case 2:
        echo "Angka 2";
        break;
    case 3:
        echo "Angka 3";
        break;
    default:
        echo "Bukan angka antara 1 sampai 3";
}
echo "<br><br>";

// Menggunakan while
$i = 1;
while ($i <= 5) {
    echo "Angka " . $i . "<br />";
    $i++;
}
echo "<br><br>";

// Menggunakan do...while
$i = 0;
do {
    $i++;
    echo "Angka " . $i . "<br />";
} while ($i < 5);
echo "<br><br>";

// Menggunakan for
for ($i = 1; $i <= 5; $i++) {
    echo "Hello World!<br />";
}
echo "<br><br>";

// Menggunakan foreach
$arr = array("satu", "dua", "tiga");
foreach ($arr as $nilai) {
    echo "Nilai: " . $nilai . "<br />";
}
echo "<br><br>";

// Menggunakan built-in function (include)
echo "Sebuah $buah $warna"; // Sebuah
include 'vars.php';
echo "<br>Sebuah $buah $warna"; // Sebuah apel hijau
echo "<br><br>";

// Membuat dan menggunakan function
function tulisNama()
{
    echo "Merapi";
}
tulisNama();
echo "<br><br>";

// Passing Variabel via URL
echo "<a href='vars_get.php?nama=Merapi&alamat=Sleman'>Gunung</a>";
echo "<p>Klik link di atas, untuk melihat hasilnya.</p>";
echo "<br><br>";

// Form Handling
echo <<<HTML
<form action="welcome.php" method="post">
    Nama: <input type="text" name="nama" />
    Umur: <input type="text" name="umur" />
    <input type="submit" value="Kirim"/>
</form>
HTML;

?>