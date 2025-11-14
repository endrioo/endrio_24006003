<?php
session_start();
include_once "../../settings/connection.php";
include_once "../../settings/check_session_after_login.php";
include('../../../header.php');
include('../../../menu.php');

?>
<div class="container">
    <center style="padding-top:25px">
        <h1>Member Data</h1>
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
                <th>Nama Lengkap</th>
                <th>Gender</th>
                <th>Alamat</th>
                <th>Tanggal Lahir</th>
                <th>No telepon</th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php
            // Query untuk mengambil data produk dari database
            $query = "SELECT * FROM member";
            $result = mysqli_query($connection, $query);
            $no = 1;
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>" . $no . "</td>";
                echo "<td>" . $row['nama_lengkap'] . "</td>";
                echo "<td>" . $row['gender'] . "</td>";
                echo "<td>" . $row['alamat'] . "</td>";
                echo "<td>" . $row['tanggallahir'] . "</td>";
                echo "<td>" . $row['nomor_telepon'] . "</td>";
                echo "<td><a href='edit.php?id=" . $row['id_member'] . "' class='btn btn-warning'>Edit</a></td>";
                echo "<td><a href='delete.php?id=" . $row['id_member'] . "' class='btn btn-danger'>Delete</a></td>";
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
