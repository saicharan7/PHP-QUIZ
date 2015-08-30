<?php

$mysqli= new mysqli('localhost','root','','users');

if ($mysqli->connect_errno) {
	echo "<p> Mysqli Error no {$mysqli->connect_errno} : {$mysqli->connect_error} </p>";
	exit();
}

session_start();

$user_check=$_SESSION['login_user'];

$session_sql=$mysqli->query("SELECT username FROM users WHERE username='$user_check'");

$row=mysqli_fetch_assoc($session_sql);

$login_session=$row['username'];

if(!isset($login_session))
{
	mysqli_close($mysqli);
	header("location: login.php");
}	
?>