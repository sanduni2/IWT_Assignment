<!DOCTYPE html>
<html>
<head>
	<title>Insurance Packages</title>

	<link rel="stylesheet" type="text/css" href="styles/ss.css">
	<link rel="stylesheet" type="text/css" href="styles/mainCSS.css">
	

</head>

<body>
	



	<?php

		session_start();

		$e = $_SESSION["username"];


	?>

	<?php include 'navigation.php'; ?>



	<br>

	<img src="main-img/main.jpg" class="title-img">

	<h1 class="title">Different types of Auto Guard Insurance Company </h1>

	<div class="item-container">

		<a href="bike.php">
			<div class="item-box">
				<img src="main-img/bike.png" class="item-img">
				<div class="item-intro i1">
					<h1> Morter Bike Cover </h1>
					<p> Best financial protection against various 
					risks and damages associated with owning and operating a motorbike. </p>
				</div>
			</div>
		</a>

		<a href="wheel.php">
			<div class="item-box">
				<img src="main-img/wheel.png" class="item-img">
				<div class="item-intro i1">
					<h1> Three-Wheel Cover </h1>
					<p> Insurance coverage designed specifically 
					for vehicles that have three wheels. </p>
				</div>
			</div>
		</a>

		<a href="car.php">
			<div class="item-box">
				<img src="main-img/car.png" class="item-img">
				<div class="item-intro i1">
					<h1> Morter Car Cover </h1>
					<p> Best insurance coverage that provides 
					financial protection for vehicles such as cars. </p>
				</div>
			</div>
		</a>

	</div>

	<div class="item-container">

		<a href="truck.php">
			<div class="item-box">
				<img src="main-img/truck.png" class="item-img">
				<div class="item-intro i2">
					<h1> Heavy Vehicle Cover </h1>
					<p> A specialized type of insurance coverage designed
					 specifically for large vehicles.</p>
				</div>
			</div>
		</a>

		<a href="ladies.php">
			<div class="item-box">
				<img src="main-img/ladies.png" class="item-img">
				<div class="item-intro i2">
					<h1> Ladies Only Cover </h1>
					<p> A specialized type of insurance policy
					 specifically designed for lady drivers.</p>
				</div>
			</div>
		</a>

		<a href="third-party.php">
			<div class="item-box">
				<img src="main-img/third-party.png" class="item-img">
				<div class="item-intro i2">
					<h1> Third-Party Cover </h1>
					<p> Insurance that provides financial protection to 
						the policyholder against claims made by third parties.</p>
				</div>
			</div>
		</a>
		
	</div>

	<?php include 'footer.php'; ?>

</body>
</html>