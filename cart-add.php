<?php
require "includes/common.php";
$user_id=$_POST[$_SESSION['id']];
$item_id=$_GET['id'];
$added="INSERT INTO user_items(user_id, item_id, status) VALUES('$user_id', '$item_id', 'Added to cart')";
$added_result=mysqli_query($con, $added) or die(mysqli_error($con));
header('location: products.php');
?>