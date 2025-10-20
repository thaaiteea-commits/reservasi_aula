<?php
include '../includes/header.php';
require_once '../../config/db.php';

$stmt = $pdo->query("SELECT * FROM reservasi ORDER BY created_at DESC");
$data = $stmt->fetchAll();
?>

<h3>Data Reservasi</h3>
<table class="table table-bordered">
    <thead><tr>
        <th>Nama</th><th>Email</th><th>Tanggal</th><th>Waktu</th><th>Status</th><th>Aksi</th>
    </tr></thead>
    <tbody>
        <?php foreach ($data as $r): ?>
        <tr>
            <td><?= htmlspecialchars($r['nama']) ?></td>
            <td><?= htmlspecialchars($r['email']) ?></td>
            <td><?= $r['tanggal'] ?></td>
            <td><?= $r['waktu_mulai'] ?> - <?= $r['waktu_selesai'] ?></td>
            <td><?= $r['status'] ?></td>
            <td>
                <?php if ($r['status'] === 'Pending'): ?>
                    <a href="proses.php?id=<?= $r['id'] ?>&aksi=setujui" class="btn btn-success btn-sm">Setujui</a>
                    <a href="proses.php?id=<?= $r['id'] ?>&aksi=tolak" class="btn btn-danger btn-sm">Tolak</a>
                <?php else: ?>
                    <span class="text-muted">Selesai</span>
                <?php endif; ?>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<?php include '../includes/footer.php'; ?>
