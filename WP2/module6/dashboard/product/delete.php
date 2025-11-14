<?php
session_start();
include_once "../../settings/connection.php";
include_once "../../settings/check_session_after_login.php";
$product_id = $_GET['id'];
// Query to get product information
$query = "SELECT * FROM product WHERE id_product = $product_id";
$result = mysqli_query($connection, $query);

if (mysqli_num_rows($result) === 1) {
    $row = mysqli_fetch_assoc($result);
    $product_name = $row['nama_produk'];
    $product_photo = $row['foto_produk'];

    // Delete the product from the database
    $delete_query = "DELETE FROM product WHERE id_product = $product_id";
    $delete_result = mysqli_query($connection, $delete_query);

    if ($delete_result) {
        // Remove product photos from the directory
        if (unlink($product_photo)) {
            $_SESSION['message'] = "The product with the name '$product_name' was successfully deleted along with the product photo.";
        } else {
            $_SESSION['message'] = "The product with the name '$product_name' was successfully deleted, but failed to delete the product photo.";
        }
    } else {
        $_SESSION['message'] = "Failed to delete product.";
    }
} else {
    $_SESSION['message'] = "Failed because product not found.";
}
header("Location: index.php");
exit();
?>
