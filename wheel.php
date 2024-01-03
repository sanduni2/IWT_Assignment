<!DOCTYPE html>
<html>
<head>
	<title>Three Wheel Cover</title>

	<link rel="stylesheet" type="text/css" href="styles/ss.css">
	<link rel="stylesheet" type="text/css" href="styles/mainCSS.css">
	<link rel="stylesheet" type="text/css" href="styles/covers.css">

	<script defer src="js/covers.js"></script>

</head>

<body>
	


   <?php

        session_start();

        $e = $_SESSION["username"];

        $_SESSION["ins-type"] = "P002";

    
    ?>

    <?php include 'navigation.php'; ?>



	<br>

	<h1 align="center"><u>Three Wheel Cover</u></h1>
	
	<div class="form">
		
		 <?php include 'vehicle_form.php' ?>
		
		<span class="right_text"><p class="details"><br><br>Three-wheel insurance is a type of insurance coverage designed specifically for vehicles that have three wheels. <br><br>These vehicles can include motorcycles with sidecars, three-wheeled motorcycles, and other three-wheelers. <br><br>Three-wheel insurance provides financial protection against various risks and damages associated with owning and operating these vehicles. </p><br><br><br>

		<img src="main-img/bajaj-three.png"><br><br><br><br>
		<img src="main-img/Piaggo.png">	


		</span>	
	</div>
	
	<br><br><br>

	<?php include 'footer.php'; ?>

	</body>

</html>