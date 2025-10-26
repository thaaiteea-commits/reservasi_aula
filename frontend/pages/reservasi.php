<section class="content">
    <h2>Formulir Reservasi</h2>
    <form action="" method="post" class="form">
        <label>Nama</label>
        <input type="text" name="nama" required>
        <label>Email</label>
        <input type="email" name="email" required>
        <label>Jenis Desain</label>
        <select name="kategori">
            <option>Ruang Tamu</option>
            <option>Kamar Tidur</option>
            <option>Dapur</option>
        </select>
        <label>Pesan</label>
        <textarea name="pesan" rows="4"></textarea>
        <button type="submit" class="btn">Kirim Reservasi</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nama = htmlspecialchars($_POST['nama']);
        $email = htmlspecialchars($_POST['email']);
        $kategori = htmlspecialchars($_POST['kategori']);
        $pesan = htmlspecialchars($_POST['pesan']);

        echo "<div class='alert'>Terima kasih, <b>$nama</b>! Reservasi Anda untuk desain <b>$kategori</b> telah diterima.</div>";
    }
    ?>
</section>
