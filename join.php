<?php
include("includes/mysqli_connect.php");
session_start();

if($_SERVER["REQUEST_METHOD"] == "POST") {
	$email = mysqli_real_escape_string($dbc,$_POST['emailJoin']);
	$password = mysqli_real_escape_string($dbc,$_POST['passJoin']);
	$fName = mysqli_real_escape_string($dbc,$_POST['firstJoin']);
	$lName = mysqli_real_escape_string($dbc,$_POST['lastJoin']);
	$DOB = mysqli_real_escape_string($dbc,$_POST['birthJoin']);
	$Gender = mysqli_real_escape_string($dbc,$_POST['genderJoin']);
	
	$sql = "INSERT INTO users(first_name, last_name, gender, email, passwordd, dob) VALUES ('$fName', '$lName', '$Gender', '$email', '$password', '$DOB')";
	$result = mysqli_query($dbc,$sql);
	
	if($result){
		unset($email);
		unset($password);
		unset($fName);
		unset($lName);
		unset($DOB);
		unset($Gender);
		header("Location: home.php");
	} else {
		echo $result;
		echo $password;
		echo "<p> Something went wrong <p>";
	}
}
?>