<!DOCTYPE html>
<html>
<head>
	<title>Vehicle insurance Home</title>

	<link rel="stylesheet" type="text/css" href="styles/ss.css">

	<script defer src="js/myscript.js"></script>
	

</head>

<body>
	
	<?php

		include ('home_navigation.php');

		session_start();

		$_SESSION["username"] = 0;

	?>

	<br>

		<h1 class="name">Auto Guard </h1>

		<div class="logo">
			<img src="images/AuotoGuardLogo.png" width="280" hight="250">
		</div>

	<br>
	<div class="xyz">

		<div class="mainpic kk">
			<img src="images/image1.png">
		</div>

		<div class="mainpic">
			<img src="images/image2.png">
		</div>

		<div class="mainpic">
			<img src="images/image3.png">
		</div>

		<div class="mainpic">
			<img src="images/image4.png">
		</div>
	</div>

	<div class="abc">
		<a class="btn" href="login_account.php"> Get Started </a> <br>

		Auto Guard General Motor Insurance <br>
		<font size="20"> Shield your Wheel </font><br>
		<i>-Exceptional Vehicle Insurance at Your Fingertips- </i><br><br>
		Join our family of satisfied customers and experience the<br>
		 freedom of the open road with unmatched peace of mind.<br>
		  Say goodbye to lengthy waiting times and<br>
		  endless paperwork. In an hour claim amount on your hand.

	</div>
	
	
	<h1 class="what"> Why do we use motor insurance ? </h1>

	<p class="what_p">Vehicle insurance is also known as motor insurance. There are different types of auto insurance. In the case  of auto 		insurance, it is a policy to provide financial protection to drivers in the event of an accident, theft or damage to the 				vehicle. It varies depending on the type of policy chosen by the policyholder.
			In case of car insurance, the insured  driver does not provide financial provision for his injuries coused by the damage to his property. Here, the damage to the car is assessed and financial provisions are given in installments. 
			The law says that car insurance is essential for drivers. Failure to obtain proper insurance coverage may result in license suspension or various penalties.</p>

	<img src="images/intro.jpg" class="intro-img">



	<div class="containerpara">

		<div class="slide-container active">
			<div class="slide">
				<div class="contentpara">
					<h2>Did your car meet with an accident? </h2>
					<p> Don`t worry! If you had been get a insurance, 
						we will give you the whole money within a short 
						time after the accident. </p>
					<a href="login_account.php" class=btnpara>More</a>
				</div>

				<div class="imagepara">
					<img src="images/p1.jpg">
				</div>

			</div>

		</div>

		<div class="slide-container">
			<div class="slide">
				<div class="contentpara">
					<h2>Did you have to wait for a long time to get the insurance after the accident?</h2>
					<p>Our service agent will come to the accident place 
						and give you your money within the half an hour 
						from accident.</p>
					<a href="login_account.php" class=btnpara>More</a>
				</div>

				<div class="imagepara">
					<img src="images/p2.jpg">
				</div>

			</div>
			
		</div>

		<div class="slide-container">
			<div class="slide">
				<div class="contentpara">
					<h2>Feeling afraid that the insurance company won't cover your vehicle if it's condemned?</h2>
					<p>If your vehicle condemned our company guaranteed 
						to give you the whole estimated value of 
						your vehicle.</p>
					<a href="login_account.php" class=btnpara>More</a>
				</div>

				<div class="imagepara">
					<img src="images/p3.jpg">
				</div>

			</div>
			
		</div>

		<div id="prev" onclick="prev()"> < </div>
		<div id="next" onclick="next()"> > </div>


	</div>



	<div class="dis">
		<h1> Why should you choose our insurance service?</h1>
		<p>Car insurance is a deal between you and an insurance company. It helps you if something bad happens while you're driving. Here are some reasons why it's important:</p>

		<ul>
			<li>Auto Guard is one of Sri Lanka`s largest and most diversified insurance company. Auto Guard is currently one of the fastest growing insurance companies in Sri Lanka.</li>
			<li>Auto Guard grow and evolve into one of the country`s leading insurance providers of today in a relatively short period of time.</li>
			<li>Auto Guard is the only insurance company in Sri Lanka to receive the award which was given by World Insurance Authority for strong financial stability.</li>
			<li>We are also the only insurance company which receive ISO 9001:2005 quality management certificate for strong governance and continual improvement throughout whole branches. </li>
			<li>Auto Guard has fast recovery and fast claim system. Auto Guard give substantially large bonus for all policyholders in every year end.</li>
		</ul>

		<img src="images/key.png">
	</div>


	

	<div class="container">
		<div class="box" style="--clr:#5b98eb;">
			<div class="content">
				<img src="images/sector1.png" class="icon">
					<div class="text">
						<h3>Benefits</h3>
						<p> The benefits you get from vehicle insurance</p>

						<a href="Benefits.php"> Read more</a>
					</div>
				
			</div>
		</div>
	

		<div class="box" style="--clr:#5b98eb;"> 
			<div class="content">
				<img src="images/sector2.png" class="icon">
					<div class="text">
						<h3>Eligibility</h3>
						<p>Eligibility you need to meet to get auto insurance</p>

						<a href="Eligibility.php"> Read more</a>
					</div>
				
			</div>
		</div>
	


		<div class="box" style="--clr:#5b98eb;">
			<div class="content">
				<img src="images/sector3.png" class="icon">
					<div class="text">
						<h3>Why do we put vehicle insurance?</h3>
						<p>What are the reasons for vehicle insurance</p>

						<a href="why-insurance.php"> Read more</a>
					</div>
				
			</div>
		</div>
	</div>

	<footer>
		
		<div class="frow">

			<div class="fcol">
				<img src="images/car1-i.png" class="flogo">
				<p> Auto Guard is the best vehicle insurance 
				company that offers many policy packages with
				 affordable price and fast claim system.
				  Come and experience the Auto Guard.  </p>
			</div>

			<div class="fcol"> 
				<h3>Office</h3>
				<p class="fp">Kandy road </p>
				<p class="fp">Malabe, Colombo </p>
				<p class="fp">Sri Lanaka </p>
				<p class="email-id">chamikadilshan1123@gmail.com </p>
				<h4>+94-703966227 </h4>
			</div>

			<div class="fcol"> 
				<h3>Links</h3>
				<ul>
					<li> <a href="#">Home </a></li>
					<li> <a href="#">Services </a></li>
					<li> <a href="#">About Us </a></li>
					<li> <a href="#">Features </a></li>
					<li> <a href="#">Contacts </a></li>
				</ul>

			</div>
			<div class="fcol"> 
				<h3>Newsletter</h3>
				<form>
					<img src="images/email-i.png" class="far">
					<input type="email" placeholder="Enter your email id" required>
					<button type="submit"><img src="images/send-i.png" width="15" height="15"></button>
				</form>

				<div class="social-icons">
					<img src="images/facebook-i.png" class="fab">
					<img src="images/instagram-i.png" class="fab">
					<img src="images/whatsapp-i.png" class="fab">
					<img src="images/twitter-i.png" class="fab">
				</div>

			</div>
		</div>
	</footer>


	

</body>
</html>