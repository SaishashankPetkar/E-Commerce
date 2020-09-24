<?php
require "includes/common.php";
if (!isset($_SESSION['email'])) 
{ header('location: index.php'); }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Lifestyle Store</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/stylesetting.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<div class="navbar navbar-inverse navbar-fixed-top">
		<div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>                        
                    </button>
                    <a class="navbar-brand" href="index.php">Lifestyle Store</a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <li><a href="settings.php"><span class="glyphicon glyphicon-user"></span> Settings</a></li>
                    <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container center_div">
            <div class="row">
                <div class="col-xs-4">
                    <h1> Change Password </h1>
                    <form action="settings_script.php" method="POST">
                        <div class="form-group">
                            <input type="password"  class="form-control" name="oldpassword"  placeholder="Old Password">
                        </div>
                        <div class="form-group">
                            <input type="password"  class="form-control" name="newpassword" placeholder="New Password">
                        </div>
                        <div class="form-group">
                            <input type="password"  class="form-control" name="retypenewpassword" placeholder="Re-type New Password">
                        </div>
                        <a class="btn btn-primary ">Change</a>
                    </form>
                </div>
            </div>
        </div>
        <footer>
			<center>
			<p>Copyright © Lifestyle Store. All Rights Reserved | Contact Us: +91 90000 00000</p>
		    </center>
	    </footer>
</body>
</html>