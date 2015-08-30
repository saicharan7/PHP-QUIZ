<?php 
	require_once("function.php");
		session_start();
	if (login() == true) {
		redirect_to("profile.php");
	}
?>


<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>F.R.I.E.N.D.S</title>
		<link href='http://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Permanent+Marker' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" type="text/css" href="screen.css">

		<script type="text/javascript">
		window.onload=function(){
			var al=true;

			document.getElementsByTagName("form")[0].onsubmit=function(){
				var name = document.getElementById("username").value;
				var password = document.getElementById("password").value;
				var first = document.getElementById("first").value;
				var last = document.getElementById("last").value;
				var email = document.getElementById("email").value;
				var error="";

					if(name.length <=3 || name.length>=20){
						error += "\n\rInvalid name. ";
						al=false;	
					}

					if(password.length <=3 || password.length>=20){
						error += "\n\rInvalid Password. ";
						al=false;	
					}

					if (checkEmail(email) == false) {
					error += "\n\rInvalid Email.";
					al = false;
				    }

				    if(al==false){
				    	alert(error);
				    	return false;
				    }

			}

			function checkEmail(value){
				var pattern=/^([a-zA-Z0-9_.-])+@([a-zA-Z0-9_.-])+\.([a-zA-Z])+([a-zA-Z])+/;
				if(pattern.test(value)) return true;
				else return false;
			}

		}

		</script>

	</head>
	

	<body>
			<header class="row grey">
				
			</header>


			<section class="row-mid">
				<img src="images/logo.jpg" alt="Friends logo" width="960" >
			</section>

			<section class="row main">
				<div class="row-mid">
			     	<div class="logo "><a href="index.html">F.R.I.E.N.D.S</a></div>
						
					</div>
				</section>

				<section class="row main1">
					<div class="row-mid">
					
						<div class="con">
							
									<div id="login">
									<h1> Register </h1>
									<form method="post" action="<?=$_SERVER['PHP_SELF']?>" id="reg_form">
										<input type="text" placeholder="Username" name="username" id="username">
										<input type="password" placeholder="Password" name="password" id="password">
										<input type="text" placeholder="First Name" name="first" id="first">
										<input type="text" placeholder="Last Name" name="last" id="last">
										<input type="email" placeholder="Email Id" name="email" id="email">

										<input type="submit" name="submit" value="Register">
									</form>
									</div>
									<?php
								if (isset($_POST['submit'])) {
								
									$mysqli = new mysqli('localhost', 'root', '', 'users');
									
									if ($mysqli->connect_errno) {
										echo "<p>MySQL error no {$mysqli->connect_errno} : {$mysqli->connect_error}</p>";
										exit();
									}

									$username	= $_POST['username'];
									$password	= $_POST['password'];
									$first_name	= $_POST['first'];
									$last_name	= $_POST['last'];
									$email		= $_POST['email'];
								 
									
									$exists = 0;
									$result = $mysqli->query("SELECT username from users WHERE username = '{$username}' LIMIT 1");
									if ($result->num_rows == 1) {
										$exists = 1;
										$result = $mysqli->query("SELECT email from users WHERE email = '{$email}' LIMIT 1");
										if ($result->num_rows == 1) $exists = 2;	
									} else {
										$result = $mysqli->query("SELECT email from users WHERE email = '{$email}' LIMIT 1");
										if ($result->num_rows == 1) $exists = 3;
									}
								 
									if ($exists == 1) echo "<p>Username already exists!</p>";
									else if ($exists == 2) echo "<p>Username and Email already exists!</p>";
									else if ($exists == 3) echo "<p>Email already exists!</p>";
									else {
										
										$sql = "INSERT  INTO `users` (`id`, `username`, `password`, `first_name`, `last_name`, `email`) 
												VALUES (NULL, '{$username}', '{$password}', '{$first_name}', '{$last_name}', '{$email}')";
								 
										if ($mysqli->query($sql)) {
											redirect("login.php?msg=Registered successfully");
										} else {
											echo "<p>MySQL error no {$mysqli->errno} : {$mysqli->error}</p>";
											exit();
										}
									}
								}
								?>		

					</div>

				</div>


			</section>

		
			<footer>&copy;Designed by Sai Charan</footer>


	</body>

</html>