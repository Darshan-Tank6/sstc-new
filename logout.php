<?php
session_start();
session_destroy(); // Destroy the session
header('Location: login_form.html'); // Redirect to login page
?>
