<!DOCTYPE html>
<html>
<head>
	<title>Package Details</title>

	<link rel="stylesheet" type="text/css" href="styles/ss.css">
	<link rel="stylesheet" type="text/css" href="styles/account.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />


</head>

<body>

		<?php

			session_start();

			$e = $_SESSION["username"];
					
			include 'connect.php';

			$pId = "-";
    		$pName = "-";
    		$estimate = 0;
        	$epercent = 0;

        	$sqlT = "SELECT owner_package.Package_ID, package.Package_Name FROM owner_package,package,vehicle_owner WHERE owner_package.Package_ID = package.Package_ID AND owner_package.Vehicle_No = vehicle_owner.Vehicle_No AND  vehicle_owner.Email = '$e' ";


			$resultT = $conn->query($sqlT);

			if ($resultT->num_rows > 0) {
			    // output data of each row
			    while($rowT = $resultT->fetch_assoc()) {
			        
			    		$pId = $rowT["Package_ID"];
			    		$pName = $rowT["Package_Name"];
			    }
			}
			

			$sql = "SELECT owner_package.Package_ID, package.Package_Name, vehicle_value.Estimate_Value, package.Estimate_Value_Percentage
					FROM owner_package,package,vehicle_owner,vehicle_value 
					WHERE owner_package.Package_ID = package.Package_ID 
					AND owner_package.Vehicle_No = vehicle_owner.Vehicle_No 
					AND vehicle_value.Vehicle_No = vehicle_owner.Vehicle_No 
					AND vehicle_owner.Email = '$e' ";


			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			    // output data of each row
			    while($row = $result->fetch_assoc()) {
			        
			    		$pId = $row["Package_ID"];
			    		$pName = $row["Package_Name"];
			    		$estimate = $row["Estimate_Value"];
			        	$epercent = $row["Estimate_Value_Percentage"];
			    }
			}

			include 'navigation.php'; 
					
		?>



	<div class="abc">
		
		<?php 
			$_SESSION["acc-side"] = "s3";
			include 'sidebar.php'; 

		?>
		

		<div class="a"> 
			<div class="main--content">
				<div class="header--wrapper">
					<div class="header--title">
						<h2>Payment Details</h2>
						
					</div>

					<div class="header--title">
						<a class="pay_btn" href="payment.php"> Pay Annual Payment </a>
						<a class="a_btn" href="main.php"> Buy Package </a> 
					</div>
				
				</div>
			
			</div>

			<div class="main--content">
				<div class="details_a">
					
					<div class="pament-topic">
						
						<h2> Current Insurance Package - </h2>
						<h4> <?php echo $pName; ?> </h4>

						<h2> Your Insurance Package ID - </h2>
						<h4> <?php echo $pId; ?> </h4>


					</div>
					<div class="pament-topic">

						<h2> Estimate Value - </h2>
						<h4> <?php echo $estimate; ?> </h4>

						<h2> Annual Payment Value - </h2>

						<?php
							$annualPay = $estimate * $epercent / 100;
						 ?>

						<h4> <?php echo $annualPay; ?> </h4>

					</div>
		
					<div class="scroll-bg">
						<div class="scroll-div">
							<div class="scroll-object">
								<div class="table-box">

									
									<div class="table-row table-head">
										<div class="table-cell">
											<p>Receipt ID</p>
										</div>
										<div class="table-cell">
											<p>Package ID</p>
										</div>
										<div class="table-cell">
											<p>Payment Date</p>
										</div>
										<div class="table-cell">
											<p>Amount</p>
										</div>
									
									</div>

									<?php

										$P_sql = "SELECT payment.Receipt_ID, payment.Package_ID ,payment.P_date, payment.Amount FROM payment WHERE payment.Email = '$e' " ;


										$P_result = $conn->query($P_sql);

										if ($P_result->num_rows > 0) {
										    // output data of each row
										    while($P_row = $P_result->fetch_assoc()) {
										        
										    		$rId = $P_row["Receipt_ID"];
										    		$pId = $P_row["Package_ID"];
										    		$pDate = $P_row["P_date"];
										        	$pAmount = $P_row["Amount"];


										       		echo '<div class="table-row">'.
															'<div class="table-cell">'.
																'R'.$rId
															.'</div>'.
															'<div class="table-cell">'.
																$pId
															.'</div>'.
															'<div class="table-cell">'.
																$pDate
															.'</div>'.
															'<div class="table-cell">'.
																'Rs. '.$pAmount
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