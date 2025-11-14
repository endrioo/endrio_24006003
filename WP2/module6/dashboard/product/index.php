<?php
session_start();
include_once "../../settings/connection.php";
include_once "../../settings/check_session_after_login.php";
include('../../../header.php');
include('../../../menu.php');

?>
<div class="container">
    <center style="padding-top:25px">
        <h1>Products Data</h1>
    </center>
    <?php 
    $message = "";
    if (isset($_SESSION['message'])) : $message = $_SESSION['message'];unset($_SESSION['message']); ?>
        <div class="alert <?php echo strpos($message, 'Failed') !== false ? 'alert-danger' : 'alert-success'; ?>">
            <?php echo $message; ?>
        </div>
    <?php endif; ?>
    <a href="add.php" class="btn btn-primary" style="margin-bottom:10px">Add Data</a>
    <table id="productTable" class="table table-striped" style="width:100%">
        <thead>
            <tr>
                <th>No</th>
                <th>Product Name</th>
                <th>Product Description</th>
                <th>Weight</th>
                <th>Price</th>
                <th>Product Photos</th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php
            // Query untuk mengambil data produk dari database
            $query = "SELECT * FROM product";
            $result = mysqli_query($connection, $query);
            $no = 1;
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>" . $no . "</td>";
                echo "<td>" . $row['nama_produk'] . "</td>";
                echo "<td>" . $row['deskripsi_produk'] . "</td>";
                echo "<td>" . number_format($row['berat'], 0) . " Gram</td>";
                echo "<td>Rp " . number_format($row['harga'], 0) . "</td>";
                echo "<td><img src='" . $row['foto_produk'] . "' width='100' height='100'></td>";
                echo "<td><a href='edit.php?id=" . $row['id_product'] . "' class='btn btn-warning'>Edit</a></td>";
                echo "<td><a href='delete.php?id=" . $row['id_product'] . "' class='btn btn-danger'>Delete</a></td>";
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
        $('#productTable').DataTable();
    });
</script>
