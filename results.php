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
						<h3> Quiz Results :) </h3>
						<?php
$title = "Quiz Results";
echo "<title>$title</title>";
if (isset ($_POST['submit'])) {

  $q1 =  $_POST['q1'];
  $q2 = $_POST['q2'];
  $q3 =  $_POST['q3'];
  $q4 =  $_POST['q4'];
  $q5 =  $_POST['q5'];
  $q6 =  $_POST['q6'];
  $q7 =  $_POST['q7'];
  $q8 =  $_POST['q8']; 
  $q9 =  $_POST['q9'];
  $q10 =  $_POST['q10'];
}
$score = 0;


	
	
	if ($q1 == "Paolo") {
		$score1 = 1;
	}
	 elseif ($q1 == "Rachel"){ 
	 	$score1 = 0;
	 }
	 elseif ($q1 == "Chandler"){ 
	 	$score1 = 0;
	 }
	 elseif ($q1 == "Phoebe"){ 
	 	$score1 = 0;
	 	}	
	 elseif ($q1 == ""){ 
	   	$score1 = 0;
	}

	if ($q2 == "He thought she had drinking problem") {
		$score2 = 1;
	}
	 elseif ($q2 == "He was gay"){ 
	 	$score2 = 0;
	 }
	 elseif ($q2 == "He likes Phoebe"){ 
	 	$score2 = 0;
	 }
	 elseif ($q2 == "There was someone else"){ 
	 	$score2 = 0;
	 	}	
	 elseif ($q2 == ""){ 
	   	$score2 = 0;
	}

	if ($q3 == "Clint") {
		$score3 = 1;
	}
	 elseif ($q3 == "Don"){ 
	 	$score3 = 0;
	 }
	 elseif ($q3 == "Phil"){ 
	 	$score3 = 0;
	 }
	 elseif ($q3 == "George"){ 
	 	$score3 = 0;
	 	}	
	 elseif ($q3 == ""){ 
	   	$score3 = 0;
	}

	if ($q4 == "Chandler") {
		$score4 = 1;
	}
	 elseif ($q4 == "Rachel"){ 
	 	$score4 = 0;
	 }
	 elseif ($q4 == "Phoebe"){ 
	 	$score4 = 0;
	 }
	 elseif ($q4 == "Joey"){ 
	 	$score4 = 0;
	 	}	
	 elseif ($q4 == ""){ 
	   	$score4 = 0;
	}

	if ($q5 == "Marcel") {
		$score5 = 1;
	}
	 elseif ($q5 == "Chichi"){ 
	 	$score5 = 0;
	 }
	 elseif ($q5 == "Lapoo"){ 
	 	$score5 = 0;
	 }
	 elseif ($q5 == "Bob"){ 
	 	$score5 = 0;
	 	}	
	 elseif ($q5 == ""){ 
	   	$score5 = 0;
	}

	if ($q6 == "Vermont") {
		$score6 = 1;
	}
	 elseif ($q6 == "Opera"){ 
	 	$score6 = 0;
	 }
	 elseif ($q6 == "Italy"){ 
	 	$score6 = 0;
	 }
	 elseif ($q6 == "Paris"){ 
	 	$score6 = 0;
	 	}	
	 elseif ($q6 == ""){ 
	   	$score6 = 0;
	}

	if ($q7 == "Kiwi") {
		$score7 = 1;
	}
	 elseif ($q7 == "Peanuts"){ 
	 	$score7 = 0;
	 }
	 elseif ($q7 == "Walnuts"){ 
	 	$score7 = 0;
	 }
	 elseif ($q7 == "Strawberry"){ 
	 	$score7 = 0;
	 	}	
	 elseif ($q7 == ""){ 
	   	$score7 = 0;
	}

	if ($q8 == "Joey") {
		$score8 = 1;
	}
	 elseif ($q8 == "Chandler"){ 
	 	$score8 = 0;
	 }
	 elseif ($q8 == "Monica"){ 
	 	$score8 = 0;
	 }
	 elseif ($q8 == "Phoebe"){ 
	 	$score8 = 0;
	 	}	
	 elseif ($q8 == ""){ 
	   	$score8 = 0;
	}

	if ($q9 == "Seven") {
		$score9 = 1;
	}
	 elseif ($q9 == "Two"){ 
	 	$score9 = 0;
	 }
	 elseif ($q9 == "Eight"){ 
	 	$score9 = 0;
	 }
	 elseif ($q9 == "Eleven"){ 
	 	$score9 = 0;
	 	}	
	 elseif ($q9 == ""){ 
	   	$score9 = 0;
	}

	if ($q10 == "To get his cold") {
		$score10 = 1;
	}
	 elseif ($q10 == "She has a crush on him"){ 
	 	$score10 = 0;
	 }
	 elseif ($q10 == "They were playing soon the bottle"){ 
	 	$score10= 0;
	 }
	 elseif ($q10 == "It was a bet"){ 
	 	$score10 = 0;
	 	}	
	 elseif ($q10 == ""){ 
	   	$score10= 0;
	}



		$total = $score + $score1 + $score2 + $score3 + $score4 + $score5 + $score6 + $score7 + $score8 + $score9 + $score10;
{

echo<<<EOT
				<table>
				<tr><td align ="center" ><font face = "georgia" size ="4" color= "blue"><b>Your score is:  $total</b></font></td></tr>
				
			</table>

			<a href="profile.php"> Click here to go back</a>
	
EOT;

}

?>

					</div>

				</div>


			</section>

		
			<footer>&copy;Designed by Sai Charan</footer>


	</body>

</html>
