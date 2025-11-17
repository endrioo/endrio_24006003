<?php
session_start(); 
include_once "../../settings/connection.php";
include_once "../../settings/check_session_after_login.php";

$id_orders = $_POST['id_orders'];
$status_order = $_POST['status_order'];

$update_query = "UPDATE orders SET status_order = '$status_order' WHERE id_orders = '$id_orders'";


// Update product data

$update_result = mysqli_query($connection, $update_query)or die("Query failed: " . mysqli_error($connection));

if ($update_result) {
    $_SESSION['message'] = "Orders updated successfully.";
} else {
    $_SESSION['message'] = "Failed to update orders.";
}


header("Location: index.php");
exit();
?>
