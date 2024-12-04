<?php
include 'db.php';

$query = "SELECT n.id, n.title, n.content, n.created_at, i.image_path 
          FROM news n
          LEFT JOIN news_images i ON n.id = i.news_id 
          WHERE n.status = 'approved' 
          GROUP BY n.id 
          ORDER BY n.created_at DESC";
$result = $conn->query($query);
?>

<!DOCTYPE html>
<html lang="hr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Najnovije vijesti o GNK Dinamu Zagrebu.">
    <meta name="keywords" content="Dinamo Zagreb, vijesti, nogomet, članci, GNK Dinamo">
    <meta name="author" content="Dorian Banić">
    <title>Dinamo Zagreb - Vijesti</title>
    <link rel="stylesheet" href="news.css">
</head>

<body>
    <main>
        <h1>Najnovije vijesti o GNK Dinamu Zagreb</h1>
        <section class="news">
            <?php if ($result->num_rows > 0): ?>
                <?php while ($row = $result->fetch_assoc()): ?>
                    <a href="news-article.php?id=<?= htmlspecialchars($row['id']) ?>">
                        <img src="<?= htmlspecialchars($row['image_path'] ?? 'news/default-thumbnail.jpg') ?>" alt="Naslovna slika">
                    </a>
                    <h2>
                        <a href="news-article.php?id=<?= htmlspecialchars($row['id']) ?>">
                            <?= htmlspecialchars($row['title']) ?>
                        </a>
                    </h2>
                    <p><?= htmlspecialchars(mb_strimwidth($row['content'], 0, 200, "...")) ?></p>
                    <time datetime="<?= htmlspecialchars($row['created_at']) ?>">
                        <?= date("j. F Y.", strtotime($row['created_at'])) ?>
                    </time>
                    <a href="news-article.php?id=<?= htmlspecialchars($row['id']) ?>">Više o ovom članku...</a>
                    </article>
                <?php endwhile; ?>
            <?php else: ?>
                <p>Nema dostupnih vijesti.</p>
            <?php endif; ?>
        </section>
    </main>
</body>

</html>