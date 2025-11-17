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
                        <h3>Order History</h3>
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

         ?>
        <div class="row" style="padding:50px">
            <table id="orderTable" class="table table-striped" style="width:100%;">
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
                        echo '<td>
                            <a href="'.$row['proof_of_payment'].'" target="_blank">
                                <img src="'.$row['proof_of_payment'].'"
                                    style="width:25%;border-radius:10px;">
                            </a>
                        </td>';
                        echo "<td>Rp. " . number_format($total,0) . "</td>";
                        echo "<td>";
                        include('../settings/status_order.php');
                        echo "</td>";
                        echo "</tr>";
                        $no++;
                    }
                    ?>
                </tbody>
            </table>
        </div>
<?php
include('footer.php');
?> 
