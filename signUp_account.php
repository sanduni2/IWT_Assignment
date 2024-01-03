<html>

	<head>

		<title>Signup User account</title>

		<link rel="stylesheet" type="text/css" href="styles/signup_n.css">
		<link rel="stylesheet" type="text/css" href="styles/ss.css">
		<link rel="stylesheet" type="text/css" href="styles/terms.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

		<script defer src="js/signUp.js"></script>
		
	</head>

	<body>

		<?php

			include ('home_navigation.php');

		?>

		<br>



		  
		<form class="modal-content animate" action="signUp.php" method="POST">

			<div class="signcontainer">

				<center><h1>Sign Up</h1></center>

				<p>Please fill in this form to create an account.</p>

				<hr>

				<label for="fn"><b>First Name</b></label>
				<input type="text" placeholder="Enter First Name" id="fname" name="fname" required>

				<label for="ln"><b>Last Name</b></label>
				<input type="text" placeholder="Enter First Name" id="lname" name="lname" required>

				<label for="mobile"><b>Mobile Number</b></label>
				<input type="text" placeholder="Enter Mobile Number" id="mobile" name="mobile" required>

				<label for="email"><b>Email</b></label><br>
				<input type="email" placeholder="Enter Email" id="email" name="email" required><br><br>

				<label for="date"><b>Date of Birth</b></label><br>
				<input type="date" placeholder="Enter Date of Birth" id="birth" name="birth" required> <br><br>

				<label for="psw"><b>Password</b></label> 
				<input type="password" placeholder="Enter Password" id="password" name="password" required onkeyup="checkPassword(this.value)">
				<span id="toggleBtn"></span>

				<div class="validation">
				<ul>
					<li id="lower">At least one lowercase character</li>
					<li id="upper">At least one uppercase character</li>
					<li id="number">At least one number</li>
					<li id="special">At least one special character</li>
					<li id="length">At least 8 characters</li>

				</ul>

			  </div>
		        

				<label for="psw-repeat"><b>Repeat Password</b></label>
				<input type="password" placeholder="Enter Repeat Password" id="rpass" name="rpass" required>

				<label>
				<input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
				</label>


				<div class="popup" id="popup-1">
					<div class="overlay"></div>
					<div class="content">
						<div class="close-btn" onclick="togglePopup()">&times;</div>

						<h1><center>Terms & Conditions</center></h1>
						<p>Welcome to Auto Guard!<br><br>
						These terms and conditions outline the rules and regulations for the use of Auto Guard's Website.<br><br>

						By accessing this website we assume you accept these terms and conditions. Do not continue to use Auto Guard if you do not agree to take all of the terms and conditions stated on this page.<br><br>

						The following terminology applies to these Terms and Conditions, Privacy Statement and Disclaimer Notice and all Agreements: "Client", "You" and "Your" refers to you, the person log on this website and compliant to the Company's terms and conditions. "The Company", "Ourselves", "We", "Our" and "Us", refers to our Company. "Party", "Parties", or "Us", refers to both the Client and ourselves. All terms refer to the offer, acceptance and consideration of payment necessary to undertake the process of our assistance to the Client in the most appropriate manner for the express purpose of meeting the Client's needs in respect of provision of the Company's stated services, in accordance with and subject to, prevailing law of lk. Any use of the above terminology or other words in the singular, plural, capitalization and/or he/she or they, are taken as interchangeable and therefore as referring to same.</p>

					</div>

					<p>By creating an account you agree to our
					<a href="#" onclick="togglePopup()" style="color:red;">Terms & Conditions</a></p>

				</div>


				<div class="clearfix">
					<button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
					<button type="submit" class="signupbtn" value="login">Sign Up</button>
				</div>

			</div>
		</form>


		<?php include 'footer.php'; ?>

	</body>

</html>