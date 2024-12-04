<?php
session_start();
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $Username = $conn->real_escape_string($_POST['Username']);
    $Lozinka = $_POST['Lozinka'];

    $query = "SELECT * FROM korisnici WHERE Username='$Username'";
    $result = $conn->query($query);

    if ($result->num_rows == 1) {
        $user = $result->fetch_assoc();
        if (password_verify($Lozinka, $user['Lozinka'])) {
            $_SESSION['logged_in'] = true;
            $_SESSION['Username'] = $user['Username'];
            header("Location: index.php");
        } else {
            echo "Pogrešna Lozinka.";
            echo $user['Lozinka'];
            echo $Lozinka;
        }
    } else {
        echo "Korisnik ne postoji.";
    }
}
?>

<!DOCTYPE html>
<html lang="hr">

<head>
    <meta charset="UTF-8">
    <title>Prijava</title>
    <link rel="stylesheet" href="form.css">
</head>

<body>
    <h1>Prijava</h1>
    <form action="" method="POST">
        <label for="Username">Korisničko ime:</label>
        <input type="text" id="Username" name="Username" required><br>

        <label for="Lozinka">Lozinka:</label>
        <input type="password" id="Lozinka" name="Lozinka" required><br>

        <button type="submit">Prijavi se</button>
    </form>
</body>

</html>