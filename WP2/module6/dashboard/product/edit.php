<?php
session_start();
include_once "../../settings/connection.php";
include_once "../../settings/check_session_after_login.php";
include('../../../header.php');
include('../../../menu.php');

if (isset($_GET['id'])) {
    $product_id = $_GET['id'];
    $query = "SELECT * FROM product WHERE id_product = $product_id";
    $result = mysqli_query($connection, $query);

    if (mysqli_num_rows($result) === 1) {
        $row = mysqli_fetch_assoc($result);
        $product_name = $row['nama_produk'];
        $product_description = $row['deskripsi_produk'];
        $weight = $row['berat'];
        $price = $row['harga'];
        $product_photo = $row['foto_produk'];
    }
}

?>

<div class="container" style="padding-bottom:70px">
    <center style="padding-top:25px">
        <h1>Edit Product</h1>
    </center>
    <?php 
    $message = "";
    if (isset($_SESSION['message'])) : $message = $_SESSION['message'];unset($_SESSION['message']); ?>
        <div class="alert <?php echo strpos($message, 'Failed') !== false ? 'alert-danger' : 'alert-success'; ?>">
            <?php echo $message; ?>
        </div>
    <?php endif; ?>
    <form action="edit_process.php" method="post" enctype="multipart/form-data">
        <input type="hidden" name="product_id" value="<?php echo $product_id; ?>">
        <div class="form-group">
            <label for="product_name">Product Name:</label>
            <input type="text" class="form-control" name="product_name" value="<?php echo $product_name; ?>" required>
        </div>
        <div class="form-group">
            <label for="product_description">Product Description:</label>
            <textarea class="form-control" name="product_description" rows="4" required><?php echo $product_description; ?></textarea>
        </div>
        <div class="form-group">
            <label for="weight">Weight (Gram):</label>
            <input type="number" class="form-control" name="weight" value="<?php echo $weight; ?>" required>
        </div>
        <div class="form-group">
            <label for="price">Price (Rp):</label>
            <input type="number" class="form-control" name="price" value="<?php echo $price; ?>" required>
        </div>
        <div class="form-group">
            <label for="product_photo">Product Photo:</label>
            <br>
            <?php
            if (!empty($product_photo)) {
                echo "<img src='" . $product_photo . "' width='100' height='100'>";
            } else {
                echo "No previous photo available.";
            }
            ?>
            <br>
            <input type="file" class="form-control" name="product_photo" accept="image/*">
        </div>
        <div class="row" style="margin-top:15px;">
            <div class="col-md-8">
            </div>
            <div class="col-md-2">
                <a href="index.php" class="btn btn-primary" style="background-color: red">Back to product list</a>
            </div>
            <div class="col-md-2">
                <button type="submit" class="btn btn-primary" style="width:100%">Update Product</button>
            </div>
        </div>
    </form>
</div>
<?php
include('../../../footer.php');
?>

