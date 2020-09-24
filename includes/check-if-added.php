<?php
function check_if_added_to_cart($item_id)
{
	require "includes/common.php";
	$check= "SELECT * FROM users_items WHERE item_id='$item_id' AND user_id ='$user_id' AND status='Added to 
	cart'";
	$check_result=mysqli_query($con,$check) or die(mysqli_error($con));
	if (mysqli_num_rows($check_result)>=1) {
		return 1;
	}
	else{
		return 0;
	}
}
?>