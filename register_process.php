<?php
session_start();
include 'koneksi.php'; // Include your database connection file

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $level = $_POST['level'];

    // Perform any additional validation if needed

    // Check if the email is already registered
    $checkQuery = "SELECT * FROM user WHERE email = ?";
    $checkStmt = mysqli_prepare($conn, $checkQuery);
    
    // Bind parameters
    mysqli_stmt_bind_param($checkStmt, "s", $email);

    // Execute the statement
    mysqli_stmt_execute($checkStmt);

    // Fetch the result
    $result = mysqli_stmt_get_result($checkStmt);

    // Check if the email is already registered
    if (mysqli_num_rows($result) > 0) {
        // Email is already registered
        echo "<script>window.alert('Email telah terdaftar!')
        window.location='registrasi.php'</script>";
        exit();
    }

    // Close the statement
    mysqli_stmt_close($checkStmt);

    // Insert user data into the database
    $insertQuery = "INSERT INTO user (nama, email, password, level) VALUES (?, ?, ?, ?)";
    $insertStmt = mysqli_prepare($conn, $insertQuery);
    
    // Bind parameters
    mysqli_stmt_bind_param($insertStmt, "ssss", $nama, $email, $password, $level);

    // Execute the statement
    $insertResult = mysqli_stmt_execute($insertStmt);

    // Check if the registration was successful
    if ($insertResult) {
        // Registration successful, you can redirect the user to a success page or login page
        echo "<script>window.alert('Registrasi Berhasil!')
        window.location='login.php'</script>";
        exit();
    } else {
        // Registration failed
        echo "<script>window.alert('Registrasi Gagal')</script>";
    }

    // Close the statement
    mysqli_stmt_close($insertStmt);
}

// Close the database connection
mysqli_close($conn);
?>
