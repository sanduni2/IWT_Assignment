<!DOCTYPE html>
<html>
<head>
	<title>Vehicle insurance</title>

	<link rel="stylesheet" type="text/css" href="styles/ss.css">
	<link rel="stylesheet" type="text/css" href="styles/about.css">
	

</head>

<body>

		<?php
			session_start();

			$e = $_SESSION["username"];

			if($e === 0){
				include ('home_navigation.php');
			}
			else{

				include 'navigation.php';
			}

		?>

	

	<br>


	<img src="images/building (1).jpg" alt="Board of Directors" width="100%" height="300px">

	<div class="topic">
		<div class="about">
			<h4><i><u>About Us</u></i></b>
		</div>

		<br>

	</div>	

	<div class="anime">
		Auto Guard is one of Sri Lanka`s largest and most diversified conglomerates. Auto Guard is currently one of the fastest growing insurance companies in Sri Lanka.<br><br>
		Auto Guard grow and evolve into one of the country`s leading insurance providers of today in ar elatively short period of time.<br><br>
		The global strength and solid capitalization of the Auto Guard Group, coupled with local expertise and business know how, have been Auto Guard`s powerful formula for success.<br><br>
		We pride on supporting our client`s business stratergy by understanding their risk profile and needs, and providing tailor-made solutions from our world class products and services. 

	</div><br>


	<div class="vision">
		<img src="images/our_vision(1).jpeg" class="vis" width="60%" height="300px">
		<h2>Our Vision</h2>

		<p>To be the customer`s first choice for Risk Protection.<br><br>
		To be the preferred employer in the insurance industry.<br><br>
		To lead in value in vehicle insuarnce through innovation and service excellence.<br><br>
		</p>
	</div>


	<div class="vision ">
		<img src="images/our_mission.jpg" class="mis" width="65%" height="300px">

		<h2>Our Mission</h2>


		<p>We provide risk protection, that will deliver value to our customers through a responsible professionals.<br><br>
		As a responsible customer-focused market leader, we will understand the insurance needs of our customer and give them a maximum service.<br><br>
		</p>

	</div>


	<div class="vision">
		<p><img src="images/guidance (2).jpg" class="vis" width="70%" height="300px">

		<h2>Guiding Principles</h2>

		<p>The customer is our most valueable asset and everything we do is aimed at winning a customer or retaining a customer.<br><br>
		</p>
	</div>


	<?php include 'footer.php'; ?>

</body>
</html>