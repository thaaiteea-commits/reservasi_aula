<?php
$page = isset($_GET['page']) ? $_GET['page'] : 'home';
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservasi Aula Estetik</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Reservasi Aula Estetik</h1>
        <nav>
            <ul>
                <li><a href="?page=home">Home</a></li>
                <li><a href="?page=gallery">Gallery</a></li>
                <li><a href="?page=reservasi">Reservasi</a></li>
                <li><a href="?page=kontak">Kontak</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <?php
        $file = "pages/$page.php";
        if (file_exists($file)) {
            include($file);
        } else {
            echo "<p>Halaman tidak ditemukan.</p>";
        }
        ?>
    </main>

    <footer>
        <p>&copy; 2025 Reservasi Aula Estetik. All rights reserved.</p>
    </footer>
</body>
</html>
