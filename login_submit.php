<?php
require "includes/common.php";
$email_id=mysqli_real_escape_string($con,$_POST['email']);
$passwords=mysqli_real_escape_string($con,$_POST['password']);
$passwords=md5($passwords);
$login="SELECT id, email FROM users WHERE email='$email_id' And password='$passwords'";
$login_result=mysqli_query($con,$login) or die(mysqli_error($con));
if (mysqli_num_rows($login_result)==0) {
	echo "Enter Correct Email ID And Password";
}
else{
	$row=mysqli_fetch_array($login_result);
	$_SESSION['email']=$email_id;
	$_SESSION['id']=$row['id'];
	header('location: products.php');
}
?>