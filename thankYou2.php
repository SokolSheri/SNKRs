<?php
include("includes/mysqli_connect.php");
session_start();


       	
    
    if(isset($_SESSION['user_id'])){
          $q="DELETE FROM cart WHERE user_id = '$_SESSION[user_id]'";
            $r = mysqli_query($dbc, $q); 
            header('location:confirmation.php');
        } 
        


?>
    
    