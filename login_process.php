<?php
session_start();
include 'koneksi.php';

$email = $_POST['email'];
$password = md5($_POST['password']); // Use MD5 for password hashing

// Use prepared statements to prevent SQL injection
$login = mysqli_prepare($conn, "SELECT * FROM user WHERE email=? AND password=?");
mysqli_stmt_bind_param($login, "ss", $email, $password);
mysqli_stmt_execute($login);
$result = mysqli_stmt_get_result($login);

$cek = mysqli_num_rows($result);

if ($cek > 0) {
    $data = mysqli_fetch_assoc($result);

    // Store user information in sessions
    $_SESSION['id_user'] = $data['id_user'];
    $_SESSION['email'] = $email;

    // Use a switch statement for different levels
    // Use a switch statement for different levels
    switch ($data['level']) {
        case 'user':
            $_SESSION['level'] = 'user';
            header("Location: index.php");
            exit();
        case 'katekis':
            $_SESSION['level'] = 'katekis';
            header("Location: ./admin/");
            break;
            exit();
        case 'admin':
            $_SESSION['level'] = 'admin';
            header("Location: ./admin/"); // Adjusted path
            break;
            exit();

        default:
            // Handle unexpected levels
            break;
    }

    // If the code reaches this point, exit
    exit();
} else {
    // User not found or incorrect password
    header("Location: login.php");
    exit();
}
