<!DOCTYPE html>
<?php
include("includes/mysqli_connect.php");
session_start();

 if(!isset($_SESSION['login_user'])){
      header("location:home.php");
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
    <nav>
  <a href="loggedin.php"><img id="snkrs" src="images/snkrs.jpeg"></a>
  <div>
    <ul>
	<a href='loggedout.php'><li id='login'>Log Out</li></a>
    </ul>
  </div>
</nav>

<div class="jumbotron text-xs-center" style="background-color:black;">
  <h1 class="display-1" style="color:orange;">Thank You!</h1>
  <p class="lead" style="color:white;"><strong>Please check your email</strong> for further order details.</p>
  <hr>
  <p class="lead">
  <ul>
    <a href="loggedin.php"><li style="color:white;">Continue to homepage</li></a>
  </ul>
  </p>
</div>
</body>
</html>
