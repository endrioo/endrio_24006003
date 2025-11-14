<?php
session_start();
include_once "../../settings/connection.php";
include_once "../../settings/check_session_after_login.php";
$member_id = $_GET['id'];
// Query to get member   information
$query = "SELECT * FROM member WHERE id_member = $member_id";
$result = mysqli_query($connection, $query);

if (mysqli_num_rows($result) === 1) {
    $row = mysqli_fetch_assoc($result);
    $member_name = $row['nama_lengkap'];

    // Delete the member from the database
    $delete_query = "DELETE FROM member WHERE id_member = $member_id";
    $delete_result = mysqli_query($connection, $delete_query);

    if ($delete_result) {
        $_SESSION['message'] = "The member with the name '$member_name' was successfully deleted.";
    } else {
        $_SESSION['message'] = "SQL Error: " . mysqli_error($connection);
    }
} else {
    $_SESSION['message'] = "Failed because member not found.";
}
header("Location: index.php");
exit();
?>