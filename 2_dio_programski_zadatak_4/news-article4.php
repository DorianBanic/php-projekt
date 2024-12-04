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
                <h1>Novi udarac za Dalića. Petković otpao za Škotsku i Portugal</h1>
                <h2>Bruno Petković se ozlijedio</h2>
                <time datetime="2024-11-11">Objavljeno: 11. studenoga 2024.</time>
            </header>

            <figure>
                <img src="news/thumbnail4.jpg">
                <figcaption>Bruno Petković</figcaption>
            </figure>

            <section class="content">
                <p>BRUNO PETKOVIĆ će ipak propustiti ključne utakmice Hrvatske u Ligi nacija zbog ozljede mišića, potvrdio je Hrvatski nogometni savez na svojim stranicama. Napadač Dinama već neko vrijeme vuče ozljedu i neće biti na raspolaganju Zlatku Daliću za zadnje dvije utakmice u skupini, protiv Škotske u Glasgowu (petak) i Portugala u Splitu (ponedjeljak).</p>
                <p>To je epilog sapunice koja je nedavno dospjela u javnost. Daliću se nije svidjelo to što je Dinamo komunicirao da je Petković u problemima s ozljedom, a ipak je ušao u zadnjem kolu protiv Gorice. Aktualni prvak Hrvatske je bio razočaran takvim Dalićevim istupom.</p>
                <p>"Jedna od dobrih stvari u reprezentaciji je što igrači dolaze s poštovanjem. Nekad nisu najspremniji. To je bilo kod Brune protiv Turske. To cijenim, Bruno je igrao protiv Škotske i Poljske. Nije spreman i poštedjeli smo ga. Požalio se na ozljedu, rekao je da će doći i u kontaktu s liječničkom službom donijet ćemo odluku.</p>
                <p>Ozlijeđen je i ne trenira, ne znam zašto igra ako je ozlijeđen i ne trenira. To mi smeta. Zajec me zvao i rekao sam mu što i svakom drugom predsjedniku kluba. Mora doći, a ja ću donijeti najbolju odluku za njega i reprezentaciju", poručio je Dalić.</p>
                <p>Nije se ta izjava svidjela Dinamu, koji smatra da je učinio sve u svojoj moći da Petkovića zaliječi i sačuva u prethodnom razdoblju, u kojem 30-godišnji napadač ima problema s upalom, što mu je radilo problem i prošle sezone.</p>
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