 <nav>
     
    
  <form id='formy' action='login.php' method='post'>
        <br>
      <h3 class='x'>X</h3>
        <img src='images/plus.png' id='logoLogin'>
        <br><br>
        <h3>YOUR ACCOUNT FOR EVERYTHING NIKE</h3>
        <br>
     <input type="email" id="email" name="emailLogin" placeholder="&nbsp;&nbsp;&nbsp;Email" required><br>
    <input type="password" id="password" name="passLogin" placeholder="&nbsp;&nbsp;&nbsp;Password" required><br>
    <button type='submit' value='submit' id='log'>LOG IN</button><br><br>
        <p id='notMember'>Not a member? <u>Join now</u></p>
    
    
    </form>
    
    <form id='formy2' action='join.php' method='post'>
      <h3 class='x'>X</h3>
        <img src='images/plus.png' id='logoLogin'><br><br>
        <h3>BECOME A MEMBER</h3><br>
  <input type="email" id="email" name="emailJoin" placeholder="&nbsp;&nbsp;&nbsp;Email" required><br>
    <input type="password" id="password" name="passJoin" placeholder="&nbsp;&nbsp;&nbsp;Password" required><br>
        <input type="text" id="firstName" name="firstJoin" placeholder="&nbsp;&nbsp;&nbsp;First Name" required><br>
        <input type="text" id="lastName" name="lastJoin" placeholder="&nbsp;&nbsp;&nbsp;Last Name" required><br>
        <input type="date" id="birth" name="birthJoin" placeholder="&nbsp;&nbsp;&nbsp;Date of Birth" required><br>
        <div id='gender'>
        <button type='button' id='male' value='MALE'>Male</button>
        <button type='button' id='female' value='FEMALE'>Female</button>
            </div>
        <input type='hidden' name='genderJoin' id='genderJoin'>
        <br>
    <button type='submit' value='submit' id='log2'>JOIN</button>
    </form>
     

  
  <div>
    <ul>
        <?php if (isset($_SESSION['login_user'])){
   
    echo "<a href='loggedout.php'><li id='logOut'>Log Out</li></a>";
     echo "<a href='loggedin.php'><img id='snkrs' src='images/snkrs.jpeg'></a>";
	
	
	
    
    
} else{
    echo "<li id='login'><a>Join/Login</a></li>";
    echo "<a href='home.php'><img id='snkrs' src='images/snkrs.jpeg'></a>";
}
        
 ?>
      <li>
          <a href="cart.php"><i class="fa fa-shopping-cart" id="icon"></i></a>
          </li>
        </ul>
  </div>
</nav>