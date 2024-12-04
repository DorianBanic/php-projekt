<?php
session_start();
include 'db.php';

if (!isset($_SESSION['logged_in']) || !in_array($_SESSION['Rola'], ['admin', 'editor', 'user'])) {
    header("Location: login.php");
    exit();
}

if ($_SESSION['Rola'] === 'admin' && isset($_GET['delete_id'])) {
    $delete_id = (int)$_GET['delete_id'];
    $conn->query("DELETE FROM news WHERE id = $delete_id");
    $conn->query("DELETE FROM news_images WHERE news_id = $delete_id");
    header("Location: manage-news.php");
    exit();
}

if (isset($_POST['update_status']) && in_array($_SESSION['Rola'], ['admin', 'editor'])) {
    $news_id = (int)$_POST['news_id'];
    $status = $conn->real_escape_string($_POST['status']);
    $conn->query("UPDATE news SET status = '$status' WHERE id = $news_id");
    header("Location: manage-news.php");
    exit();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['add_news'])) {
    $title = $conn->real_escape_string($_POST['title']);
    $subtitle = $conn->real_escape_string($_POST['subtitle']);
    $shortContent = $conn->real_escape_string($_POST['shortContent']);
    $content = $conn->real_escape_string($_POST['content']);
    $author_id = $_SESSION['idKorisnika'];
    $status = ($_SESSION['Rola'] === 'admin') ? 'approved' : 'pending';

    $query = "INSERT INTO news (title, subtitle, shortContent, content, author_id, status) VALUES ('$title', '$subtitle', '$shortContent', '$content', $author_id, '$status')";
    if ($conn->query($query)) {
        $news_id = $conn->insert_id;

        if (!empty($_FILES['images']['name'][0])) {
            foreach ($_FILES['images']['name'] as $key => $filename) {
                $temp_name = $_FILES['images']['tmp_name'][$key];
                $destination = "uploads/" . uniqid() . "_" . basename($filename);

                if (move_uploaded_file($temp_name, $destination)) {
                    $conn->query("INSERT INTO news_images (news_id, image_path) VALUES ($news_id, '$destination')");
                }
            }
        }
        echo "Vijest uspješno dodana!";
    } else {
        echo "Greška prilikom dodavanja vijesti: " . $conn->error;
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['update_news'])) {
    $edit_id = (int)$_POST['edit_id'];
    $title = $conn->real_escape_string($_POST['title']);
    $subtitle = $conn->real_escape_string($_POST['subtitle']);
    $shortContent = $conn->real_escape_string($_POST['shortContent']);
    $content = $conn->real_escape_string($_POST['content']);

    $update_query = "UPDATE news SET 
        title = '$title', 
        subtitle = '$subtitle', 
        shortContent = '$shortContent', 
        content = '$content' 
        WHERE id = $edit_id";

    if ($conn->query($update_query)) {
        if (!empty($_FILES['images']['name'][0])) {
            foreach ($_FILES['images']['name'] as $key => $filename) {
                $temp_name = $_FILES['images']['tmp_name'][$key];
                $destination = "uploads/" . uniqid() . "_" . basename($filename);

                if (move_uploaded_file($temp_name, $destination)) {
                    $conn->query("INSERT INTO news_images (news_id, image_path) VALUES ($edit_id, '$destination')");
                }
            }
        }
        echo "Vijest uspješno ažurirana!";
    } else {
        echo "Greška prilikom ažuriranja vijesti: " . $conn->error;
    }
}

$edit_news = null;
if (isset($_GET['edit_id'])) {
    $edit_id = (int)$_GET['edit_id'];
    $edit_query = "SELECT * FROM news WHERE id = $edit_id";
    $edit_result = $conn->query($edit_query);
    if ($edit_result->num_rows > 0) {
        $edit_news = $edit_result->fetch_assoc();
    }
}

$query = "SELECT * FROM news";
if ($_SESSION['Rola'] === 'user') {
    $query .= " WHERE author_id = {$_SESSION['idKorisnika']}";
} elseif ($_SESSION['Rola'] === 'editor') {
    $query .= " WHERE status != 'archived'";
}
$query .= " ORDER BY created_at DESC";

$result = $conn->query($query);
?>

<!DOCTYPE html>
<html lang="hr">

