<?php
if (isset($_POST['submit'])) {
	 $name=$_POST['username']; 
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
				<nav class="row-mid">
					<ul>
						<li><a href="#ross">Ross Geller</a></li>
						<li><a href="#rachel">Rachel Green</a></li>
						<li><a href="#monica">Monica Geller</a></li>
						<li><a href="#chandler">Chandler Bing</a></li>
						<li><a href="#phoebe">Phoebe Buffay</a></li>
						<li><a href="#joey">Joey Tribbiani</a></li>
					</ul>
				</nav>	
			</header>


			<section class="row-mid">
				<img src="images/logo.jpg" alt="Friends logo" width="960" >
			</section>

			<section class="row main">
				<div class="row-mid">
			     	<div class="logo ">F.R.I.E.N.D.S</div>
						
					</div>
				</section>

				<section class="row main1">
				<div class="row-mid">
					
					<div class="con">
						<h1><center>Welcome,<?php echo $name."!"; ?></center></h1>
						
					</div>
				</div>
			</section>	

		</section>
			<footer>&copy;Designed by Sai Charan</footer>


	</body>

</html>