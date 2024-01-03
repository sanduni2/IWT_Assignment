<!DOCTYPE html>
<html>
<head>
	<title>Third Party Cover</title>

	<link rel="stylesheet" type="text/css" href="styles/ss.css">
	<link rel="stylesheet" type="text/css" href="styles/mainCSS.css">
	<link rel="stylesheet" type="text/css" href="styles/covers.css">

	<script defer src="js/covers.js"></script>

</head>

<body>
	
   <?php

        session_start();

        $e = $_SESSION["username"];

        $_SESSION["ins-type"] = "P006";

    
    ?>

    <?php include 'navigation.php'; ?>



	<br>

	<h1 align="center"><u>Third Party Cover</u></h1>
	
	<div class="form">
		
		 <?php include 'vehicle_form.php' ?>
		
		<span class="right_text"><p class="details"><br><br>Third-party insurance cover is a type of insurance that provides financial protection to the policyholder against claims made by third parties for bodily injury, death, or property damage caused by the policyholder's actions or negligence. <br><br>It is typically a mandatory requirement in most jurisdictions for certain types of vehicles and activities.</p><br><br><br>

		<img src="main-img/thirdpartyjpg.png"><br><br><br><br>
		


		</span>	
	</div>
	
	<br><br><br>

	<?php include 'footer.php'; ?>

	</body>

</html>