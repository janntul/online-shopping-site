<?php include 'inc/header.php'; ?>
<?php include 'database/conn.php'; ?>
    
    <div class="bg-light py-3">

    </div>  

      <div class="site-section">
        <div class="container">


  <?php


            if(isset($_GET['id'])){
              $id = $_GET['id'];
            }

            $query = "SELECT * FROM products WHERE product_id = $id";

            $results = mysqli_query($conn, $query);

            $rows = mysqli_num_rows($results);

            if($rows){
                while($row = mysqli_fetch_array($results)){?>


            <div class="row">
              <div class="col-md-6">
                <div class="border">
                  <img src="admin/uploads/product_image/<?php echo $row['product_image']; ?>" alt="Image" class="img-fluid">
                </div>
              </div>
              <div class="col-md-6">
                <h2 class="text-black"><?php echo $row['product_name']; ?></h2>
                <p><?php echo $row['product_desc']; ?></p>
                <p><strong class="text-primary h4">$<?php echo $row['product_price']; ?></strong></p>
                <div class="mb-1 d-flex">
                  <label for="option-sm" class="d-flex mr-3 mb-3">
                    <span class="d-inline-block mr-2" style="top:-2px; position: relative;"><input type="radio" id="option-sm" name="shop-sizes"></span> <span class="d-inline-block text-black">Small</span>
                  </label>
                  <label for="option-md" class="d-flex mr-3 mb-3">
                    <span class="d-inline-block mr-2" style="top:-2px; position: relative;"><input type="radio" id="option-md" name="shop-sizes"></span> <span class="d-inline-block text-black">Medium</span>
                  </label>
                  <label for="option-lg" class="d-flex mr-3 mb-3">
                    <span class="d-inline-block mr-2" style="top:-2px; position: relative;"><input type="radio" id="option-lg" name="shop-sizes"></span> <span class="d-inline-block text-black">Large</span>
                  </label>
                  <label for="option-xl" class="d-flex mr-3 mb-3">
                    <span class="d-inline-block mr-2" style="top:-2px; position: relative;"><input type="radio" id="option-xl" name="shop-sizes"></span> <span class="d-inline-block text-black"> Extra Large</span>
                  </label>
                </div>


                <form action="add_to_cart.php" method="GET">
                <div class="input-group mb-3" style="max-width: 120px;">
                    <strong>Quantity : </strong><input required="required" type="text" name="q"><input type="hidden" name="id" value="<?php echo $id; ?>">
                </div>

                <!-- <p><a href="add_to_cart.php?id=<?php echo $id; ?>&&q = " class="buy-now btn btn-sm height-auto px-4 py-3 btn-primary">Add To Cart</a></p> -->

                <input type="submit" class="buy-now btn btn-sm height-auto px-4 py-3 btn-primary" value="Add To Cart">
              </form>

              </div>
            </div>


<?php


                }
            }

        ?>


        </div>
      </div>

    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="title-section text-center col-12">
            <h2 class="text-uppercase">More Products</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 block-3 products-wrap">
            <div class="nonloop-block-3 owl-carousel">

                <?php

                $results = mysqli_query($conn,"SELECT * FROM products");
                $rows = mysqli_num_rows($results);

                if($rows){
                    while($row = mysqli_fetch_array($results)){?>

                        <div class="product">
                            <a href="shopsingle.php?id=<?php echo $row['product_id']; ?>" class="item">
                                <img src="admin/uploads/product_image/<?php echo $row['product_image']; ?>" alt="Image" class="img-fluid">
                                <div class="item-info">
                                    <h3><?php echo $row['product_name']; ?></h3>
                                    <span class="collection d-block"><?php echo $row['product_tag']; ?></span>
                                    <strong class="price">$<?php echo $row['product_price']; ?></strong>
                                </div>
                            </a>
                        </div>




                        <?php
                    }

                }

                ?>

            </div>
          </div>
        </div>
      </div>
    </div>



              <script type="text/javascript">
              
               var  x =  document.getElementById("quantity").value;
              
                   
              </script>

<?php include 'inc/footer.php'; ?>