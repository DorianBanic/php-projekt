<?php
$menu = isset($_GET['menu']) ? intval($_GET['menu']) : 1;
include 'db.php';
?>

<!DOCTYPE html>
<html lang="hr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="GNK Dinamo Zagreb - Službena stranica">
    <meta name="keywords" content="Dinamo Zagreb, nogomet, GNK Dinamo">
    <meta name="author" content="Dorian Banić">
    <title>GNK Dinamo Zagreb</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <div class="banner">
            <img src="slike/slika1.jpg">
        </div>
        <nav>
            <a href="index.php?menu=1">Početna</a>
            <a href="index.php?menu=2">Vijesti</a>
            <a href="index.php?menu=3">Kontakt</a>
            <a href="index.php?menu=4">Galerija</a>
            <a href="index.php?menu=5">O nama</a>
        </nav>
    </header>



    <main>
        <?php
        switch ($menu) {
            case 1:
                include 'home.php';
                break;
            case 2:
                include 'news.php';
                break;
            case 3:
                include 'contact.php';
                break;
            case 4:
                include 'gallery.php';
                break;
            case 5:
                include 'about.php';
                break;
            default:
                include 'home.php';
        }
        ?>
    </main>

    <footer>
        <div class="footer-content">
            <p>&copy; 2024 Dorian Banić. Sva prava pridržana.</p>
            <div class="social-icons">
                <a href="https://www.facebook.com" target="_blank" title="Facebook">
                    <img src="slike/facebook-icon.png" alt="Facebook ikona">
                </a>
                <a href="https://www.instagram.com" target="_blank" title="Instagram">
                    <img src="slike/instagram-icon.png" alt="Instagram ikona">
                </a>
                <a href="https://www.twitter.com" target="_blank" title="Twitter">
                    <img src="slike/twitter-icon.png" alt="Twitter ikona">
                </a>
            </div>
            <div class="github-link">
                <a href="https://github.com/DorianBanic" target="_blank" title="Pogledajte moj GitHub">
                    <img src="slike/github-icon.png" alt="GitHub ikona">
                </a>
            </div>
        </div>
    </footer>

</html>