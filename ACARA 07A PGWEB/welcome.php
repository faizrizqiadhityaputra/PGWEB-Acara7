welcome.php
<?php

if (isset($_POST["nama"]) && isset($_POST["umur"])) {
    echo "Selamat datang ". $_POST["nama"] .".<br/>";
    echo "Umur anda ". $_POST["umur"] ." tahun.";
}

?>