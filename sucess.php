<?php
require "includes/common.php";
if(!isset($_SESSION['email']))
{
  header('location: index.php');
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Lifestyle Store</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/stylesucess.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<div class="navbar navbar-inverse navbar-fixed-top">
	    <div class="container">
            <div class="navbar-header">
                <a class="navbar-brand" href="index.php">Lifestyle Store</a>
            </div>
        </div>
    </div>
    <?php
        $user_id=$_SESSION['id'];
        $item_id=$_GET['item_id'];
        $query="UPDATE users_items SET status='Confirmed' WHERE user_id='$user_id' AND item_id IN ('$item_id' AND (status='Added to cart'))";
        $result=mysqli_query($con,$query) or die(mysqli_error($con) . "query not executed");
         
    ?>
    <div class="container center_div">
    	<h1>Your order is confirmed. <br>Thank you for shopping with us. <br>
    		<a href="products.php">Click here</a> to purchase any other item
    	</h1>
    </div>
    <footer>
			<center>
			<p>Copyright © Lifestyle Store. All Rights Reserved | Contact Us: +91 90000 00000</p>
		    </center>
	</footer>
</body>
</html>
