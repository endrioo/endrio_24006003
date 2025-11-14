<?php
session_start();
include_once "../../settings/connection.php";
include_once "../../settings/check_session_after_login.php";
include('../../../header.php');
include('../../../menu.php');

?>
<div class="container" style="padding-bottom:70px">
    <center style="padding-top:25px">
        <h1>Add Data Product Form</h1>
    </center>
    <?php 
    $message = "";
    if (isset($_SESSION['message'])) : $message = $_SESSION['message'];unset($_SESSION['message']); ?>
        <div class="alert <?php echo strpos($message, 'Failed') !== false ? 'alert-danger' : 'alert-success'; ?>">
            <?php echo $message; ?>
        </div>
    <?php endif; ?>
     <form action="add_process.php" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="product_name">Product Name:</label>
            <input type="text" class="form-control" name="product_name" required>
        </div>
        <div class="form-group">
            <label for="product_description">Product Description:</label>
            <textarea class="form-control" name="prod   uct_description" rows="4" required></textarea>
        </div>
        <div class="form-group">
            <label for="weight">Weight (Gram):</label>
            <input type="number" class="form-control" name="weight" required>
        </div>
        <div class="form-group">
            <label for="price">Price (Rp):</label>
            <input type="number" class="form-control" name="price" required>
        </div>
        <div class="form-group">
            <label for="product_photo">Product Photo:</label>
            <br>
            <input type="file" class="form-control" name="product_photo" accept="image/*" required>
        </div>
        <div class="row" style="margin-top:15px;">
            <div class="col-md-8">
            </div>
            <div class="col-md-2">
                <a href="index.php" class="btn btn-primary" style="background-color: red">Back to product list</a>
            </div>
            <div class="col-md-2">
                <button type="submit" class="btn btn-primary" style="width:100%">Add Product</button>
            </div>
        </div>
    </form>
</div>
<?php
include('../../../footer.php')
?>
