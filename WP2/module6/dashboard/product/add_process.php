<?php
session_start(); 
include_once "../../settings/connection.php";
include_once "../../settings/check_session_after_login.php";

$product_name = $_POST['product_name'];
$product_description = $_POST['product_description'];
$weight = $_POST['weight'];
$price = $_POST['price'];

// Proses upload gambar (Anda dapat menambahkan validasi dan pengolahan gambar yang lebih kompleks)
if ($_FILES['product_photo']['error'] === 0) {
    $target_dir = "../../../img/"; // Direktori tempat menyimpan gambar
    $target_file = $target_dir . basename($_FILES['product_photo']['name']);

    // Pindahkan gambar ke direktori tujuan
    if (move_uploaded_file($_FILES['product_photo']['tmp_name'], $target_file)) {
        $query = "INSERT INTO product (nama_produk, deskripsi_produk, berat, harga, foto_produk) VALUES ('$product_name', '$product_description', '$weight', '$price', '$target_file')";
        $result = mysqli_query($connection, $query);

        if ($result) {
            $_SESSION['message'] = "Product added successfully.";
            header("Location: index.php");
            exit();
        } else {
            $_SESSION['message'] = "Failed to add product to database.";
        }
    } else {
        $_SESSION['message'] = "Failed to upload product image.";
    }
} else {
    $_SESSION['message'] = "Failed because product image not uploaded.";
}
header("Location: add.php");
exit();
?>
