<?php
session_start();
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $ime = $conn->real_escape_string($_POST['ime']);
    $prezime = $conn->real_escape_string($_POST['prezime']);
    $email = $conn->real_escape_string($_POST['email']);
    $drzava = $conn->real_escape_string($_POST['drzava']);
    $datum_rodjenja = $conn->real_escape_string($_POST['datum_rodjenja']);

    $Username = strtolower(substr($ime, 0, 1) . $prezime);
    $provjera_query = "SELECT Username FROM korisnici WHERE Username='$Username'";
    $provjera_result = $conn->query($provjera_query);
    if ($provjera_result->num_rows > 0) {
        $Username .= rand(1, 1000);
    }

    $lozinka_raw = bin2hex(random_bytes(4));
    $lozinka_hash = password_hash($lozinka_raw, PASSWORD_BCRYPT);

    $sql = "INSERT INTO korisnici (Ime, Prezime, Email, Država, Username, datumRođenja, Lozinka)
            VALUES ('$ime', '$prezime', '$email', '$drzava', '$Username', '$datum_rodjenja', '$lozinka_hash')";

    if ($conn->query($sql) === TRUE) {
        echo "Registracija uspješna! Vaša lozinka je: $lozinka_raw";
    } else {
        echo "Greška: " . $sql . "<br>" . $conn->error;
    }
}

$drzave_query = "SELECT idDržave, imeDržave FROM države ORDER BY imeDržave";
$drzave_result = $conn->query($drzave_query);
?>

<!DOCTYPE html>
<html lang="hr">

<head>
    <meta charset="UTF-8">
    <title>Registracija</title>
    <link rel="stylesheet" href="form.css">
</head>

<body>
    <h1>Registracija</h1>
    <form action="" method="POST">
        <label for="ime">Ime:</label>
        <input type="text" id="ime" name="ime" required><br>

        <label for="prezime">Prezime:</label>
        <input type="text" id="prezime" name="prezime" required><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br>

        <label for="drzava">Država:</label>
        <select id="drzava" name="drzava" required>
            <option value="">Odaberite državu</option>
            <?php while ($row = $drzave_result->fetch_assoc()): ?>
                <option value="<?= htmlspecialchars($row['idDržave'], ENT_QUOTES, 'UTF-8') ?>">
                    <?= htmlspecialchars($row['imeDržave'], ENT_QUOTES, 'UTF-8') ?>
                </option>
            <?php endwhile; ?>
        </select><br>

        <label for="datum_rodjenja">Datum rođenja:</label>
        <input type="date" id="datum_rodjenja" name="datum_rodjenja" required><br>

        <button type="submit">Registriraj se</button>
    </form>
    <p>Već imate račun? <a href="login.php">Prijavite se ovdje</a>.</p>
</body>

</html>