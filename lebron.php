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
</head>
    <script src="snkrs.js"></script>
    
<body>
    

     
<?php include('includes/nav.php');
    include('includes/welcomeMsg.php');?>
     <div id="exitImg">
        X
    
    </div>
    
    
    <div id="fDiv">
        </div>
  

       <div class="fotorama caroDisplay" data-height="600" data-width="1000" data-transitio="cross-fade" data-autoplay="true" align="center">

<div data-img="images/lbj1.jpg"> </div>
<div data-img="images/lbj2.jpg"> </div>
<div data-img="images/lbj3.jpg"> </div>
<div data-img="images/lbj4.jpg"> </div>
    </div>
    <div id="img1Div">
    
    <img class="sizy"  id="img1" src="images/lbj1.jpg">
    
    <img class="sizy" id="img2" src="images/lbj2.jpg">
    
    </div>
     <div id="img3Div">
    
    <img class="sizy" id="img3" src="images/lbj3.jpg">
        
    <img class="sizy" id="img4" src="images/lbj4.jpg">
    
    </div>
    
    <div id="description">
    
        <h6>LBJ XVI</h6><h2>THRONES</h2><p>$225</p>
        <p>This NBA All-Star weekend we will see a new colorway of LeBron’s signature sneaker. The Nike Lebron XVI KC “Watch the Throne” keeps it subtler than other Nike All-Star game sneakers, inspired by Kanye’s and Jay-Z’s famous tour, these boast a black Battleknit 2.0 upper with gold accents and multicolored floral print laces.</p>
        
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