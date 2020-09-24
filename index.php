<?php
require "includes/common.php"
?>
<!DOCTYPE html>
<html>
<head>
	<title>Lifestyle Store</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<?php
    if (isset($_SESSION['email'])) 
    { header('location: products.php'); }
?>
<?php
require "includes/header.php"
?>
    <div id="banner_image">
    	<div class= “container”>
    		<div id="banner_content">
            <center>
    		   <h1>We sell lifestyle.</h1>
			   <a href="products.php" class ="btn btn-danger btn-lg active">Shop Now</a>
            </center>
    		</div>
    	</div>
    </div>
    <div class="row text-center alide">
        <div class="col-md-3 col-sm-6">
            <a href="products.php">
            <div class="thumbnail">
                <img src="img/1.jpg" alt="Cameras">
                <div class="caption">
                    <h3>Cameras</h3>
                    <p>Choose among the best available .</p>
                </div>
            </div>
            </a>
        </div>
        <div class="col-md-3 col-sm-6">
            <a href="products.php">
            <div class="thumbnail">
                <img src="img/7.jpg" alt="Watches">
                <div class="caption">
                    <h3>Watches</h3>
                    <p>Original watches for you.</p>
                </div>
            </div>
            </a>
        </div>
        <div class="col-md-3 col-sm-6">
            <a href="products.php">
            <div class="thumbnail">
                <img src="img/shirt.jpg" alt="Shirts">
                <div class="caption">
                    <h3>Shirts</h3>
                    <p>Our Exquisite collection of shirts</p>
                </div>
            </div>
            </a>
        </div>
    </div>
    <?php
    require "includes/footer.php"
    ?>
</body>
</html>