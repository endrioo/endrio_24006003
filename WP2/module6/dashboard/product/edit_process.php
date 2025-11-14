<?php
session_start(); 
include_once "../../settings/connection.php";
include_once "../../settings/check_session_after_login.php";

$product_id = $_POST['product_id'];
$product_name = $_POST['product_name'];
$product_description = $_POST['product_description'];
$weight = $_POST['weight'];
$price = $_POST['price'];

// The process of uploading images if there are changes
$target_file = "";
if($_FILES['product_photo']['size'] != 0) {
    $target_dir = "../../../img/";
    $target_file = $target_dir . basename($_FILES['product_photo']['name']);
    if (move_uploaded_file($_FILES['product_photo']['tmp_name'], $target_file)) {
        // Delete old photos if any
        $old_photo_query = "SELECT foto_produk FROM product WHERE id_product = $product_id";
        $old_photo_result = mysqli_query($connection, $old_photo_query);
        if ($old_photo_row = mysqli_fetch_assoc($old_photo_result)) {
            $old_photo = $old_photo_row['foto_produk'];
            if (file_exists($old_photo)) {
                unlink($old_photo);
            }
        }
        $update_query = "UPDATE product SET nama_produk = '$product_name', deskripsi_produk = '$product_description', berat = '$weight', harga = '$price', foto_produk = '$target_file' WHERE id_product = $product_id";
    }
    
}
else
    $update_query = "UPDATE product SET nama_produk = '$product_name', deskripsi_produk = '$product_description', berat = '$weight', harga = '$price' WHERE id_product = $product_id";


// Update product data

$update_result = mysqli_query($connection, $update_query);

if ($update_result) {
    $_SESSION['message'] = "Product updated successfully.";
    header("Location: index.php");
    exit();
} else {
    $_SESSION['message'] = "Failed to update product.";
}


header("Location: edit.php?id=" . $product_id);
exit();
?>
