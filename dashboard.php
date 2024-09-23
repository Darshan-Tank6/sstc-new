<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header('Location: login_form.html'); // Redirect to login page if not logged in
    exit();
}

echo "Welcome to the dashboard!";
?>
