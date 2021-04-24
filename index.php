<?php include 'inc/header.php'; ?>
<?php include 'inc/home_page_banner.php'; ?>
<?php include 'database/conn.php'; ?>

    <div class="products-wrap border-top-0">
      <div class="container-fluid">
        <div class="row no-gutters products">

                <?php

                $results = mysqli_query($conn, "SELECT * FROM products");
                $rows = mysqli_num_rows($results);

                if($rows){
                    while($row = mysqli_fetch_array($results)){?>


                    <div class="col-6 col-md-6 col-lg-4">
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
    
<?php include 'inc/home_page_banner1.php'; ?>

<?php include 'inc/home_page_slider.php'; ?>

<?php include 'inc/home_page_banner2.php'; ?>

<?php include 'inc/footer.php'; ?>