<?php
session_start();
if (isset($_SESSION["id_member"])) {
    session_destroy(); // Hapus semua data sesi
    setcookie('remember_me', '', time() - 3600, '/'); // Hapus cookie 'remember_me'
    header("location: ../index.php");
} else {
    echo "
    <script language='javascript'>
    alert('Login First Before Entering This Page');
    document.location='../index.php';
    </script>";
}
?>