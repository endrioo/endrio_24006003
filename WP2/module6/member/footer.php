<!-- footer start -->
      <footer>
         <div class="container">
            <div class="row">
               <div class="col-md-4">
                   <div class="full">
                      <div class="logo_footer">
                        <a href="#"><img width="210" src="images/logo.png" alt="#" /></a>
                      </div>
                      <div class="information_f">
                        <p><strong>ADDRESS:</strong> 28 White tower, Street Name New York City, USA</p>
                        <p><strong>TELEPHONE:</strong> +91 987 654 3210</p>
                        <p><strong>EMAIL:</strong> yourmain@gmail.com</p>
                      </div>
                   </div>
               </div>
               <div class="col-md-8">
                  <div class="row">
                  <div class="col-md-7">
                     <div class="row">
                        <div class="col-md-6">
                     <div class="widget_menu">
                        <h3>Menu</h3>
                        <ul>
                           <li><a href="#">Home</a></li>
                           <li><a href="#">About</a></li>
                           <li><a href="#">Services</a></li>
                           <li><a href="#">Testimonial</a></li>
                           <li><a href="#">Blog</a></li>
                           <li><a href="#">Contact</a></li>
                        </ul>
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="widget_menu">
                        <h3>Account</h3>
                        <ul>
                           <li><a href="#">Account</a></li>
                           <li><a href="#">Checkout</a></li>
                           <li><a href="#">Login</a></li>
                           <li><a href="#">Register</a></li>
                           <li><a href="#">Shopping</a></li>
                           <li><a href="#">Widget</a></li>
                        </ul>
                     </div>
                  </div>
                     </div>
                  </div>     
                  <div class="col-md-5">
                     <div class="widget_menu">
                        <h3>Newsletter</h3>
                        <div class="information_f">
                          <p>Subscribe by our newsletter and get update protidin.</p>
                        </div>
                        <div class="form_sub">
                           <form>
                              <fieldset>
                                 <div class="field">
                                    <input type="email" placeholder="Enter Your Mail" name="email" />
                                    <input type="submit" value="Subscribe" />
                                 </div>
                              </fieldset>
                           </form>
                        </div>
                     </div>
                  </div>
                  </div>
               </div>
            </div>
         </div>
      </footer>
      <!-- footer end -->
      <div class="cpy_">
         <p class="mx-auto">© 2021 All Rights Reserved By <a href="https://html.design/">Free Html Templates</a><br>
         
            Distributed By <a href="https://themewagon.com/" target="_blank">ThemeWagon</a>
         
         </p>
      </div>
      <!-- jQery -->
      <script src="js/jquery-3.4.1.min.js"></script>
      <!-- popper js -->
      <script src="js/popper.min.js"></script>
      <!-- bootstrap js -->
      <script src="js/bootstrap.js"></script>
      <!-- custom js -->
      <script src="js/custom.js"></script>
      <script>
          function addToCart(productId, quantity) {
              // Check if 'cart' cookie exists
              var cart = getCookie('cart');

              // If 'cart' cookie doesn't exist, create an empty object
              if (!cart) {
                  cart = {};
              } else {
                  // Parse the existing 'cart' cookie value
                  cart = JSON.parse(cart);
              }


              // Check if the product is already in the cart
              if (cart[productId]) {
                  // Increment the quantity if the product is already in the cart
                  cart[productId] += quantity;
              } else {
                  // Set the quantity if the product is not in the cart
                  cart[productId] = quantity;
              }

              // Convert the cart object to a JSON string and set it as the 'cart' cookie
              document.cookie = 'cart=' + JSON.stringify(cart) + '; path=/';

              alert('Product added to cart!');
          }

          function addToCartWithoutAlert(productId, quantity) {
              // Check if 'cart' cookie exists
              var cart = getCookie('cart');

              if (!cart) {
                  cart = {};
              } else {
                  cart = JSON.parse(cart);
              }


              if (cart[productId]) {
                  cart[productId] = quantity;
              } 
              document.cookie = 'cart=' + JSON.stringify(cart) + '; path=/';

          }

          function getCookie(name) {
              var value = "; " + document.cookie;
              var parts = value.split("; " + name + "=");
              if (parts.length == 2) return parts.pop().split(";").shift();
          }
           function deleteCookie(cookieName) {
              document.cookie = cookieName + '=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;';
          }

          function removeItem(productId) {
              // Check if 'cart' cookie exists
              var cart = getCookie('cart');

              // If 'cart' cookie exists, parse its value
              if (cart) {
                  cart = JSON.parse(cart);

                  // Check if the product is in the cart
                  if (cart[productId]) {
                      // Remove the product from the cart
                      delete cart[productId];

                      // Convert the updated cart object to a JSON string and set it as the 'cart' cookie
                      document.cookie = 'cart=' + JSON.stringify(cart) + '; path=/';

                      alert('Product removed from cart!');
                  } else {
                      alert('Product not found in cart!');
                  }
              } else {
                  alert('Cart is empty!');
              }
              location.reload();
          }
          document.addEventListener('DOMContentLoaded', function() {
             // Temukan semua elemen input dengan nama yang dimulai dengan "quantity_"
             var quantityInputs = document.querySelectorAll('input[name^="quantity_"]');

             // Tambahkan event listener untuk setiap elemen input
             quantityInputs.forEach(function(input) {
                 input.addEventListener('change', function() {
                     // Ambil ID produk dari nama input
                     var productId = input.name.replace('quantity_', '');

                     // Ganti ID produk menjadi integer
                     productId = parseInt(productId, 10);

                     // Ambil nilai kuantitas dari input
                    var quantity = parseInt(input.value, 10);

                     // Jalankan fungsi addToCart dengan ID produk dan kuantitas
                     addToCartWithoutAlert(productId, quantity);
                 });
             });
         });
      </script>
   </body>
</html>
