<?php
include('../../config/db.php');

// --- Update Status Reservasi ---
if (isset($_GET['aksi']) && isset($_GET['id'])) {
    $id = $_GET['id'];
    $aksi = $_GET['aksi'];

    $stmt = $conn->prepare("UPDATE reservasi SET status=? WHERE id=?");
    $stmt->bind_param("si", $aksi, $id);
    $stmt->execute();
    header("Location: dashboard.php");
    exit;
}

// --- Ambil Semua Data Reservasi ---
$query = $conn->query("SELECT * FROM reservasi ORDER BY created_at DESC");
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin - Reservasi Aula</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #0f172a, #1e3a8a);
            color: #f8fafc;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #1e40af;
            padding: 20px;
            text-align: center;
            color: #fff;
            font-size: 1.6em;
            font-weight: 600;
            letter-spacing: 1px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
        }

        .container {
            width: 90%;
            max-width: 1100px;
            margin: 40px auto;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 16px;
            padding: 25px;
            box-shadow: 0 8px 20px rgba(0,0,0,0.3);
            backdrop-filter: blur(10px);
        }

        table {
            width: 100%;
            border-collapse: collapse;
            color: #e2e8f0;
        }

        th, td {
            padding: 12px 10px;
            border-bottom: 1px solid rgba(255,255,255,0.1);
            text-align: left;
        }

        th {
            background: rgba(30, 58, 138, 0.6);
            font-weight: 600;
        }

        tr:hover {
            background: rgba(255,255,255,0.05);
        }

        .status {
            font-weight: bold;
            padding: 6px 10px;
            border-radius: 12px;
            display: inline-block;
        }
        .Pending { background: #facc15; color: #1e293b; }
        .Disetujui { background: #22c55e; color: #fff; }
        .Ditolak { background: #ef4444; color: #fff; }

        .btn {
            text-decoration: none;
            padding: 6px 10px;
            border-radius: 8px;
            font-size: 0.9em;
            color: #fff;
            margin-right: 5px;
            transition: 0.3s;
        }

        .btn:hover { opacity: 0.8; }

        .approve { background: #2563eb; }
        .reject { background: #dc2626; }
        .pending { background: #f59e0b; }

        footer {
            text-align: center;
            color: #93c5fd;
            margin: 20px 0;
            font-size: 0.9em;
        }
    </style>
</head>
<body>
    <header>📊 Dashboard Admin - Reservasi Aula</header>

    <div class="container">
        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Tanggal</th>
                    <th>Waktu</th>
                    <th>Keterangan</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                while ($data = $query->fetch_assoc()) :
                ?>
                <tr>
                    <td><?= $no++; ?></td>
                    <td><?= htmlspecialchars($data['nama']); ?></td>
                    <td><?= htmlspecialchars($data['email']); ?></td>
                    <td><?= date('d M Y', strtotime($data['tanggal'])); ?></td>
                    <td><?= $data['waktu_mulai'] . " - " . $data['waktu_selesai']; ?></td>
                    <td><?= nl2br(htmlspecialchars($data['keterangan'])); ?></td>
                    <td><span class="status <?= $data['status']; ?>"><?= $data['status']; ?></span></td>
                    <td>
                        <a href="?aksi=Disetujui&id=<?= $data['id']; ?>" class="btn approve">Setujui</a>
                        <a href="?aksi=Ditolak&id=<?= $data['id']; ?>" class="btn reject">Tolak</a>
                        <a href="?aksi=Pending&id=<?= $data['id']; ?>" class="btn pending">Pending</a>
                    </td>
                </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>

    <footer>© <?= date('Y'); ?> Sistem Reservasi Aula | Admin Panel</footer>
</body>
</html>
