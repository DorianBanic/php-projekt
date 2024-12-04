<?php
include 'db.php';
session_start();
?>

<!DOCTYPE html>
<html lang="hr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Detalji pojedine vijesti o Dinamo Zagrebu.">
    <meta name="keywords" content="Dinamo Zagreb, vijesti, nogomet, GNK Dinamo, članci">
    <meta name="author" content="Dorian Banić">
    <title>Pojedina vijest - Dinamo Zagreb</title>
    <link rel="stylesheet" href="article.css">
</head>

<body>
    <header>
        <div class="banner">
            <img src="slike/slika1.jpg" alt="GNK Dinamo banner">
        </div>
        <nav>
            <a href="index.php?menu=1">Početna</a>
            <a href="index.php?menu=2">Vijesti</a>
            <a href="index.php?menu=3">Kontakt</a>
            <a href="index.php?menu=4">Galerija</a>
            <a href="index.php?menu=5">O nama</a>

            <?php if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true): ?>
                <?php if ($_SESSION['Rola'] === 'admin'): ?>
                    <a href="admin.php">Administracija</a>
                <?php endif; ?>
                <a href="logout.php">Odjava</a>
            <?php else: ?>
                <a href="register.php">Registracija</a>
                <a href="login.php">Prijava</a>
            <?php endif; ?>
        </nav>
    </header>
    <main>
        <article>
            <header>
                <h1>Baturina sucu za vrijeme utakmice: Jesi li ti normalan?</h1>
                <h2>Martin Baturina je poludio</h2>
                <time datetime="2024-11-09">Objavljeno: 9. studenoga 2024.</time>
            </header>

            <figure>
                <img src="news/thumbnail5.jpg">
                <figcaption>Martin Baturina</figcaption>
            </figure>

            <section class="content">
                <p>DINAMO je remizirao kod Gorice 2:2 u 13. kolu SuperSport HNL-a. Golove za Goricu postigli su Marko Kolar i Krešimir Krizmanić, a za Dinamo bivši igrač Gorice Dario Špikić i Nathanaël Mbuku.</p>
                <p>Dinamovci su bili nervozni na terenu, a to se vidjelo na Martinu Baturini u 65. minuti utakmice..</p>
                <p>Borio se s dvojicom igrača Gorice, nakon čega je ostao bez lopte. Smatrao je da mu suci trebaju vratiti loptu, no posjed je pripao domaćinu.</p>
                <p>Baturina je potom došao do linijskog suca i pitao ga: "Što je ovo? Jesi li ti normalan? Jesi li ti normalan?"</p>
                <p>Dinamo trenutno zaostaje tri boda za Hajdukom, koji danas igra na Poljudu protiv Istre 1961. Rijeka je druga s jednakim brojem bodova kao Dinamo, ali s utakmicom manje. Rijeka u nedjelju dočekuje Osijek.</p>
            </section>

            <footer class="article-footer">
                <a href="index.php?menu=2">&larr; Vrati se na vijesti</a>
            </footer>
        </article>
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
</body>

</html>