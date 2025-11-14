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
                        <h3>Product Grid</h3>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- end inner page section -->
         <!-- product section -->
         <section class="product_section layout_padding">
            <div class="container">
               <div class="heading_container heading_center">
                  <h2>
                     Our <span>products</span>
                  </h2>
               </div>
               <div class="row">
                  <?php
                  // Query untuk mengambil data produk dari database
                  $query = "SELECT * FROM product";
                  $result = mysqli_query($connection, $query);
                  while ($row = mysqli_fetch_assoc($result)) {
                  ?>
                  <div class="col-sm-6 col-md-4 col-lg-4">
                     <div class="box">
                        <div class="option_container">
                           <div class="options">
                              <a href="" class="option1">
                              Add To Cart
                              </a>
                              <a href="product_detail.php?id=<?php echo $row['id_product']?>" class="option2">
                                 View Detail
                              </a>
                           </div>
                        </div>
                        <div class="img-box">
                           <img src="<?= str_replace('../../../img/', '../../img/', $row['foto_produk']) ?>">
                        </div>
                        <div class="detail-box">
                           <h5>
                              <?php echo $row['nama_produk']?>
                           </h5>
                        </div>
                        <div class="detail-box">
                           <h5 style="color:orange;text-align: center">
                              Rp. <?php echo number_format($row['harga'],0)?>
                           </h5>
                        </div>
                     </div>
                  </div>
                  <?php
                  }
                  ?>
               </div>
            </div>
         </section>
         <!-- end product section -->
<?php
include('footer.php');
?>  