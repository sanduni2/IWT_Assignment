<!DOCTYPE html>
<html>
<head>
	<title>User Settings</title>

	<link rel="stylesheet" type="text/css" href="styles/ss.css">
	<link rel="stylesheet" type="text/css" href="styles/account.css">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />


</head>

<body>


		<?php

			session_start();

			$e = $_SESSION["username"];
					
			include'connect.php';

			$sql = "SELECT Email, Mobile, First_Name, Last_name, DoB FROM customer";

			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			    // output data of each row
			    while($row = $result->fetch_assoc()) {
			        
			    	if($e == $row["Email"]){
			    		$mob = $row["Mobile"];
			    		$fname = $row["First_Name"];
			    		$lname = $row["Last_name"];
			    		$birth = $row["DoB"];
			            
			    	}

			        
			    }
			}
			
		?>

		<?php include'navigation.php';?>



	<div class="abc">
		
		<?php 
			$_SESSION["acc-side"] = "s6";
			include'sidebar.php'; 

		?>
	

		<div class="a"> 
			<div class="main--content">
				<div class="header--wrapper">
					<div class="header--title">
						<h2>Settings</h2>
						
					</div>

					<div class="header--title">
						<a class="a_btn" href="main.php"> Buy Package </a> <br>
						
					</div>
				
				</div>
			
			</div>


			<div class="main--content">
				<div class="details_a">
					
					<div class="pament-topic">
						<h4> Change Your Password  </h4>
						<form method="POST">
							<input type="Password" name="old_p" placeholder="Enter Your old Password" class="change_pass" required> <br>
							<input type="Password" name="new_p" placeholder="Enter Your New Password" class="change_pass" required> <br>
							<input type="Password" name="confirm_p" placeholder="Confirm New Password" class="change_pass" required> <br>

							<span id="toggleBtn"></span>
							

							<input type="submit" name="change_p" value="Change" class="change_btn"><br>

						</form>

						<?php

							if (isset($_POST['change_p'])) {

								$old_p = $_POST['old_p'];
								$new_p = $_POST['new_p'];
								$confirm_p = $_POST['confirm_p'];

								if($new_p == $confirm_p){

									$sql = "SELECT Password FROM customer WHERE Email = '$e'";

									$result = $conn->query($sql);

									if ($result->num_rows > 0) {
							
									    while($row = $result->fetch_assoc()) {	
									        
									    	if($old_p == $row["Password"]){

												$pass = $conn->prepare("UPDATE customer SET Password = ? WHERE Email = ?");
												$pass->bind_param("ss",$new_p, $e);
												$pass->execute();
												$pass->close();
												echo "<font color='blue'> successfully change your password... </font>";
					    					}
					    					else{echo "<font color='red'> Incorrect password...! </font>";}
					    				}
									}
								}
								else{echo "<font color='red'> password does not match... </font>";}
							}
						?>

					</div>

					

					<div class="pament-topic">
						<h4> Change Your Mobile Number  </h4>
						<form method="POST">
							<input type="text" name="old_n" placeholder="Enter Your old Mobile Number" class="change_pass" required> <br>
							<input type="text" name="new_n" placeholder="Enter Your New Mobile Number" class="change_pass" required> <br>
							<input type="Password" name="confirm_n" placeholder="Enter Your Password" class="change_pass" required> <br>

							<input type="submit" name="change_n" value="Change" class="change_btn">



						</form>

						<?php

							if (isset($_POST['change_n'])) {

								$old_n = $_POST['old_n'];
								$new_n = $_POST['new_n'];
								$confirm_n = $_POST['confirm_n'];

								$sql = "SELECT Password FROM customer WHERE Email = '$e'";

								$result = $conn->query($sql);

								if ($result->num_rows > 0) {
						
								    while($row = $result->fetch_assoc()) {	
								        
								    	if($confirm_n == $row["Password"]){

											$pass = $conn->prepare("UPDATE customer SET Mobile = ? WHERE Email = ?");
											$pass->bind_param("ss",$new_n, $e);
											$pass->execute();
											$pass->close();
											echo "<font color='blue'> successfully Change your Mobile Number.. </font>";
				    					}
				    					else{ 
				    						echo "<font color='red'> Incorrect password, please try again...! </font>"; }
				    				}
								}
							}
							
						?>

					</div>

						<?php

							$last_M = 'No message';

							$T_sql = "SELECT MAX(Ticket_ID) FROM support_ticket WHERE Email = '$e' ";

							$T_result = $conn->query($T_sql);

								if ($T_result->num_rows > 0) {
								    // output data of each row
								    while($T_row = $T_result->fetch_assoc()) {
								        
								        $last_T = $T_row["MAX(Ticket_ID)"];
								    }
								}

							$sql_M = "SELECT Message FROM support_ticket WHERE Ticket_ID = '$last_T' ";

							$result_M = $conn->query($sql_M);

							if ($result_M->num_rows > 0) {
					
							    while($row_M = $result_M->fetch_assoc()) {

							    	$last_M = $row_M["Message"];
							    }
							}

						?>

					<div class="pament-topic">
						<h4> Change Your Last Support ticket  </h4>
						<form method="POST">
							<input type="email" readonly value="<?php echo $e ?>" name="old_p" placeholder="Enter Your Email Address" class="change_pass"> <br>
							<input type="Password" name="pass_t" placeholder="Enter Your Password" class="change_pass" required> <br>
							<textarea placeholder="Last Message :- <?php echo $last_M ?>" class="text_M" name="Message_t" required></textarea> <br>

							<input type="submit" name="change_t" value="Change" class="change_btn">



						</form>

						<?php

							if (isset($_POST['change_t'])) {

								$pass_t = $_POST['pass_t'];
								$Message_t = $_POST['Message_t'];

								$sql = "SELECT Password FROM customer WHERE Email = '$e'";

								$result = $conn->query($sql);

								if ($result->num_rows > 0) {
						
								    while($row = $result->fetch_assoc()) {	
								        
								    	if($pass_t == $row["Password"]){

											$pass = $conn->prepare("UPDATE support_ticket SET Message = ? WHERE Email= ? AND Ticket_ID= ?");
											$pass->bind_param("sss",$Message_t, $e, $last_T);
											$pass->execute();
											$pass->close();
											echo "<font color='blue'> successfully change your Support Ticket...! </font>";
				    					}
				    					else{echo "<font color='red'> Incorrect password...! </font>";}
				    				}
								}
							}
							
						?>

					</div>


					<div class="pament-topic">
						<h4> Delete your User Account  </h4>
						<form method="POST" action="del_acc.php">
							<input type="Password" name="del_p" placeholder="Enter Your password" class="change_pass" required> <br>
							<textarea placeholder="Why delete your User Account" class="text_M" name="del_m" required></textarea> <br>

							<input type="submit" name="del_acc" value="Delete" class="change_btn">

						</form>
						
						
					</div>
					
				</div>
			
			</div>
			

		</div>
	

	</div>

					
	<?php include 'footer.php'; ?>


	</body>
</html>