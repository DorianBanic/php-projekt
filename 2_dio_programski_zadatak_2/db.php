<?php
$host = "localhost";
$user = "root";
$password = "";
$dbname = "registracija";

$conn = new mysqli($host, $user, $password, $dbname);

if ($conn->connect_error) {
    die("Konekcija nije uspjela: " . $conn->connect_error);
}
