<?php
// Include the database connection
require 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Hash the password
    $password_hash = password_hash($password, PASSWORD_DEFAULT);

    // Prepare an SQL statement to insert the user
    $stmt = $conn->prepare("INSERT INTO users (email, password_hash) VALUES (?, ?)");
    $stmt->bind_param("ss", $email, $password_hash);

    // Execute the query
    if ($stmt->execute()) {
        echo 'User registered successfully!';
    } else {
        echo 'Error registering user: ' . $stmt->error;
    }

    $stmt->close();
}
?>
