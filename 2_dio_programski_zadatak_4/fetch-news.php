<?php
include 'db.php';

if (isset($_GET['id'])) {
    $id = (int)$_GET['id'];
    $query = "SELECT * FROM news WHERE id = $id";
    $result = $conn->query($query);

    if ($result && $result->num_rows > 0) {
        echo json_encode($result->fetch_assoc());
    } else {
        error_log("Vijest s ID: $id nije pronađena u bazi.");
        http_response_code(404);
        echo json_encode(['error' => 'Vijest nije pronađena.']);
    }
} else {
    error_log("ID nije poslan u GET parametru.");
    http_response_code(400);
    echo json_encode(['error' => 'ID nije poslan.']);
}
