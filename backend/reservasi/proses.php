<?php
include '../../auth.php';
require_once '../../config/db.php';

if (isset($_GET['id']) && isset($_GET['aksi'])) {
    $id = $_GET['id'];
    $status = $_GET['aksi'] == 'setujui' ? 'Disetujui' : 'Ditolak';

    $stmt = $pdo->prepare("UPDATE reservasi SET status = ? WHERE id = ?");
    $stmt->execute([$status, $id]);

    header("Location: list.php");
}
