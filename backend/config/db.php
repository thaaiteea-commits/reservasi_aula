<?php
$host = "localhost";
$db = "aula_db";         // ganti sesuai nama database kamu
$user = "root";          // username database
$pass = "";              // password database

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Koneksi gagal: " . $e->getMessage());
}
?>
