



<?php include 'database/conn.php';?>
<?php include 'inc/header.php'; ?>



    <div class="site-section">
      <div class="container">
        <div class="row mb-5">
          <form class="col-md-12" method="post">
            <div class="site-blocks-table">
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th class="product-thumbnail">Image</th>
                    <th class="product-name">Product</th>
                    <th class="product-price">Price</th>
                    <th class="product-quantity">Quantity</th>
                    <th class="product-total">Total</th>
                    <th class="product-remove">Remove</th>
                  </tr>
                </thead>
                <tbody>



                  <?php

                    $id = $_GET['id'];


                    $query = "SELECT * FROM carts";
                    $results = mysqli_query($conn, $query);

                    $rows = mysqli_num_rows($results);

                    if($rows){
                      while($row = mysqli_fetch_array($results)){


                          ?>
                            <tr>
                              <td class="product-thumbnail">
                                <img src="admin/uploads/product_image/<?php echo $row['image'] ;?>" alt="Image" class="img-fluid">
                              </td>
                              <td class="product-name">
                                <h2 class="h5 text-black"><?php echo $row['name'] ;?></h2>
                              </td>
                              <td><h2 class="h5 text-black">$<?php echo $row['price'] ;?></h2></td>
                              <td>
                                  <h2 h6 text-black><?php echo $row['quantity']; ?></h2>
                              </td>
                              <td><h2 class="h5 text-black">$<?php echo $row['total'] ;?></h2></td>
                              <td><a href="delete_from_cart.php?id=<?php echo $row['cart_id']; ?>" class="btn btn-primary height-auto btn-sm">X</a></td>
                            </tr>

                          <?php


                      }
                    }


                  ?>


                </tbody>
              </table>
            </div>
          </form>
        </div>

        <div class="row">
          <div class="col-md-6">
            <div class="row mb-5">
              <div class="col-md-6 mb-3 mb-md-0">
                <button class="btn btn-primary btn-sm btn-block">Update Cart</button>
              </div>
              <div class="col-md-6">
                <a href="shop.php">
                <button  class="btn btn-outline-primary btn-sm btn-block">Continue Shopping</button>
              </a>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <label class="text-black h4" for="coupon">Coupon</label>
                <p>Enter your coupon code if you have one.</p>
              </div>
              <div class="col-md-8 mb-3 mb-md-0">
                <input type="text" class="form-control py-3" id="coupon" placeholder="Coupon Code">
              </div>
              <div class="col-md-4">
                <button class="btn btn-primary btn-sm px-4">Apply Coupon</button>
              </div>
            </div>
          </div>
          <div class="col-md-6 pl-5">
            <div class="row justify-content-end">
              <div class="col-md-7">
                <div class="row">
                  <div class="col-md-12 text-right border-bottom mb-5">
                    <h3 class="text-black h4 text-uppercase">Cart Totals</h3>
                  </div>
                </div>
                <div class="row mb-3">
                  <div class="col-md-6">
                    <span class="text-black">Subtotal</span>
                  </div>
                  <div class="col-md-6 text-right">
                    <strong class="text-black">$230.00</strong>
                  </div>
                </div>
                <div class="row mb-5">
                  <div class="col-md-6">
                    <span class="text-black">Total</span>
                  </div>
                  <div class="col-md-6 text-right">
                    <strong class="text-black">$230.00</strong>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-12">
                    <button class="btn btn-primary btn-lg btn-block" onclick="window.location='checkout.php'">Proceed To Checkout</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

<?php include 'inc/footer.php'; ?>