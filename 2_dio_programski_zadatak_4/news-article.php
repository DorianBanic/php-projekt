<?php
include 'db.php';
session_start();

// Provjera je li ID postavljen u URL-u
if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
    header("Location: news.php");
    exit();
}

// Dohvaćanje ID-a vijesti iz URL-a
$news_id = (int)$_GET['id'];

// Dohvaćanje vijesti iz baze na temelju ID-a
$query = "SELECT n.id, n.title, n.subtitle, n.shortContent, n.content, n.created_at, i.image_path 
          FROM news n
          LEFT JOIN news_images i ON n.id = i.news_id
          WHERE n.id = $news_id AND n.status = 'approved'";
$result = $conn->query($query);

// Provjera postoji li vijest
if ($result->num_rows === 0) {
    echo "Vijest nije pronađena.";
    exit();
}

$news = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="hr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Detalji pojedine vijesti.">
    <meta name="keywords" content="Dinamo Zagreb, vijesti, nogomet, GNK Dinamo">
    <meta name="author" content="Dorian Banić">
    <title><?= htmlspecialchars($news['title']) ?> - Dinamo Zagreb</title>
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
                <?php if ($_SESSION['Rola'] === 'admin' || $_SESSION['Rola'] === 'editor'): ?>
                    <a href="manage-news.php">Upravljanje vijestima</a>
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
                <h1><?= htmlspecialchars($news['title']) ?></h1>
                <h2><?= htmlspecialchars($news['subtitle']) ?></h2>
                <time datetime="<?= htmlspecialchars($news['created_at']) ?>">
                    Objavljeno: <?= date("j. F Y.", strtotime($news['created_at'])) ?>
                </time>
            </header>

            <?php if (!empty($news['image_path'])): ?>
                <figure>
                    <img src="<?= htmlspecialchars($news['image_path']) ?>" alt="<?= htmlspecialchars($news['title']) ?>">
                    <figcaption>
                        <?php
                        $filename = basename($news['image_path']); // Dohvati ime datoteke
                        $filename_without_ext = pathinfo($filename, PATHINFO_FILENAME); // Ukloni ekstenziju
                        $clean_name = preg_replace('/^[a-zA-Z0-9]+_/', '', $filename_without_ext); // Ukloni prefiks do "_"
                        echo htmlspecialchars($clean_name);
                        ?>
                    </figcaption>
                </figure>
            <?php endif; ?>


            <section class="content">
                <?= nl2br(htmlspecialchars($news['content'])) ?>
            </section>

            <footer class="article-footer">
                <a href="index.php?menu=2">&larr; Povratak na sve vijesti</a>
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