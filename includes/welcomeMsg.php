<?php if (isset($_SESSION['login_user'])){
    include("includes/mysqli_connect.php");
    $sql = "SELECT * FROM users WHERE user_id='$_SESSION[user_id]'";
	$result = mysqli_query($dbc,$sql);
	$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
    
	echo "<li id='welcome'>Hi, ".$row['first_name']."!</li>";
    
}
    
    ?>