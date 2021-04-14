<?php
include("includes/mysqli_connect.php");
session_start();

if($_SERVER["REQUEST_METHOD"] == "GET") {	
    
    if(isset($_GET['removeItem']) && $_GET['removeItem']!=""){
            $q="DELETE FROM cart WHERE cart_item_id = '$_GET[removeItem]'";
            $r = mysqli_query($dbc, $q); 
            header('location:cart.php');
  
        } else{
            header('location:cart.php'); 
       
    }
}

?>