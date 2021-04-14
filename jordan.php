<!DOCTYPE html>
<?php
session_start();


?>

<html lang="en">

<head>
    
    <title>SNKRS</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Fjalla+One" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link href="snkrs.css" type="text/css" rel="stylesheet">
    <link  href="http://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.css" rel="stylesheet">
    <script src="http://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.js"></script>
    
    <style>
    
       
    </style>
</head>
    <script src="snkrs.js">
    </script>
    

<body>
    
<?php include('includes/nav.php'); 
    include('includes/welcomeMsg.php');?>
    
    
    <div id="exitImg">
        X
    
    </div>
    
    <div id="fDiv">
        </div>
 
    

       <div class="fotorama caroDisplay" data-height="600" data-width="1000" data-transitio="cross-fade" data-autoplay="true" align="center">

<div data-img="images/mj1.jpg"> </div>
<div data-img="images/mj2.jpg"> </div>
<div data-img="images/mj3.jpg"> </div>
<div data-img="images/mj4.jpg"> </div>
    </div>
    <div id="img1Div">
    
    <img class="sizy" id="img1" src="images/mj1.jpg">
    
    <img class="sizy" id="img2" src="images/mj2.jpg">
    
    </div>
     <div id="img3Div">
    
    <img class="sizy" id="img3" src="images/mj3.jpg">
        
    <img class="sizy" id="img4" src="images/mj4.jpg">
    
    </div>
    
    <div id="description">
    
        <h6>AIR JORDAN 1</h6><h2>BREDS</h2><p>$190</p>
        <p>Arriving in stores in February 2018, the Air Jordan 1 Retro High OG ‘Bred Toe’ is a new spin on a classic design. The Chicago Bulls-inspired colorway combines elements of the ‘Bred’ and ‘Black Toe’ editions of the Air Jordan 1, executed on a premium leather build. The high-top features a black Swoosh on the white quarter panel, along with contrasting pops of red on the toe box, heel, collar, and outsole. The shoe stays true to its OG 1985 roots with Nike Air branding on the tongue tag and sockliner.</p>
        
        <form action="cartProc.php" method="get"> 
            
            <input type="button" class="shoeSize" id="8" value="8" placeholder="8">
            <input type="button" class="shoeSize" id="9" value="9" placeholder="9">    
            <input type="button" class="shoeSize" id="10" value="10" placeholder="10">
            <input type="button" class="shoeSize" id="11" value="11" placeholder="11">
            <input type="hidden" id="hiddenSize" name="size"><br>
            <button class="btn2" type="submit">ADD TO CART</button>
        </form>
        
        
    </div>
        
   
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>
</body>

</html>