<?php
session_start();

// Hapus semua data sesi
session_unset();

// Hapus sesi
session_destroy();

echo "<script>alert('Berhasil Logout!'); window.location.href='./'</script>";// Ganti dengan halaman login Anda
exit();
?>
