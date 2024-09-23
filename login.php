<?php
// Include the database connection
require 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Prepare an SQL statement to fetch the user by email
    $stmt = $conn->prepare("SELECT password_hash FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        $stmt->bind_result($password_hash);
        $stmt->fetch();

        // Verify the password
        if (password_verify($password, $password_hash)) {
            echo 'Login successful!';
            // Start session or redirect user to a dashboard
        } else {
            echo 'Invalid password';
        }
    } else {
        echo 'User not found';
    }

    $stmt->close();
}
?>
