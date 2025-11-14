<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// If user already logged in, redirect to dashboard
if (isset($_SESSION["id_member"])) {	
	if($_SESSION['status_akun'] == 0)
		header("location:dashboard/index.php");
	else
		header("location:member/index.php");
}
?>