<head>
    <meta charset="UTF-8">
    <title>Upravljanje vijestima</title>
    <link rel="stylesheet" href="manage-news.css">
    <script>
        async function fetchNewsData(id) {
            if (!id) return;

            try {
                const response = await fetch(`fetch-news.php?id=${id}`);
                if (!response.ok) throw new Error('Greška prilikom dohvaćanja podataka');

                const news = await response.json();
                document.getElementById('title').value = news.title || '';
                document.getElementById('subtitle').value = news.subtitle || '';
                document.getElementById('shortContent').value = news.shortContent || '';
                document.getElementById('content').value = news.content || '';
                document.getElementById('edit_id_hidden').value = news.id || '';
            } catch (error) {
                console.error(error);
                alert('Greška prilikom dohvaćanja podataka o vijesti.');
            }
        }
    </script>
</head>

<body>
    <h1>Upravljanje vijestima</h1>

    <?php if (in_array($_SESSION['Rola'], ['admin', 'editor'])): ?>
        <form>
            <label for="edit_id">Odaberi vijest za uređivanje:</label>
            <select id="edit_id" name="edit_id" onchange="fetchNewsData(this.value)">
                <option value="">Odaberi...</option>
                <?php
                $ids_query = "SELECT id, title FROM news";
                $ids_result = $conn->query($ids_query);
                while ($row = $ids_result->fetch_assoc()): ?>
                    <option value="<?= $row['id'] ?>">
                        <?= htmlspecialchars($row['id'] . ' - ' . $row['title']) ?>
                    </option>
                <?php endwhile; ?>
            </select>
        </form>
    <?php endif; ?>

    <h2>Dodaj novu vijest</h2>
    <form action="manage-news.php" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="edit_id" id="edit_id_hidden">
        <label for="title">Naslov:</label>
        <input type="text" id="title" name="title" required><br>

        <label for="subtitle">Podnaslov:</label>
        <input type="text" id="subtitle" name="subtitle" required><br>

        <label for="shortContent">Kratki sadržaj:</label>
        <textarea id="shortContent" name="shortContent" rows="4" required></textarea><br>

        <label for="content">Tekst:</label>
        <textarea id="content" name="content" rows="8" required></textarea><br>

        <label for="images">Dodaj slike:</label>
        <input type="file" id="images" name="images[]" multiple><br>

        <button type="submit" name="add_news">Dodaj vijest</button> <br>
        <button type="submit" name="update_news">Spremi promjene</button>
    </form>

    <h2>Pregled vijesti</h2>
    <table>
        <tr>
            <th>ID</th>
            <th>Naslov</th>
            <th>Podnaslov</th>
            <th>Kratki sadržaj</th>
            <th>Status</th>
            <th>Datum</th>
            <th>Opcije</th>
        </tr>
        <?php while ($row = $result->fetch_assoc()): ?>
            <tr>
                <td><?= htmlspecialchars($row['id']) ?></td>
                <td><?= htmlspecialchars($row['title']) ?></td>
                <td><?= htmlspecialchars($row['subtitle']) ?></td>
                <td><?= htmlspecialchars($row['shortContent']) ?></td>
                <td><?= htmlspecialchars($row['status']) ?></td>
                <td><?= htmlspecialchars($row['created_at']) ?></td>
                <td>
                    <?php if (in_array($_SESSION['Rola'], ['admin', 'editor'])): ?>
                        <form action="manage-news.php" method="POST" style="display:inline;">
                            <input type="hidden" name="news_id" value="<?= $row['id'] ?>">
                            <select name="status">
                                <option value="pending" <?= $row['status'] === 'pending' ? 'selected' : '' ?>>Na čekanju</option>
                                <option value="approved" <?= $row['status'] === 'approved' ? 'selected' : '' ?>>Odobreno</option>
                                <option value="archived" <?= $row['status'] === 'archived' ? 'selected' : '' ?>>Arhivirano</option>
                            </select>
                            <button type="submit" name="update_status">Ažuriraj</button>
                        </form>
                    <?php endif; ?>
                    <?php if ($_SESSION['Rola'] === 'admin'): ?>
                        <a href="manage-news.php?delete_id=<?= $row['id'] ?>" onclick="return confirm('Jeste li sigurni da želite obrisati ovu vijest?');">Obriši</a>
                    <?php endif; ?>
                </td>
            </tr>
        <?php endwhile; ?>
    </table>

    <a href="index.php">← Povratak na početnu</a>
</body>

</html>