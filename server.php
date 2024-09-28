<?php
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $nama = htmlspecialchars($_POST['nama']);
    if ($nama == "antartika2") {
        header("https://www.google.com");
    } else {
        echo "nama salah!".PHP_EOL;
    }
}
?>