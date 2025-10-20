<?php include 'includes/header.php'; ?>
<h2>Formulir Reservasi</h2>
<form action="proses_reservasi.php" method="POST">
    <div class="mb-3"><label>Nama</label><input name="nama" class="form-control" required></div>
    <div class="mb-3"><label>Email</label><input name="email" class="form-control" type="email" required></div>
    <div class="mb-3"><label>Tanggal</label><input name="tanggal" class="form-control" type="date" required></div>
    <div class="mb-3"><label>Waktu Mulai</label><input name="waktu_mulai" class="form-control" type="time" required></div>
    <div class="mb-3"><label>Waktu Selesai</label><input name="waktu_selesai" class="form-control" type="time" required></div>
    <div class="mb-3"><label>Keterangan</label><textarea name="keterangan" class="form-control"></textarea></div>
    <button class="btn btn-primary">Kirim</button>
</form>
<?php include 'includes/footer.php'; ?>
