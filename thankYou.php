<?php
include("includes/mysqli_connect.php");
session_start();


       	
    
    if(isset($_SESSION['user_id'])){
           $q= "UPDATE sneakers_sizes INNER JOIN cart ON sneakers_sizes.sneaker_name = cart.sneaker_id SET sneakers_sizes.sneaker_stock= sneakers_sizes.sneaker_stock - 1 WHERE cart.user_id='$_SESSION[user_id]'";;
            $r = mysqli_query($dbc, $q); ;
        header('location:thankYou2.php');
        } 
        


?>
    
    