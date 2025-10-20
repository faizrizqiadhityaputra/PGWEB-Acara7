<?php

$kecamatan_sleman = [
    "Berbah",
    "Cangkringan",
    "Depok",
    "Gamping",
    "Godean",
    "Kalasan",
    "Minggir",
    "Mlati",
    "Moyudan",
    "Ngaglik",
    "Ngemplak",
    "Pakem",
    "Prambanan",
    "Seyegan",
    "Sleman",
    "Tempel",
    "Turi"
];

echo "<table border='1'>";
echo "<tr><th>Nomor</th><th>Kecamatan</th></tr>";

foreach ($kecamatan_sleman as $nomor => $nama_kecamatan) {
    echo "<tr>";
    echo "<td>" . ($nomor + 1) . "</td>";
    echo "<td>" . $nama_kecamatan . "</td>";
    echo "</tr>";
}

echo "</table>";

?>