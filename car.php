<!DOCTYPE html>
<html>
<head>
	<title>Motor Car Cover</title>

	<link rel="stylesheet" type="text/css" href="styles/ss.css">
	<link rel="stylesheet" type="text/css" href="styles/mainCSS.css">
	<link rel="stylesheet" type="text/css" href="styles/covers.css">

	<script defer src="js/covers.js"></script>

</head>

<body>

   <?php

        session_start();

        $e = $_SESSION["username"];

        $_SESSION["ins-type"] = "P003";

    
    ?>

    <?php include 'navigation.php'; ?>


	<br>

	<h1 align="center"><u>Motor Car Cover</u></h1>
	
	<div class="form">
		
		 <?php include 'vehicle_form.php' ?>
		
		<span class="right_text"><p class="details"><br><br>Motor car insurance is a type of insurance coverage that provides financial protection for vehicles such as cars, SUVs, and other passenger vehicles. <br><br>It offers coverage against various risks and damages associated with owning and operating a motor vehicle.</p><br><br><br>

		<img src="main-img/Toyota-Prius1.png"><br><br><br><br>
		<img src="main-img/alto1.png">	


		</span>	
	</div>
	
	<br><br><br>

	<?php include 'footer.php'; ?>
	
	</body>

</html>