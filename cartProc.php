<?php
include("includes/mysqli_connect.php");
session_start();

if($_SERVER["REQUEST_METHOD"] == "GET") {	
    
    if(isset($_GET['size']) && $_GET['size']!=""){
            $q="INSERT INTO cart (sneaker_id,user_id) VALUES('$_GET[size]',$_SESSION[user_id]);";
            $r = mysqli_query($dbc, $q); 
        header("location: cart.php");
  
        } else{
        header("location: cart.php");
    }
}

?>