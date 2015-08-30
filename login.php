<?php 
	include('logininfo.php');

	if (isset($_SESSION['login'])) {
			header("location: profile.php");
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
							<h1> User Login </h1>
							<form method="post" action="<?=$_SERVER['PHP_SELF']?>">
								<input type="text" placeholder="Username" name="username">
								<input type="password" placeholder="Password" name="password">
								<input type="submit" name="submit" value="Log In">
								<span><?php echo $error; ?></span>
							</form>
							</div>
						

					</div>

				</div>


			</section>

		
			<footer>&copy;Designed by Sai Charan</footer>


	</body>

</html>