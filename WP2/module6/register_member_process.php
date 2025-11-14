<?php
include_once 'settings/connection.php';

$nama_lengkap_daftar    = $_POST['nama_lengkap_daftar'];
$gender_daftar          = $_POST['gender_daftar'];
$alamat_daftar          = $_POST['alamat_daftar']; 
$tanggal_lahir          = $_POST['tanggal_lahir']; 
$nomor_telepon          = $_POST['nomor_telepon']; 
$hobi                   = $_POST['hobi']; 
$nama_orang_tua         = $_POST['nama_orang_tua']; 
$username_daftar        = $_POST['nama_lengkap_daftar'];
$password_daftar        = md5($_POST['password_daftar']);
$status_akun 			= 1;

if($tanggal_lahir <= date('Y-m-d'))
{
	if($gender_daftar=="1")
	{ 
		$gender = "L"; 
	}
	else
	{ 
		$gender = "P"; 
	} 
	$seleksi = mysqli_query($connection, "SELECT id_member FROM member WHERE username='$username_daftar'")or die("Query failed: " . mysqli_error($connection));
	$jumlah_baris = mysqli_num_rows($seleksi);

	if ($jumlah_baris == 0) {
	  	$isi = mysqli_query($connection, "INSERT INTO member(nama_lengkap, gender, alamat,tanggallahir,username, password, nomor_telepon, hobi, nama_orang_tua, status_akun) VALUES('$nama_lengkap_daftar','$gender','$alamat_daftar','$tanggal_lahir','$username_daftar','$password_daftar', '$nomor_telepon', '$hobi', '$nama_orang_tua', '$status_akun')")or die("Query failed: " . mysqli_error($connection));
	  	echo "
			<script language='javascript'>
			alert('Registration is successful, please log in..');
			document.location='index.php';
			</script>";
	}
	else {
	  	echo "
			<script language='javascript'>
			alert('Pregistration failed, member is already registered..');
			document.location='register.php';
			</script>";
	}
}
else
{
	echo "
			<script language='javascript'>
			alert('Registration failed, date of birth cannot be later than today..');
			document.location='register.php';
			</script>";
}

?>
