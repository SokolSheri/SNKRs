<?php
include("includes/mysqli_connect.php");
session_start();

if($_SERVER["REQUEST_METHOD"] == "POST") {
	$email = mysqli_real_escape_string($dbc,$_POST['emailLogin']);
	$password = mysqli_real_escape_string($dbc,$_POST['passLogin']);
	
	$sql = "SELECT * FROM users WHERE email = '$email' and passwordd = '$password'";
	$result = mysqli_query($dbc,$sql);
	$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
	$active = $row['user_id'];
	
	$count = mysqli_num_rows($result);
	
	if($count == 1){
		$_SESSION['login_user'] = $email;
        $_SESSION['user_id']=$active;
		header("location: loggedin.php");
	}else{
		header("location: home.php");
	}
}
?>