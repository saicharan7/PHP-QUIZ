<?php

session_start();

$error='';

if (isset($_POST['submit'])) {
	if (empty($_POST['username'] || empty($_POST['password']))) {
		$error='Invalid Username/Password';
		}
		else
		{
			$username=$_POST['username'];
			$password=$_POST['password'];

			$mysqli= new mysqli('localhost','root','','users');

			if ($mysqli->connect_errno) {
				echo "<p>Mysql error no{$mysqli->connect_errno} : {$mysqli->connect_error}</p>";
				exit();
			}

			$username=stripslashes($username);
			$password=stripslashes($password);
			$username=mysqli_real_escape_string($mysqli,$username);
			$password=mysqli_real_escape_string($mysqli,$password);

			$sql=$mysqli->query("SELECT * FROM users WHERE password='$password' AND username='$username'");

			$rows=mysqli_num_rows($sql);

			$_SESSION['login_user']=$username;
			header("location: profile.php");
		}
	
	mysqli_close($mysqli);
}

?>