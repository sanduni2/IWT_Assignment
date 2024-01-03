<!DOCTYPE html>
<html lang="en">
	<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<title>Payment</title>
	<link rel="stylesheet" href="styles/stylep.css">
	</head>
			<body class="pay-body">

				<?php
				
					session_start();
					$e = $_SESSION["username"];

					include 'navigation.php';
				?>


				<br><br><br>

				<?php

					$e = $_SESSION["username"];
							
					include 'connect.php';

					$sql = "SELECT owner_package.Package_ID, vehicle_value.Estimate_Value, package.Estimate_Value_Percentage
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
					    		$estimate = $row["Estimate_Value"];
					        	$epercent = $row["Estimate_Value_Percentage"];
					        	$annualPay = $estimate * $epercent / 100;
					    }
					}

				?>


				
				<center>

				<div>
				<img src="https://www.ligascoop.org/images/loans.png" alt="payment" width="200" height="150" class="imgage"><br><br><br>
				</div>

				<section class="pay-container" style="text-align:left">

					<header><h2>Payment</h2></header></br>

					<p>You are provided with the facility of payment through online mode very easily. For that fill the form below.</p>

					<h3 style="text-align:center">Total:Rs. <?php echo $annualPay; ?></h3>

					<img src="images/visa-master-icon-19.jpg" width="200" height="50" align="right">


					<form class="form" style="aling:center" method="POST">
						<div class="input-box">
						<label style="text-align:left">Cardholder's Name</label>

							<input type ="text" placeholder="Enter full name"  />

						</div>
						<div class="input-box">
						<label>Card Number</label>

							<input type="text" placeholder="Enter Card Number"  />

						</div>
						<div class="input-box">
						<label>Expiry Date</label>
						</div>
					
						<div class="column">
						<div class="select-box">
							<select>
								<option hidden>Select Month</option>
								<option>January</option>
								<option>February</option>
								<option>March</option>
								<option>April</option>
								<option>May</option>
								<option>June</option>
								<option>July</option>
								<option>August</option>
								<option>September</option>
								<option>October</option>
								<option>November</option>
								<option>December</option>
							</select>
						</div>
						<div class="select-box">
							<select>
								<option hidden>Select Year</option>
								<option>2020</option>
								<option>2021</option>
								<option>2022</option>
								<option>2023</option>
								<option>2024</option>
								<option>2025</option>
								<option>2026</option>
								<option>2027</option>
								<option>2028</option>
								<option>2029</option>
								<option>2030</option>
							</select>
						</div>
						</div>

						<div class="input-box">
						<label>CVV</label>
						<input type="text" placeholder="3 digit number"  />
						<p>  (3 digit number on back of the card)</p>
						</div>
						<div>
						<button type="submit" name="pay" onclick="openPopup()"> Pay </button>
						<div class="popup" id="popup">
						<img src="https://static.vecteezy.com/system/resources/previews/002/736/131/original/check-ok-symbol-isolated-icon-free-vector.jpg">
						<h2>Thank You!</h2>
						<p>Your details has been successfully submitted. Thanks!</p>
						<button type="button" onclick="closePopup()">OK</button>
						</div>
						<button style= "background-color:red">Cancle</button>
						</div>
					</form>
				</section>
				</center>


				<script>
				let popup = document.getElementById("popup");
				
				function openPopup(){
				popup.classList.add("open-popup");
				}
				function closePopup(){
				popup.classList.remove("open-popup");
				}
				</script>



				<?php

					$sqlR = "SELECT MAX(Receipt_ID) FROM payment";


					$resultR = $conn->query($sqlR);

					if ($resultR->num_rows > 0) {
					    // output data of each row
					    while($rowR = $resultR->fetch_assoc()) {
					        
					        	$R = $rowR["MAX(Receipt_ID)"];
					    }
					}


					$receipt = $R + 1;


					$result = $conn->query($sql);

					if ($result->num_rows > 0) {
					    // output data of each row
					    while($row = $result->fetch_assoc()) {
					        
					        	$pId = $row["Package_ID"];
					    		$estimate = $row["Estimate_Value"];
					        	$epercent = $row["Estimate_Value_Percentage"];
					        	$annualPay = $estimate * $epercent / 100;
					    }
					}

					date_default_timezone_set('Asia/Colombo');
					$pDate =  date('Y-m-d H:i:s');

					if (isset($_POST['pay'])) {

						$stmt = $conn->prepare("INSERT INTO payment(Receipt_ID,Package_ID,Email,Amount,P_date) VALUES(?,?,?,?,?)");
						$stmt->bind_param("sssss",$receipt, $pId, $e, $annualPay, $pDate);
						$stmt->execute();
						
						echo "payment successfully...";
						$stmt->close();
						$conn->close();
							
					}


					
				?>


				<?php include 'footer.php'; ?>



	</body>
</html>