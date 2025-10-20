<?php
require_once '../config/db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $stmt = $pdo->prepare("INSERT INTO reservasi (nama, email, tanggal, waktu_mulai, waktu_selesai, keterangan)
                           VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->execute([
        $_POST['nama'], $_POST['email'], $_POST['tanggal'],
        $_POST['waktu_mulai'], $_POST['waktu_selesai'], $_POST['keterangan']
    ]);
    echo "<script>alert('Reservasi berhasil!'); window.location='index.php';</script>";
}
?>
