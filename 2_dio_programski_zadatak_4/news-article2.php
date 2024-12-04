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
                <h1>Bjelica: Baturina i Sučić će otići, ali nakon njih će doći mlađi</h1>
                <h2>Bjelica je dao intervju za Španjolsku Marcu</h2>
                <time datetime="2024-11-17">Objavljeno: 17. studenoga 2024.</time>
            </header>

            <figure>
                <img src="news/thumbnail2.jpg">
                <figcaption>Nenad Bjelica</figcaption>
            </figure>

            <section class="content">
                <p>DINAMOV trener Nenad Bjelica rekao je u razgovoru za španjolsku postaju Radio Marca da hrvatski prvak želi zadržati Martina Baturinu i Petra Sučića do ljeta te im priprema nove ugovore, ali da će njihov ostanak ovisiti o mogućim ponudama iz inozemstva.</p>
                <p>Baturini je cijena 20 milijuna eura, a Sučiću tri milijuna, podatak je specijalizirane stranice Transfermarkt. Obojica imaju ugovore do ljeta 2028.</p>
                <p>"Kada će otići? Hoće li to biti sada u siječnju ili srpnju, vidjet ćemo. Mi imamo pripremljene ugovore, kako bismo produžili suradnju s njima uz bolje uvjete, kako bi se osjećali dobro ovdje u Dinamu. Dođu li ponude velikih klubova, bit će proučene, a klub će odlučiti hoće li otići ili ne", izjavio je trener.</p>
                <p>Mediji posljednjih dana nagađaju o interesima raznih klubova, međutim niti jedan klub nije potvrdio da ih želi. Bjelica također nije naveo ime klubova koji bi mogli poslati ponudu. Upitan o omladinskoj školi Dinama, rekao je da se "rezultati već vide".</p>
                <p>"Svake godine izlaze igrači iz podmlatka. Sada su izašli Petar Sučić i Martin Baturina koji su trenutačno najistaknutiji. Igraju u prvoj postavi reprezentacije Hrvatske, a također igraju jako dobro u Dinamu. Nakon njih će doći drugi mladi igrači koje pripremamo kada odu Baturina i Sučić jer ovaj klub preživljava od transfera u Europu", rekao je trener.</p>
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