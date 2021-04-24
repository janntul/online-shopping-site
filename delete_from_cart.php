<?php
include 'database/conn.php';

$id = $_GET['id'];


$query = "DELETE FROM `carts` WHERE `carts`.`cart_id` = $id";

$result = mysqli_query($conn, $query);

$id = 1000;

if($result){
	header('Location: cart.php?id=20000');
	exit;

}





?>