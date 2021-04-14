<!DOCTYPE html>

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
  <a href="home.php"><img id="snkrs" src="images/snkrs.jpeg"></a>
  <div>
    <ul>
	<li id='login'><a>Join/Login</a></li>
      <li>
          <a href="cart.php"><i class="fa fa-shopping-cart" id="icon"></i></a>
          </li>
        </ul>
  </div>
</nav>
    
    
    <div id="fDiv">
        </div>
    <form id="formy" action="login.php" method="post">
        <br>
      <h3 class="x">X</h3>
        <img src="images/plus.png" id="logoLogin">
        <br><br>
        <h3>YOUR ACCOUNT FOR EVERYTHING NIKE</h3>
        <br>
    <input type="email" id="email" name="emailLogin" placeholder="&nbsp;&nbsp;&nbsp;Email" required><br>
    <input type="password" id="password" name="passLogin" placeholder="&nbsp;&nbsp;&nbsp;Password" required><br>
    <button type="submit" value="submit" id="log">LOG IN</button><br><br>
        <p id="notMember">Not a member? <u>Join now</u></p>
    
    
    </form>
    
    <form id="formy2" action="join.php" method="post">
      <h3 class="x">X</h3>
        <img src="images/plus.png" id="logoLogin"><br><br>
        <h3>BECOME A MEMBER</h3><br>
    <input type="email" id="email" name="emailJoin" placeholder="&nbsp;&nbsp;&nbsp;Email" required><br>
    <input type="password" id="password" name="passJoin" placeholder="&nbsp;&nbsp;&nbsp;Password" required><br>
        <input type="text" id="firstName" name="firstJoin" placeholder="&nbsp;&nbsp;&nbsp;First Name" required><br>
        <input type="text" id="lastName" name="lastJoin" placeholder="&nbsp;&nbsp;&nbsp;Last Name" required><br>
        <input type="date" id="birth" name="birthJoin" placeholder="&nbsp;&nbsp;&nbsp;Date of Birth" required><br>
        <div id="gender">
        <button type="button" id="male" value="MALE">Male</button>
        <button type="button" id="female" value="FEMALE">Female</button>
            </div>
        <input type="hidden" name="genderJoin" id="genderJoin">
        <br>
    <button type="submit" value="submit" id="log2">JOIN</button>
    </form>
    
    
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