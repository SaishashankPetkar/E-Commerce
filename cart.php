<?php
require "includes/common.php";
if(isset($_SESSION['email']))
{
  header('location: products.php');
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Lifestyle Store</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/stylecart.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<?php
       require "includes/header.php";
      $user_id=$_SESSION['id'];
      $query="SELECT users_items.item_id,users_items.user_id,users_items.status,items.name ,items.price, users.name FROM users_items JOIN items ON users_items.item_id=items.id JOIN users ON users.id=users_items.user_id WHERE users_items.user_id='$user_id'" or die(mysqli_error($con));
      $sqc= mysqli_query($con, $query) or die(mysqli_error($con));
      $cr= mysqli_num_rows($sqc);
      if ($cr==0) {
        ?>
        <div class="container center_div">
            <table class="table table-striped">
                <thead>
                    <tr>
                      <th>Name</th>
                      <th>User id</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                       <td><?php echo $cr['name'];?></td>
                       <td><?php echo $cr['user_id'];?></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="container center_div">
            <table class="table table-striped">
                <thead>
                    <tr>
                      <th>Product id</th>
                      <th>Product name</th>
                      <th>Price</th>
                      <th>Status</th>
                      <th></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                       <td><?php echo $cr['item_id'];?></td>
                       <td><?php echo $cr['name'];?></td>
                       <td><?php echo "₹".$cr['price'];?></td>
                       <td><?php echo $cr['status'];?></td>
                       <td> <a href="cart-remove.php?id=<?$sr['item_id']?>" class='remove_item_link'> Remove</a></td>
                    </tr>
                </tbody>
            </table>
        </div>   
        </div>
            <div class="row" style="margin-top:50px;">
               <table class="col-xs-offset-3 col-xs-6 table-hover" >
                   <thead class="text-primary">
                           <tr>
                               <th>Product id</th>
                               <th>Product name</th>
                               <th>Price</th>
                               <th>Status</th>
                               <th>Remove</th>
                           </tr>
                       </thead>
                       <tbody>
                       <tr>
                           <td><?php echo $cr['item_id'];?></td>
                           <td><?php echo $cr['item_name'];?></td>
                           <td><?php echo "₹".$cr['price'];?></td>
                           <td><?php echo $cr['status'];?></td>
                           <td> <a href="cart-remove.php?id=<?$sr['item_id']?>" class='remove_item_link'>Remove</a></td>
                       </tr>
                       <?php
                        while($cr= mysqli_fetch_array($sqc))
                        {
                            $id="";
                            $id.=$cr["item_id"].",";
                        ?>
                        <tr>
                           <td><?php echo $cr['item_id'];?></td>
                           <td><?php echo $cr['item_name'];?></td>
                           <td><?php echo "₹".$cr['price'];?></td>
                           <td><?php echo $cr['status'];?></td>
                           <td> <a href="cart-remove.php?id=$iteam_id" class="remove_item_link"> Remove</a></td>
                        </tr>
                        <?php } ?>
                            <tr>
                                <th colspan="2">SUM</th>
                                <th style="border-left: none">
                                   <?php
                                   $su="SELECT SUM(price) FROM items JOIN users_items ON users_items.item_id=items.id WHERE users_items.user_id='$user_id'";
                                   $suc= mysqli_query($con, $su) ; 
                                   $sum= mysqli_fetch_array($suc);
                                   echo $sum['SUM(price)'];
                                   ?>
                                </th>
                                <th colspan="2">ONLY</th>
                           </tr>
                       </tbody>
               </table>
           </div>
       </div>
       <?php }
        else{
            ?>
            <p class="text-center text-danger">Please ! Enter the items first in cart</p>
            <?php
            }          
     require "includes/footer.php";
    ?>
</body>
</html>