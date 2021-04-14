<!DOCTYPE html>
<?php
session_start();
require('includes/mysqli_connect.php');


   if(!isset($_SESSION['login_user'])){
      header("location:home.php");
      die();
   }

?>
<html lang="en">

<head>
    
    <title>SNKRS</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Fjalla+One" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link href="snkrs.css" type="text/css" rel="stylesheet">
    
    
    
</head>
    <script src="snkrs.js">
    </script>
<body>
<?php include('includes/nav.php'); ?>
    
    
    <div id="fDiv">
        </div>
   
   
    
    <div id="all">
    
     <div id="items">
    <h5>CART</h5>
    <ul>
         <?php
        
       
        
        
		
		 $query = "SELECT sneakers_sizes.sneaker_pic, sneakers_sizes.sneaker_size,sneakers_sizes.sneaker_price,cart.cart_item_id,cart.sneaker_id FROM (sneakers_sizes INNER JOIN cart ON sneakers_sizes.sneaker_name = cart.sneaker_id) WHERE cart.user_id='$_SESSION[user_id]';";
		 $run = mysqli_query($dbc, $query);
         
        $subtotal=0;
        $beforeCon='';
        $convert=0;
		 
		 while($row = mysqli_fetch_array($run, MYSQLI_ASSOC)){
             $beforeCon=$row['sneaker_price'];
             $convert=(int)$beforeCon;
            $subtotal= $subtotal+$convert;
             
             $snkrName=$row['sneaker_id'];
             $snkrName =preg_replace('/[0-9]+/', '', $snkrName); 
             echo '<div id="indItem">';
			 echo "<img id='smallPhoto' src='images/{$row['sneaker_pic']}'>";
             echo "<h6 id='cartSnkName'>".$snkrName."</h6>";
             echo "<h6 id='mensShoe'>Men's Shoe</h6>";
			 echo '<h6 id="cartSnkSize">Size '.$row['sneaker_size'].'</h6>';
			 echo "<h6 id='cartSnkPrice'>$".$row['sneaker_price']."</h6>";
             echo "<form method='get' action='removeItem.php'>";
             echo "<input type='hidden' value='$row[cart_item_id]' name='removeItem'>";
             echo "<input type='submit' id='remove' value='Remove'>";
             echo "</form>";
             echo '</div>';
		 }
		 
        
		
		 ?>
        
        
        
        </ul>
    
    
    </div>
    
    
    
   
        
    <form id="checkoutForm" action="thankYou.php" method="post">
        
      <h4 id="checkoutSummary">SUMMARY</h4> 
         <p id="checkoutText">Subtotal : $<?php echo $subtotal;?></p> 
        <p id="checkoutText">Estimated Shipping and Handling: $9.95</p> 
        <p id="checkoutText">Estimated Tax: $<?php echo $subtotal*.03;?></p> 
        <br>
        <h6 id="total">Total: $<?php echo $subtotal*1.03+9.95; ?></h6> 
        
    <button type="submit" value="checkOutBtn" id="checkOutBtn">CHECK OUT</button>
    
    
    </form>
    </div>
        
     
   
    
  
    
    
        
</body>

</html>