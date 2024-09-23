<?php
// db.php - MySQL database connection using mysqli

$host = 'localhost'; // Database host
$db = 'login_system'; // The name of your database
$user = 'root'; // Your MySQL username
$pass = ''; // Your MySQL password (leave blank if no password)

// Create a connection
$conn = new mysqli($host, $user, $pass, $db);

// Check if the connection was successful
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
