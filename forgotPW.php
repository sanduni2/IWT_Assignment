<html>

	<head>

		<title>Forgot Password</title>

		<link rel="stylesheet" type="text/css" href="styles/style.css">
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

		 <form class="modal-content animate" method="POST" style="width: 600px;">
			<section id="section1">
				

					<div class="signcontainer">

						<center><h1>Forgotten Password</h1></center>
						<center><img class="img1" src="images/forgot-password.jpg"></center>
						<hr>

						
						<label for="email"><b>Please enter your Email</b></label><br>
						<input type="email" placeholder="Enter Email" id="email" name="email" required><br><br>

						
						<div class="clearfix">
							<button type="button" class="signupbtn" onclick="window.location.href='#section2';">Next</button>
						</div>

					</div>


			</section>

			<br><br><br>

			<section id="section2">

					<div class="signcontainer">

						<center><h1>Verify Your Account</h1></center>
						<center><img class="img1" src="images/authentication.jpg"></center>
						<hr>

						
						<label for="mobile"><b>Enter Mobile Number</b></label>
						<input type="text" placeholder="Enter Mobile Number" id="mobile" name="mobile" required>

						
						
						<div class="clearfix">
							<button type="button" onclick="window.location.href='#section1';" class="cancelbtn">Back</button>
							<button type="button" class="signupbtn" onclick="window.location.href='#section3';">Next</button>
						</div>

					</div>


			</section>

			<br><br><br>


			<section id="section3">

					<div class="signcontainer">

						<center><h1>Reset Password</h1></center>
						<center><img class="img2" src="images/reset.jpg"></center>
						<hr>

						
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

										
						
						<div class="clearfix">
							<button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
							<button type="submit" name="pass_creat" class="signupbtn" value="login">Sign Up</button>
						</div>

					</div>
				

			</section>

		<?php

			include 'connect.php';
			$val = 0;

			if (isset($_POST['pass_creat'])) {

				$email= $_POST['email'];
				$mobile= $_POST['mobile'];
				$password= $_POST['password'];
				$rpass= $_POST['rpass'];


				$sql = "SELECT Mobile FROM customer WHERE Email = '$email' ";

				$result = $conn->query($sql);

				if ($result->num_rows > 0) {
				    // output data of each row
				    while($row = $result->fetch_assoc()) {
				        
				    	if($mobile == $row["Mobile"]){
				    		$val = $val + 1;

				    	}

				    
				    }
				}

				if ($val == 1){

					if($password == $rpass){
						$change = $conn->prepare("UPDATE customer SET Password = ? WHERE Email = ?");
						$change->bind_param("ss",$password, $email);
						$change->execute();
						$change->close();
						echo "<font color='' size=6> successfully change your password... </font>";
					}else{
						echo "<font color='red' size=6> password does not match.... </font>";
					}

				}else{
					echo "<font color='red' size=6> Invalid Detail.... </font>";
				}

			}
		?>

	</form>



	<?php include 'footer.php'; ?>


		
	</body>

</html>