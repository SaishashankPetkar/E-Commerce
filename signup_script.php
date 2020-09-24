<?php
require "includes/common.php";
$name=mysqli_real_escape_string($con,$_POST['name']);
$email=mysqli_real_escape_string($con,$_POST['email']);
$r_email="/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/";
if (!preg_match($r_email, $email)) {
  echo "Incorrect email";
}
$password=mysqli_real_escape_string($con,$_POST['password']);
$password=md5($password);
$r_password="{6,}";
if (!preg_match($r_password, $password)) {
  echo "Password should have at-least 6 characters";
}
$contact=$_POST['contact'];
$r_contact=[789][0-9]{9};
if (!preg_match($r_contact, $contact)) {
  echo "Please enter correct contact number";
}
$city=mysqli_real_escape_string($con,$_POST['city']);
$address=mysqli_real_escape_string($con,$_POST['address']);

$signup="SELECT id FROM users WHERE email='$email' And password='$passwords'";
$signup_result=mysqli_query($con,$signup) or die(mysqli_error($con));
if (mysqli_num_rows($signup_result)>0) {
	echo "Email ID Already Exists";
}
else{
	$user_registration = "INSERT INTO users(name, email, password,contact,city,address) VALUES ('$name',
    '$email','$password', '$contact','$city','$address')";
  $user_registration_done = mysqli_query($con, $user_registration) or die(mysqli_error($con));
  $id=mysqli_insert_id($con);
	$_SESSION['email']=$email;
	$_SESSION['id']=$id;
	header('location: products.php');
}
?>
