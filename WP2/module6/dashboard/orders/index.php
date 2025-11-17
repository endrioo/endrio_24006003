<?php
session_start();
include_once "../../settings/connection.php";
include_once "../../settings/check_session_after_login.php";
include('../../../header.php');
include('../../../menu.php');

?>
<div class="container">
    <center style="padding-top:25px">
        <h1>Orders Data</h1>
    </center>
    <?php 
    $message = "";
    if (isset($_SESSION['message'])) : $message = $_SESSION['message'];unset($_SESSION['message']); ?>
        <div class="alert <?php echo strpos($message, 'Failed') !== false ? 'alert-danger' : 'alert-success'; ?>">
            <?php echo $message; ?>
        </div>
    <?php endif; ?>
    <table id="orderTable" class="table table-striped" style="width:100%">
        <thead>
            <tr>
                <th>No</th>
                <th>Order ID</th>
                <th>Receiver Name</th>
                <th>Address</th>
                <th>Product Information</th>
                <th>Proof of Payment</th>
                <th>Total</th>
                <th>Status</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php
            // Query untuk mengambil data produk dari database
            $query = "SELECT * FROM orders ORDER BY id_orders DESC";
            $result = mysqli_query($connection, $query)or die("Query failed: " . mysqli_error($connection));
            $no = 1;
            while ($row = mysqli_fetch_assoc($result)) {
                $total = 0;
                $id_orders = $row['id_orders'];
                echo "<tr>";
                echo "<td>" . $no . "</td>";
                echo "<td>" . $id_orders . "</td>";
                echo "<td>" . $row['receiver_name'] . "</td>";
                echo "<td>" . $row['address'] . "</td>";
                $querydetailorder = "SELECT * FROM detail_order INNER JOIN product ON detail_order.id_product = product.id_product WHERE detail_order.id_orders='$id_orders'";
                $resultdetailorder = mysqli_query($connection, $querydetailorder)or die("Query failed: " . mysqli_error($connection));;
                echo "<td>";
                while ($rowdo = mysqli_fetch_assoc($resultdetailorder)) {
                    echo "<a href='../product/' target='_blank'>" . $rowdo['nama_produk'] . "</a> (". $rowdo['quantity'] . " Buah x Rp. " . number_format($rowdo['harga'],0) . ") = Rp. " . number_format($rowdo['quantity']*$rowdo['harga'],0) . "<br>";
                    $total += $rowdo['quantity']*$rowdo['harga'];
                }
                echo "</td>";
                echo "<td><a href='" . $row['proof_of_payment'] . "' target='_blank'><img src='../" . $row['proof_of_payment'] . "' width='100' height='100'></a></td>";
                echo "<td>Rp. " . number_format($total,0) . "</td>";
                echo "<td>";
                include('../../status_order.php');
                echo "</td>";
                echo "<td>";
                ?>

                <form action="change_status.php" method="POST">
                    <input type="hidden" name="id_orders" value="<?php echo $id_orders?>"/>
                    <select class="form-control" name="status_order">
                        <option value="0" <?php if($row['status_order'] == '0') echo 'selected';?>>Waiting for Payment Confirmation</option>
                        <option value="1" <?php if($row['status_order'] == '1') echo 'selected';?>>Payment Confirmed</option>
                        <option value="2" <?php if($row['status_order'] == '2') echo 'selected';?>>On Delivery</option>
                        <option value="3" <?php if($row['status_order'] == '3') echo 'selected';?>>Accepted</option>
                    </select>
                    <br>
                    <button type="submit" class="btn btn-primary">Change Status</button>
                </form>

                <?php
                echo "</td>";
                echo "</tr>";
                $no++;
            }
            ?>
        </tbody>
    </table>
</div>
<?php
include('../../../footer.php')
?>

<script>
    $(document).ready(function () {
        $('#orderTable').DataTable();
    });
</script>
