<?php
session_start(); 
include_once "../../settings/connection.php";
include_once "../../settings/check_session_after_login.php";

$nama_lengkap_daftar    = $_POST['nama_lengkap'];
$gender_daftar          = $_POST['gender_daftar'];
$alamat_daftar          = $_POST['alamat']; 
$tanggal_lahir          = $_POST['tanggallahir']; 
$nomor_telepon          = $_POST['nomor_telepon']; 
$hobi                   = $_POST['hobi']; 
$nama_orang_tua         = $_POST['nama_orang_tua']; 
$username_daftar        = $_POST['nama_lengkap'];
$password_daftar        = md5($_POST['password']);

// Proses upload gambar (Anda dapat menambahkan validasi dan pengolahan gambar yang lebih kompleks)
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
        $query = "INSERT INTO member(nama_lengkap, gender, alamat,tanggallahir,username, password, nomor_telepon, hobi, nama_orang_tua) VALUES('$nama_lengkap_daftar','$gender','$alamat_daftar','$tanggal_lahir','$username_daftar','$password_daftar', '$nomor_telepon', '$hobi', '$nama_orang_tua')";
        $result = mysqli_query($connection, $query);

        if ($result) {
            $_SESSION['message'] = "Member added successfully.";
            header("Location: index.php");
            exit();
        } else {
            $_SESSION['message'] = "Failed to add member to database.";
        }
    } else {
        $_SESSION['message'] = "Member Already Registered.";
    }

} else {
    $_SESSION['message'] = "Registration failed, date of birth cannot be later than today.";
}
header("Location: add.php");
exit();
?>
