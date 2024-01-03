<!DOCTYPE html>
<html>
<head>
	<title>Support Ticket</title>

	<link rel="stylesheet" type="text/css" href="styles/ss.css">
	<link rel="stylesheet" type="text/css" href="styles/account.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />


</head>

<body>


		<?php

			session_start();

			$e = $_SESSION["username"];
					
			include 'connect.php';

		?>

	<?php include 'navigation.php'; ?>


	<div class="abc">
		
		<?php 
			$_SESSION["acc-side"] = "s5";
			include 'sidebar.php'; 

		?>
	

		<div class="a"> 
			<div class="main--content">
				<div class="header--wrapper">
					<div class="header--title">
						<h2>Support Tickets History</h2>
						
					</div>

					<div class="header--title">
						<a class="a_btn" href="main.php"> Buy Package </a> <br>
						
					</div>
				
				</div>
			
			</div>

			<div class="main--content">
				<div class="details_a">
					
					<div class="pament-topic">
						
						<h1> Send Support tickets</h1>
						<h2> For your reference we provide complete<br>
						 archives and history of all your support tickets.</h2>

					</div>
		
					<div class="scroll-bg">
						<div class="scroll-div">
							<div class="scroll-object">
								<div class="table-box">
									<div class="table-row table-head">
										<div class="table-cell">
											<p>Ticket ID</p>
										</div>
										<div class="table-cell">
											<p>User Email</p>
										</div>
										<div class="table-cell">
											<p>User Name</p>
										</div>
										<div class="table-cell">
											<p>Message</p>
										</div>
									
									</div>

									<?php

										$sqlClaim = "SELECT support_ticket.Ticket_ID, support_ticket.Email, support_ticket.Name, support_ticket.Message FROM support_ticket WHERE support_ticket.Email = '$e' ORDER BY support_ticket.Ticket_ID ASC";

										$resultClaim = $conn->query($sqlClaim);

										if ($resultClaim->num_rows > 0) {
										    // output data of each row
										    while($rowClaim = $resultClaim->fetch_assoc()) {
										        
										    		$T_id = $rowClaim["Ticket_ID"];
										    		$T_mail = $rowClaim["Email"];
										        	$T_name = $rowClaim["Name"];
										        	$T_massege = $rowClaim["Message"];



													  	echo '<div class="table-row">'.
															'<div class="table-cell">'.
																$T_id
															.'</div>'.
															'<div class="table-cell">'.
																$T_mail
															.'</div>'.
															'<div class="table-cell">'.
																$T_name
															.'</div>'.
															'<div class="table-cell">'.
																$T_massege
															.'</div>'.
														
														'</div>';
											  	}

										}

									?>

									

									
								</div>
							</div>
						</div>
					</div>


				
				</div>
			
			</div>
			

		</div>
	

	</div>

					
	<?php include 'footer.php'; ?>


	</body>
</html>