<?php
session_start(); 
include_once "../../settings/connection.php";
include_once "../../settings/check_session_after_login.php";

$member_id              = $_POST['member_id'];
$nama_lengkap_daftar    = $_POST['nama_lengkap'];
$gender_daftar          = $_POST['gender_daftar'];
$alamat_daftar          = $_POST['alamat']; 
$tanggal_lahir          = $_POST['tanggallahir']; 
$nomor_telepon          = $_POST['nomor_telepon']; 
$hobi                   = $_POST['hobi']; 
$nama_orang_tua         = $_POST['nama_orang_tua']; 
$username_daftar        = $_POST['nama_lengkap'];

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

    $query = "UPDATE member SET 
            nama_lengkap = '$nama_lengkap_daftar',
            gender = '$gender',
            alamat = '$alamat_daftar',
            tanggallahir = '$tanggal_lahir',
            username = '$username_daftar',
            nomor_telepon = '$nomor_telepon',
            hobi = '$hobi',
            nama_orang_tua = '$nama_orang_tua'
          WHERE id_member = $member_id";

    $result = mysqli_query($connection, $query);

    if ($result) {
        $_SESSION['message'] = "Member Update successfully.";
        header("Location: index.php");
        exit();
    } else {
        $_SESSION['message'] = "Failed to add member to database: " . mysqli_error($connection);
    }

} else {
    $_SESSION['message'] = "Registration failed, date of birth cannot be later than today.";
}
header("Location: edit.php?id=" . $member_id);
exit();
?>
