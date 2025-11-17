<?php
session_start();
include_once "../settings/connection.php";
include_once "../settings/check_session_after_login.php";
include('header.php');

// Validate product ID
if (!isset($_GET['id'])) {
    header("Location: product.php");
    exit();
}

$id = intval($_GET['id']);

// Query product
$query = "SELECT * FROM product WHERE id_product = $id LIMIT 1";
$result = mysqli_query($connection, $query);

if (mysqli_num_rows($result) === 0) {
    echo "<h2 style='text-align:center;padding:50px;'>Product not found</h2>";
    include('footer.php');
    exit();
}

$product = mysqli_fetch_assoc($result);
?>

<div class="hero_area">
<?php include('menu.php'); ?>

<section class="inner_page_head">
    <div class="container_fuild">
        <div class="row">
            <div class="col-md-12">
                <div class="full">
                    <h3><?= $product['nama_produk'] ?></h3>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="product_section layout_padding">
    <div class="container">
        <div class="row">

            <!-- Product Image -->
            <div class="col-md-6">
                <div class="img-box">
                    <img src="<?= str_replace('../../../img/', '../../img/', $product['foto_produk']) ?>"
                         style="width:100%;border-radius:10px;">
                </div>
            </div>

            <!-- Product Details -->
            <div class="col-md-6">
                <h2><?= $product['nama_produk'] ?></h2>
                <h3 style="color:orange;">Rp. <?= number_format($product['harga'],0) ?></h3>

                <p style="margin-top:20px;font-size:18px;">
                    <?= !empty($product['deskripsi_produk']) ? $product['deskripsi_produk'] : "No description available." ?>
                </p>

                <a class="option1" onclick="addToCart(<?php echo $row['id_product']; ?>,1)">
                    Add To Cart
                </a>

                <br><br>
                <a href="product.php" class="btn btn-secondary">
                    Back to Products
                </a>
            </div>

        </div>
    </div>
</section>

<?php include('footer.php'); ?>
