<!DOCTYPE html>
<html>
<head>
	<title>Heavy Vehicle Cover</title>

	<link rel="stylesheet" type="text/css" href="styles/ss.css">
	<link rel="stylesheet" type="text/css" href="styles/mainCSS.css">
	<link rel="stylesheet" type="text/css" href="styles/covers.css">

	<script defer src="js/covers.js"></script>

</head>

<body>
	
	<?php

        session_start();

        $e = $_SESSION["username"];

        $_SESSION["ins-type"] = "P004";

    
    ?>

    <?php include 'navigation.php'; ?>


	<br>

	<h1 align="center"><u>Heavy Vehicle Cover</u></h1>
	
	<div class="form">
		
		 <?php include 'vehicle_form.php' ?>
		
		<span class="right_text"><p class="details"><br><br>Heavy vehicle insurance is a specialized type of insurance coverage designed specifically for large vehicles such as trucks, buses, trailers, and other commercial vehicles. <br><br>This insurance provides financial protection against potential risks and damages associated with these vehicles and their operation.</p><br><br><br>

		<img src="main-img/heavy_vehicle.png"><br><br>
		<img src="main-img/school-bus.png">	


		</span>	
	</div>
	
	<br><br><br>

	<?php include 'footer.php'; ?>


	</body>

</html>