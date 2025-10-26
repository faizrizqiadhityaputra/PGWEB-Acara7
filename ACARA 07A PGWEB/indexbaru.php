<html>
<body>

<?php
echo "Hallo semuanya!";
?>

<hr>

<?php
//Ini adalah komentar yg akan diabaikan
/*
Dan ini adalah
satu blok komentar
*/
?>

<hr>

<?php
$kata = "Ini Tes";
$angka = 88;
?>

<hr>

<?php
$teks = "Hallo semuanya!";
echo $teks;
?>

<hr>

<?php
$teks = "Hallo semuanya!";
$teks2= "12345";
echo $teks . " " .$teks2;
?>

<hr>

<?php
echo strlen("Hallo semuanya!");
?>

<hr>

<?php
echo strpos("Hallo semuanya!","semua");
?>

<hr>

<?php
$nama[0] = "Joko";
$nama[1] = "Parto";
$nama[2] = "Jono";
echo $nama[1]." dan ".$nama[2]." adalah tetangga Pak ".$nama[0];
?>

<hr>

<?php
$umur['Joko'] = "33";
$umur['Parto'] = "35";
$umur['Jono'] = "29";
?>

<hr>

<?php
$keluarga = array
(
    "Joko"=>array("Jojon","Joni","Joana"),
    "Parto"=>array("Parmi"),
    "Warto"=>array("Warman","Warno","Warmin")
);
echo $keluarga["Joko"][2]." adalah anggota keluarga Joko";
?>

<hr>

<?php
$d=date("D");
if ($d=="Sat")
    echo "Selamat berakhir pekan!";
else
    echo "Semoga hari anda menyenangkan!";
?>

<hr>

<?php
$d=date("D");
if ($d=="Sat")
{
    echo "Hallo!<br />";
    echo "Selamat berakhir pekan! ";
    echo "Sampai jumpa di hari Senin!";
}
?>

<hr>

<?php
$d=date("D");
if ($d=="Sat")
    echo "Selamat berakhri pekan!";
elseif ($d=="Sun")
    echo "Semoga hari Minggu anda menyenangkan!";
else
    echo "Semoga hari anda menyenangkan!";
?>

<hr>

<?php
$x = 2;
switch ($x)
{
case 1: echo "Angka 1"; break;
case 2: echo "Angka 2"; break;
case 3: echo "Angka 3"; break;
default:echo "Bukan angka antara 1 sampai 3";
}
?>

<hr>

<?php
$i=1;
while($i<=5)
{ 
    echo "Angka " . $i . "<br />";
    $i++;
}
?>

<hr>

<?php
$i=0;
do
{
    $i++;
    echo "Angka " . $i . "<br />";
}
while ($i<5);
?>

<hr>

<?php
for ($i=1; $i<=5; $i++)
{
    echo "Hello World!<br />";
}
?>

<hr>

<?php
$arr=array("satu", "dua", "tiga");
foreach ($arr as $nilai)
{
    echo "Nilai: " . $nilai . "<br />";
}
?>

<hr>

<?php
function tulisNama()
{
    echo "Merapi";
}
tulisNama();
?>

<hr>

<?php
echo "<a href='?nama=Merapi&alamat=Sleman'>Gunung</a><br>";

if (isset($_GET['nama']) && isset($_GET['alamat'])) {
    $nama = $_GET['nama'];
    $alamat = $_GET['alamat'];
    echo "Nama gunung adalah Gunung $nama beralamat di $alamat";
}
?>

<hr>

<form action="" method="post">
Nama: <input type="text" name="nama" />
Umur: <input type="text" name="umur" />
<input type="submit" value="Kirim"/>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "Selamat datang " . $_POST["nama"] . ".<br/>";
    echo "Umur anda " . $_POST["umur"] . " tahun.";
}
?>

</body>
</html>
