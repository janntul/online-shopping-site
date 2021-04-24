<?php include 'database/conn.php'; ?>
                  <?php

                  $id = "";
                  $q = "";

                  if(isset($_GET['id']) && isset($_GET['q'])){
                    $id = $_GET['id'];
                    $q = $_GET['q'];
                  }
                    $pimage = "";
                    $pname = "";
                    $pprice = "";
                    $total = "";
                    $pid = "";

                    $query = "SELECT * FROM products WHERE product_id  = $id ";
                    $results = mysqli_query($conn, $query);

                    $rows = mysqli_num_rows($results);

                    if($rows){
                      while($row = mysqli_fetch_array($results)){

                          $pimage = $row['product_image'];
                          $pname = $row['product_name'];
                          $pprice = $row['product_price'] ;
                          $total = $row['product_price'] * $q;
                          $pid = $row['product_id'];
                      }
                    }
$query = "INSERT INTO carts(name,image,price ,quantity,total)VALUES('$pname','$pimage','$pprice',$q,'$total')";

                    $r = mysqli_query($conn, $query);

                    if($r){

                        header('Location: cart.php?id=20000');
                        exit;

                    }

                  ?>
  