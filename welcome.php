<!DOCTYPE html>
<html>
<head>
    <title>Data Pengunjung</title>
</head>
<body>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST["nama"];
    $umur = $_POST["umur"];
    echo "Selamat datang $nama.<br>";
    echo "Umur anda $umur tahun.";
}
?>

</body>
</html>
