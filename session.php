<?php
// session_start();
include 'koneksi.php'; // Include your database connection file

// Check if the user is logged in
if (!isset($_SESSION['email'])) {
    header("Location: login.php");
    exit();
}
?>
