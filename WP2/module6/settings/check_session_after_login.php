<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// If session ID not set, redirect to login page
if (!isset($_SESSION["id_member"])) {	
	header("location:../index.php");
}
else
{
	$url = $_SERVER['REQUEST_URI'];
	$host  = $_SERVER['HTTP_HOST'];
	$path = parse_url($url, PHP_URL_PATH);
	$segments = explode('/', $path);

	if (count($segments) > 0) {
	    $dashboardString = $segments[4];
	    if($_SESSION['status_akun'] == 0 && $dashboardString == 'dashboard')
	    {

	    }
	    	
	    else if($_SESSION['status_akun'] == 1 && $dashboardString == 'member')
	    {
	    	
	    }
	    else
	    {
	    	echo "<script>alert('Halaman ini tidak berhak diakses oleh Anda!!');";
			if (isset($_SERVER['HTTPS'])) {
			    echo "window.location.href = 'https://" . $host . "endrio_240060003/WP2/module6';";
			} else {
			    echo "window.location.href = 'http://" . $host . "endrio_240060003/WP2/module6';";
			}
			echo "</script>";
	    }

	}
}
?>