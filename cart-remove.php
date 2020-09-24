<?php
require "includes/common.php";
$user_id=$_SESSION['id'];
$item_id=$_GET['id'];
$delete="DELETE FROM users_items WHERE user_id=$user_id and item_id=$item_id";
mysqli_query($con,$delete);
header('location:cart.php');

?>