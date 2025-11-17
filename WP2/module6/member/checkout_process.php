<?php
session_start();
include_once "../settings/connection.php";
include_once "../settings/check_session_after_login.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $receiverName = $_POST["receiver_name"];
    $address = $_POST["address"];
    if (isset($_COOKIE['cart'])) {
        $cartProductQuantities = json_decode($_COOKIE['cart'], true);

        if (!empty($cartProductQuantities)) {
            $id_member = $_SESSION['id_member'];
            $target_dir = "../../img/";
            $target_file = $target_dir . basename($_FILES['upload_file']['name']);
            move_uploaded_file($_FILES['upload_file']['tmp_name'], $target_file);
            $query = "INSERT INTO orders (id_member,receiver_name, address,proof_of_payment,status_order) VALUES ('$id_member','$receiverName', '$address','$target_file','0')";
            $result = mysqli_query($connection, $query)or die("Query failed: " . mysqli_error($connection));

            $querylastid = "SELECT * FROM orders ORDER BY id_orders DESC LIMIT 1";
            $resultlastid = mysqli_query($connection, $querylastid)or die("Query failed: " . mysqli_error($connection));;
            $ordersdata = mysqli_fetch_array($resultlastid);
            $lastid = $ordersdata['id_orders'];

            foreach ($cartProductQuantities as $productId => $quantity) {
                $querydetail = "INSERT INTO detail_order (id_orders,id_product, quantity) VALUES ($lastid,$productId, $quantity)";
                $resultdetail = mysqli_query($connection, $querydetail)or die("Query failed: " . mysqli_error($connection));;
            }

            $_SESSION['message_success'] = 'Order successful, please wait for admin to process your order!';

            setcookie('cart', '', time() - 3600, '/'); 
            header("location: cart.php");
            exit();
            
        }
    }
}
header("location: cart.php");
exit();
?>