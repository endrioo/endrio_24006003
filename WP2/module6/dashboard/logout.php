<?php
session_start();
if (isset($_SESSION["id_member"]))
{
	unset($_SESSION['id_member']);
	echo "
		<script language='javascript'>
		document.location='../index.php';
		</script>";
}else{
	echo "
		<script language='javascript'>
		alert('Login First Before Entering This Page');
		document.location='../index.php';
		</script>";
}
?>
