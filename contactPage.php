<!DOCTYPE html>
<html>
<head>
<title>Connect With Us</title>
<meta charset="UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<link rel="stylesheet" href="styles/contact.css">
</head>
<body class="contact-body">


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


	<div class="main--contact">
	  
	  <h1 style="color:#FFFFFF"> Connect With Us</h1></br>
	  <p style="color:#FFFFFF">Got a question regarding our policy or simply looking for the best vehicle insurance cover for your needs? </br>Contact us via phone or e-mail, or head to your nearest branch where we’ll be happy to assist you.</p>


		<div class="contact--wrapper">
	  <div class="contact--title">
	  <h1>Just ask .Get answer.</h1></br>
	  <address>Your question and comments are important to us.We've got every covered for your needs.</address>
	  </div>
	  </div></br></br></br>

	  
			<div class="contact-container">
			<div class="contact-box">
			<div class="left">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.888855073993!2d79.95244007486083!3d6.903892793095456!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae2572db062437f%3A0xbba120ccc6fe1e2e!2sMalabe%20Junction!5e0!3m2!1sen!2slk!4v1685903233825!5m2!1sen!2slk"  style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
			</div>
			<div class="right">
			<h2>Send Message</h2>

			<form method="POST" method="ticket_send">
			
				<input type="text" class="field" placeholder="Enter Your Name" name="Sname">
				<input type="text" class="field" placeholder="Enter Your Email" name="Semail">
				<textarea placeholder="Type Your Message" class="field" name="Message"></textarea>
				<input type="submit" name="send" value="send" class="btn"onclick="openPopup()">
				<div class="popup" id="popup">
					<img src="https://static.vecteezy.com/system/resources/previews/002/736/131/original/check-ok-symbol-isolated-icon-free-vector.jpg">
					<h2>Thank You!</h2>
					<p>Your details has been successfully submitted. Thanks!</p>
					<button type="button" onclick="closePopup()">OK</button>
					</div>

			</form>


			</div>
			</div>
</div>
</br></br>
</div>


			<?php

				include 'connect.php';


				$T_sql = "SELECT MAX(Ticket_ID) FROM support_ticket";

				$T_result = $conn->query($T_sql);

					if ($T_result->num_rows > 0) {
					    // output data of each row
					    while($T_row = $T_result->fetch_assoc()) {
					        
					        	$T = $T_row["MAX(Ticket_ID)"];
					    }
					}


					$sTicket = $T + 1;

					


					if (isset($_POST['send'])) {

						$sEmail = $_POST['Semail'];
		    			$SName = $_POST['Sname'];
		    			$Smessage = $_POST['Message'];

						$stmt = $conn->prepare("INSERT INTO support_ticket(Ticket_ID,Email,Name,Message) VALUES(?,?,?,?)");
						$stmt->bind_param("ssss",$sTicket, $sEmail, $SName, $Smessage);
						$stmt->execute();
						
						echo "payment successfully...";
						$stmt->close();
						$conn->close();
							
					}



			?>


<script>
				let popup = document.getElementById("popup");
				
				function openPopup(){
				popup.classList.add("open-popup");
				}
				function closePopup(){
				popup.classList.remove("open-popup");
				}
				</script>



		<div class="card--container">
		 <div class="card">
		 <div class="imgBx">
		 <a href="#">
		 <img src="https://www.nicepng.com/png/detail/191-1918328_office-icon-circle.png " width="120px" height="120px">
		 </a>
		 <h3>Our Main Office</h3></br></br>
		 <address>Location</br>Auto Guard Vehicle Insurence Company,</br>No:787, Kaduwela Road,</br>Malabe.</br>Sri Lanka.</address>
		 </div>
		 </div>
		 
		 <div class="card">
		 <div class="imgBx">
		 <a href="#"><img src="images/Phone.jpg" width="120px" height="120px"></a>
		 <h3>Phone Number</h3></br></br>
		 <address>Call support</br>+94 70 396 6227</br>24x7 Hotline</br>1330</address>
		 </div>
		 </div>
		 
		 <div class="card">
		 <div class="imgBx">
		 <a href="#">
		 <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRnuZPTt-j8oZcnty_RXVKqgCZVTFXQitjVqQ&usqp=CAU" width="120px" height="120px">
		 </a>
		 <h3>Our Main Office</h3></br></br>
		 <p>dilshan123@gmail.com</p>
		 </div>
		 </div>
		</div></br></br></br> </br></br>



		<?php include 'footer.php'; ?>
</body>
</html>