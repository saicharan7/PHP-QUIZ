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

		<style type="text/css">
		form{
			background: #000;
		}

		a{
			color:#fff;
			text-decoration:none;
		}
		a:hover{
			color: #3399cc;
		}
		</style>


	</head>
	

	<body>
			<header class="row grey">
				
			</header>


			<section class="row-mid">
				<img src="images/logo.jpg" alt="Friends logo" width="960" >
			</section>

			<section class="row main">
				<div class="row-mid">
			     	<div class="logo "><a href="index.html" style="color:#000;">F.R.I.E.N.D.S</a></div>
						
					</div>
				</section>

				<section class="row main1">
				<div class="row-mid">
					
					<div class="con">
						<b id="welcome">Welcome : <i><?php echo $login_session; ?></i></b><br>

						<form action="results.php" method="post">
								  <?php
								if (isset($_POST['submit'])) {

								}
								$n = 10; 
								$links=array('Who did the cat that fell on Ross belong to?<br><br> &nbsp;&nbsp;&nbsp;&nbsp;
														<input type="radio" name="q1" value="Rachel">Rachel<br>&nbsp;&nbsp;&nbsp;&nbsp;
														<input type="radio" name="q1" value="Chandler">Chandler<br>&nbsp;&nbsp;&nbsp;&nbsp;
														<input type="radio" name="q1" value="Paolo">Paolo<br>&nbsp;&nbsp;&nbsp;&nbsp;
														<input type="radio" name="q1" value="Phoebe">Phoebe</p>', 
								               
											    ' Why did Fun Bobby break up with Monica? <br><br>&nbsp;&nbsp;&nbsp;&nbsp; 
														<input type="radio" name="q2" value="He was gay">He was gay<br>&nbsp;&nbsp;&nbsp;&nbsp;
														<input type="radio" name="q2" value="He thought she had drinking problem"> He thought she had drinking problem<br>&nbsp;&nbsp;&nbsp;&nbsp;
														<input type="radio" name="q2" value="He likes Phoebe">He likes Phoebe<br>&nbsp;&nbsp;&nbsp;&nbsp;
														<input type="radio" name="q2" value="There was someone else">There was someone else</p>',
								               
											    'Chandler wanted to change his name to?<br><br>&nbsp;&nbsp;&nbsp;&nbsp; 
														<input type="radio" name="q3" value="Dpn"> Don<br>&nbsp;&nbsp;&nbsp;&nbsp;
														<input type="radio" name="q3" value="Phil"> Phil<br>&nbsp;&nbsp;&nbsp;&nbsp;
														<input type="radio" name="q3" value="George">George<br>&nbsp;&nbsp;&nbsp;&nbsp;
														<input type="radio" name="q3" value="Clint">Clint</p>', 
								              
											    'Who\'s mom did Ross kiss?<br><br>&nbsp;&nbsp;&nbsp;&nbsp; 
														<input type="radio" name="q4" value="Rachel">Rachel<br>&nbsp;&nbsp;&nbsp;&nbsp;
														<input type="radio" name="q4" value="Chandler">Chandler<br>&nbsp;&nbsp;&nbsp;&nbsp;
														<input type="radio" name="q4" value="Phoebe"> Phoebe<br>&nbsp;&nbsp;&nbsp;&nbsp;
														<input type="radio" name="q4" value="Joey"> Joey</p>',
														
												'What is the name of Ross\'s Monket?<br><br>&nbsp;&nbsp;&nbsp;&nbsp; 
														<input type="radio" name="q5" value="Lapoo"> Lapoo<br>&nbsp;&nbsp;&nbsp;&nbsp;
														<input type="radio" name="q5" value="Chichi"> Chichi<br>&nbsp;&nbsp;&nbsp;&nbsp;
														<input type="radio" name="q5" value="Marcel"> Marcel<br>&nbsp;&nbsp;&nbsp;&nbsp;
														<input type="radio" name="q5" value="Bob"> Bob</p>',
														
												'Where did Ross and Emily go to on their first date?<br><br>&nbsp;&nbsp;&nbsp;&nbsp; 
														<input type="radio" name="q6" value="Opera"> Opera<br>&nbsp;&nbsp;&nbsp;&nbsp;
														<input type="radio" name="q6" value="Vermont">Vermont<br>&nbsp;&nbsp;&nbsp;&nbsp;
														<input type="radio" name="q6" value="Italy">Italy<br>&nbsp;&nbsp;&nbsp;&nbsp;
														<input type="radio" name="q6" value="Paris"> Paris</p>',
														
												'What is Ross allergetic to?<br><br>&nbsp;&nbsp;&nbsp;&nbsp; 
														<input type="radio" name="q7" value="Strawberry"> Strawberry<br>&nbsp;&nbsp;&nbsp;&nbsp;
														<input type="radio" name="q7" value="Walnuts"> Walnuts<br>&nbsp;&nbsp;&nbsp;&nbsp;
														<input type="radio" name="q7" value="Peanuts">Peanuts/Me<br>&nbsp;&nbsp;&nbsp;&nbsp;
														<input type="radio" name="q7" value="Kiwi">Kiwi</p>',
														
												'Who says they are 1/16 Portuguese??<br><br>&nbsp;&nbsp;&nbsp;&nbsp; 
														<input type="radio" name="q8" value="Monica"> Monica<br>&nbsp;&nbsp;&nbsp;&nbsp;
														<input type="radio" name="q8" value="Joey">Joey<br>&nbsp;&nbsp;&nbsp;&nbsp;
														<input type="radio" name="q8" value="Phoebe"> Phoebe<br>&nbsp;&nbsp;&nbsp;&nbsp;
														<input type="radio" name="q8" value="Chandler">Chandler</p>',
														
												'How many sisters does Joey have? <br><br>&nbsp;&nbsp;&nbsp;&nbsp; 
														<input type="radio" name="q9" value="Two"> Two<br>&nbsp;&nbsp;&nbsp;&nbsp;
														<input type="radio" name="q9" value="Eight"> Eight<br>&nbsp;&nbsp;&nbsp;&nbsp;
														<input type="radio" name="q9" value="Eleven"> Eleven<br>&nbsp;&nbsp;&nbsp;&nbsp;
														<input type="radio" name="q9" value="Seven"> Seven</p>',
														
												'Why did Phoebe kiss Gunther? <br><br>&nbsp;&nbsp;&nbsp;&nbsp; 
														<input type="radio" name="q10" value="She has a crush on him">She has a crush on him<br>&nbsp;&nbsp;&nbsp;&nbsp;
														<input type="radio" name="q10" value="They were playing soon the bottle">They were playing soon the bottle<br>&nbsp;&nbsp;&nbsp;&nbsp;
														<input type="radio" name="q10" value="It was a bet">It was a bet<br>&nbsp;&nbsp;&nbsp;&nbsp;
														<input type="radio" name="q10" value="To get his cold"> To get his cold</p>',
														
												
								            ); 
											
								// displaying the array in random until $n number is satisfied
								$rand_keys = array_rand($links, $n);
								echo "<center>". "<br><table><tr><td>";

								echo "1.&nbsp;&nbsp;". $links[$rand_keys[0]] . "<br>";
								echo "</td></tr><tr><td>";
								echo "2.&nbsp;&nbsp;".$links[$rand_keys[1]] . "<br>";
								echo "</td></tr><tr><td>";
								echo "3.&nbsp;&nbsp;". $links[$rand_keys[2]] . "<br>";
								echo "</td></tr><tr><td>";
								echo "4.&nbsp;&nbsp;".$links[$rand_keys[3]] . "<br>";
								echo "</td></tr><tr><td>";
								echo "5.&nbsp;&nbsp;".$links[$rand_keys[4]] . "<br>";
								echo "</td></tr><tr><td>";
								echo "6.&nbsp;&nbsp;".$links[$rand_keys[5]] . "<br>";
								echo "</td></tr><tr><td>";
								echo "7.&nbsp;&nbsp;".$links[$rand_keys[6]] . "<br>";
								echo "</td></tr><tr><td>";
								echo "8.&nbsp;&nbsp;".$links[$rand_keys[7]] . "<br>";
								echo "</td></tr><tr><td>";
								echo "9.&nbsp;&nbsp;".$links[$rand_keys[8]] . "<br>";
								echo "</td></tr><tr><td>";
								echo "10.&nbsp;&nbsp;".$links[$rand_keys[9]] . "<br>";
								echo "</td></tr><tr><td>";
								
								echo "</td></tr></table>";
								echo "<center>". "<br>";


								?>
								  <input name="submit" type="submit" id="submit" value="Submit"/>
								</form>


						<p><b id="logout"><a href="logout.php">Log Out</a></b></p>


					</div>

				</div>


			</section>

		
			<footer>&copy;Designed by Sai Charan</footer>


	</body>

</html>