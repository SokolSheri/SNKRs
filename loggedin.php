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
    
    
</head>
    <script src="snkrs.js">
    </script>
<body>
    <nav>
            <?php if (isset($_SESSION['login_user'])){
    include("includes/mysqli_connect.php");
    $sql = "SELECT * FROM users WHERE user_id='$_SESSION[user_id]'";
	$result = mysqli_query($dbc,$sql);
	$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
    
	echo "<li id='welcome'>Hi, ".$row['first_name']."!</li>";
}
	?>
	
  <a href="loggedin.php"><img id="snkrs" src="images/snkrs.jpeg"></a>
  <div>
    <ul>
	<a href='loggedout.php'><li id='logOut'>Log Out</li></a>
      <li>
          <a href="cart.php"><i class="fa fa-shopping-cart" id="icon"></i></a>
          </li>
        </ul>
  </div>
</nav>
    
    
    <div id="fDiv">
        </div>
    
    <div class="container-fluid">
  <div class="row">
    <div class="col-lg-4" style="padding: 0px;">
        <a href="jordan.php">
      <img class="jordans" src="images/mj1.jpg">
            <div class="hideMe">
        <h6 class="subby">AIR JORDAN I</h6>
        <h3>BREDS</h3>
                </div>
            <br>
       <button class="btn">BUY</button></a>
    </div>
    <div class="col-lg-4">
        <a href="lebron.php">
      <img class="jordans"src="images/lbj1.jpg">
       <div class="hideMe">
        <h6 class="subby">LBJ XVI</h6>
        <h3>THRONES</h3>
                </div>
            <br>
       <button class="btn">BUY</button></a>
    </div>
      <div class="col-lg-4">
          <a href="kd.php">
      <img class="jordans"src="images/kd1.jpg">
          <div class="hideMe">
        <h6 class="subby">KD 6s</h6>
        <h3>WTKD</h3>
                </div> 
              <br>
          <button class="btn">BUY</button></a>
    </div>
  </div>
  <div class="row">
      
    <div class="col-lg-4">
        <a href="pg.php">
      <img class="jordans"src="images/pg1.jpg">
        <div class="hideMe">
        <h6 class="subby">PG 3 </h6>
        <h3>NASA</h3>
                </div> 
            <br>
       <button class="btn">BUY</button></a>
    </div>
    <div class="col-lg-4">
        <a href="kobe.php">
      <img class="jordans"src="images/kobe1.jpg">
        <div class="hideMe">
        <h6 class="subby">ZOOM KOBE 7</h6>
        <h3>AS-GALAXY</h3>
                </div> 
            <br>
        <button class="btn">BUY</button></a>
    </div>
    <div class="col-lg-4">
        <a href="kyrie.php">
      <img class="jordans"src="images/ky1.jpg">
        <div class="hideMe">
        <h6 class="subby">KYRIE 4</h6>
        <h3>HALLOWEEN</h3>
                </div> 
            <br>
        <button class="btn">BUY</button></a>
    </div>
  </div>
</div>

        
</body>

</html>