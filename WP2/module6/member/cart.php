<?php
session_start();
include_once "../settings/connection.php";
include_once "../settings/check_session_after_login.php";
include('header.php');
?>
      <div class="hero_area">
         <?php 
         include('menu.php')
         ?>
         <section class="inner_page_head">
            <div class="container_fuild">
               <div class="row">
                  <div class="col-md-12">
                     <div class="full">
                        <h3>Cart Items</h3>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- end inner page section -->
         <!-- product section -->
         <?php
         if (isset($_SESSION['message_success'])) {
             echo '<div class="alert-success" style="margin:20px;padding:20px">' . $_SESSION['message_success'] . '</div>';
             unset($_SESSION['message_success']);
         }

         // Check if 'cart' cookie exists
         if (isset($_COOKIE['cart'])) {
             $cartProductQuantities = json_decode($_COOKIE['cart'], true); // Decode as an associative array

             if (!empty($cartProductQuantities)) {
                 // Fetch product details based on product IDs
                 $productIds = implode(',', array_keys($cartProductQuantities));
                 $query = "SELECT * FROM product WHERE id_product IN ($productIds)";
                 $result = mysqli_query($connection, $query)or die("Query failed: " . mysqli_error($connection));

                 while ($row = mysqli_fetch_assoc($result)) {
                 ?>
                     <div class="row" style="padding:50px;border-bottom: 1px solid black">
                         <div class="col-md-2">
                             <div class="box">
                                 <div class="img-box">
                                     <img src="<?php echo $row['foto_produk']; ?>" alt="" style="width:100%">
                                 </div>
                             </div>
                         </div>
                         <div class="col-md-8">
                             <div class="box">
                                 <div class="detail-box">
                                     <h5><?php echo $row['nama_produk']; ?></h5>
                                 </div>
                                 <div class="detail-box">
                                     <h5 style="color:orange;">
                                         Rp. <?php echo number_format($row['harga'], 0); ?>
                                     </h5>
                                 </div>
                                 <div class="detail-box">
                                     <label for="quantity_<?php echo $row['id_product']; ?>">Quantity:</label>
                                     <input type="number" name="quantity_<?php echo $row['id_product']; ?>" value="<?php echo $cartProductQuantities[$row['id_product']]; ?>" min="1">
                                 </div>
                             </div>
                         </div>
                         <div class="col-md-2">
                            <div class="box">
                                <div class="detail-box">
                                    <button onclick="removeItem(<?php echo $row['id_product']; ?>)" class="btn btn-danger">Remove</button>
                                </div>
                            </div>
                        </div>
                     </div>
                 <?php
                 }
                 ?>
                  <div class="row" style="text-align: center; margin-top: 20px;margin-bottom:20px">
                      <div class="col-md-12">
                          <a href="checkout.php" class="btn btn-primary">Checkout</a>
                      </div>
                  </div>
             <?php
             } else {
                 echo '<h1 style="text-align:center;margin:50px">Your cart is empty</h1>';
             }
         } else {
             echo '<h1 style="text-align:center;margin:50px">Your cart is empty</h1>';
         }
         ?>
         <!-- end product section -->
<?php
include('footer.php');
?>
