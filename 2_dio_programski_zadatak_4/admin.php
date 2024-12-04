<?php
session_start();
include 'db.php';

if (!isset($_SESSION['logged_in']) || $_SESSION['Rola'] != 'admin') {
    header("Location: login.php");
    exit();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['user_id']) && isset($_POST['new_role'])) {
    $user_id = $_POST['user_id'];
    $new_role = $_POST['new_role'];
    $update_query = "UPDATE korisnici SET Rola='$new_role' WHERE idKorisnika='$user_id'";

    if ($conn->query($update_query) === TRUE) {
        echo "Rola korisnika ažurirana!";
    } else {
        echo "Greška: " . $conn->error;
    }
}

$query = "SELECT * FROM korisnici WHERE Rola != 'admin'";
$result = $conn->query($query);
?>

<!DOCTYPE html>
<html lang="hr">

<head>
    <meta charset="UTF-8">
    <title>Administracija</title>
    <link rel="stylesheet" href="admin.css">
</head>

<body>
    <a href="index.php" class="back-arrow">← Povratak na početnu</a>
    <h1>Administracija korisnika</h1>
    <table>
        <tr>
            <th>Ime</th>
            <th>PrezIme</th>
            <th>Email</th>
            <th>Rola</th>
            <th>Promijeni rolu</th>
        </tr>
        <?php while ($user = $result->fetch_assoc()): ?>
            <tr>
                <td><?= htmlspecialchars($user['Ime']) ?></td>
                <td><?= htmlspecialchars($user['Prezime']) ?></td>
                <td><?= htmlspecialchars($user['Email']) ?></td>
                <td><?= htmlspecialchars($user['Rola']) ?></td>
                <td>
                    <form action="admin.php" method="POST">
                        <input type="hidden" name="user_id" value="<?= $user['idKorisnika'] ?>">
                        <select name="new_role">
                            <option value="user">User</option>
                            <option value="editor">Editor</option>
                            <option value="admin">Admin</option>
                        </select>
                        <button type="submit">Promijeni rolu</button>
                    </form>
                </td>
            </tr>
        <?php endwhile; ?>
    </table>
</body>

</html>