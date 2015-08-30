<?php
	include('session.php');
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
						<b id="welcome">Welcome : <i><?php echo $login_session; ?></i></b><br>
						<p><a href="quiz.php">Click here to play the quiz!</a></p><br>
						<b id="logout"><a href="logout.php">Log Out</a></b>


					</div>

				</div>


			</section>

		
			<footer>&copy;Designed by Sai Charan</footer>


	</body>

</html>