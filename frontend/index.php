<?php
$page = isset($_GET['page']) ? $_GET['page'] : 'home';
$file = "pages/" . $page . ".php";
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AULA Interior & Architecture</title>
    <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">
</head>
<body>

    <!-- ===== HEADER ===== -->
    <header>
        <div class="logo">AULA</div>
        <nav>
            <ul>
                <li><a href="?page=home" class="<?= $page == 'home' ? 'active' : '' ?>">Home</a></li>
                <li><a href="?page=kategori" class="<?= $page == 'kategori' ? 'active' : '' ?>">Kategori</a></li>
                <li><a href="?page=reservasi" class="<?= $page == 'reservasi' ? 'active' : '' ?>">Reservasi</a></li>
                <li><a href="?page=kontak" class="<?= $page == 'kontak' ? 'active' : '' ?>">Kontak</a></li>
            </ul>
        </nav>
    </header>

    <!-- ===== KONTEN DINAMIS ===== -->
    <main>
        <?php
        if (file_exists($file)) {
            include $file;
        } else {
            echo "<div class='not-found'>Halaman tidak ditemukan.</div>";
        }
        ?>
    </main>

    <!-- ===== FOOTER ===== -->
    <footer>
        <p>&copy; <?php echo date('Y'); ?> AULA Interior Studio. All rights reserved.</p>
    </footer>

</body>
</html>
