<section>
    <h2>Formulir Reservasi</h2>
    <p>Isi data berikut untuk melakukan pemesanan aula.</p>

    <form action="#" method="post">
        <input type="text" name="nama" placeholder="Nama Lengkap" required>
        <input type="email" name="email" placeholder="Email" required>
        <input type="tel" name="telepon" placeholder="No. Telepon" required>
        <select name="tipe_aula" required>
            <option value="">Pilih Tipe Aula</option>
            <option value="vip">Aula VIP</option>
            <option value="reguler">Aula Reguler</option>
            <option value="seminar">Aula Seminar</option>
        </select>
        <input type="date" name="tanggal" required>
        <textarea name="pesan" rows="4" placeholder="Catatan tambahan..."></textarea>
        <button type="submit">Kirim Reservasi</button>
    </form>
</section>
