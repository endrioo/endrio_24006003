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
                        <h3>Checkout</h3>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- end inner page section -->
         <!-- product section -->
         <?php
         // Check if 'cart' cookie exists
         $total = 0;
         if (isset($_COOKIE['cart'])) {
             $cartProductQuantities = json_decode($_COOKIE['cart'], true); // Decode as an associative array
             echo '<br><h1 style="border-bottom:1px solid black"><center><b>List Products</b></center></h1>';
             if (!empty($cartProductQuantities)) {
                 // Fetch product details based on product IDs
                 $productIds = implode(',', array_keys($cartProductQuantities));
                 $query = "SELECT * FROM product WHERE id_product IN ($productIds)";
                 $result = mysqli_query($connection, $query)or die("Query failed: " . mysqli_error($connection));
                 ?>
                 <form action="checkout_process.php" method="post" enctype="multipart/form-data">
                 <?php
                 while ($row = mysqli_fetch_assoc($result)) {
                 ?>
                     <div class="row" style="padding:50px;border-bottom: 1px solid black">
                         <div class="col-md-1">
                             <div class="box">
                                 <div class="img-box">
                                     <img src="<?php echo $row['foto_produk']; ?>" alt="" style="width:100%">
                                 </div>
                             </div>
                         </div>
                         <div class="col-md-11">
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
                                     <input type="number" name="quantity_<?php echo $row['id_product']; ?>" value="<?php echo $cartProductQuantities[$row['id_product']]; ?>" min="1" readonly="readonly">
                                 </div>
                                 <div class="detail-box">
                                    <label for="subtotal_<?php echo $row['id_product']; ?>">Subtotal:</label>
                                    <h5 style="color:orange;">
                                         Rp. <?php echo number_format($cartProductQuantities[$row['id_product']] * $row['harga'], 0); ?>
                                     </h5>
                                 </div>
                             </div>
                         </div>
                     </div>
                 <?php
                 $total += $cartProductQuantities[$row['id_product']] * $row['harga'];
                 }
                 ?>
                    <div class="row" style="text-align:right;padding:10px;border-bottom:1px solid black">
                        <div class="col-md-8">
                        </div>
                        <div class="col-md-4">
                             <h3><b>Total: <?php echo number_format($total,0);?></b></h3>
                        </div>
                       
                    </div>
                    <h1 style="border-bottom:1px solid black;margin-top:10px"><center><b>Order Form</b></center></h1>
                    <div style="padding:20px">
                        <div class="form-group">
                            <label for="receiver_name">Receiver Name:</label>
                            <input type="text" class="form-control" id="receiver_name" name="receiver_name" placeholder="Enter Receiver Name" required="required" value="<?php echo $_SESSION['nama_lengkap']?>">
                        </div>
                        <div class="form-group">
                            <label for="address">Address:</label>
                            <textarea class="form-control" id="address" name="address" placeholder="Enter Address" required="required"></textarea>
                        </div>
                        <div class="form-group">
                            <h5>Please transfer the nominal purchase of the product according to the total listed to the following account:
                            <ul>
                                <li>BCA-1234567890</li>
                                <li>Mandiri-1234567891</li>
                            </ul>
                        </div>
                        <div class="form-group">
                            <label for="upload_file">Upload Proof of Transfer:</label>
                            <input type="file" class="form-control" id="upload_file" name="upload_file" required="required">
                        </div>
                        <!-- Tombol Order -->
                        <div class="row" style="text-align: center; margin-top: 20px; margin-bottom: 20px;">
                           <div class="col-md-12">
                               <button type="submit" class="btn btn-primary">Order</button>
                           </div>
                        </div>
                    </div>
                </form>
             <?php
             } else {
                 header("location:cart.php");;
             }
         } else {
             header("location:cart.php");;
         }
         ?>
         <!-- end product section -->
<?php
include('footer.php');
?>    
