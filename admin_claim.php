<!DOCTYPE html>
<html>
<head>
	<title>Admin Claim Report</title>
	<link rel="stylesheet" type="text/css" href="styles/admin.css">
	<link rel="stylesheet" type="text/css" href="styles/ss.css">
</head>
<body>

	<ul class="navi">
		<li class="navi2"><a class="naviA" href="admin_home.php"> Admin Home</a></li>
		<li class="navi1"><a class="naviA" href="main.html">(0)</a></li>
		<li class="navi1"><a class="naviA" href="Home.php">LogOut</a></li>
	</ul>

	<h1 class="admin_topic"> Upload Insurance Claim Details. </h1> 

		<form class="modal-content" action="" method="POST">

		    <div class="logincontainer">

		      <label for="vNum"><b>Vehicle Number</b></label>
		      <input type="text" placeholder="Enter Vehicle Number" id="vNum" name="vNum" required>

		      <label for="cVal"><b>Claim Value</b></label><br>
		      <input type="text" placeholder="Enter Claim Value" id="cVal" name="cVal" required>

		      <span id="toggleBtn"></span>
		        
		      <button type="submit" name="sub"> Submit </button>
		</form>
		

		<?php

			if (isset($_POST['sub'])) {

				include 'connect.php';

				$vNum = $_POST['vNum'];
				$cVal = $_POST['cVal'];

				$Cid_sql = "SELECT MAX(Report_ID) FROM accident_report WHERE Vehicle_No = '$vNum' ";

				$Cid_result = $conn->query($Cid_sql);

					if ($Cid_result->num_rows > 0) {
					    // output data of each row
					    while($Cid_row = $Cid_result->fetch_assoc()) {
					        
					        $repId = $Cid_row["MAX(Report_ID)"];
					    }
					}
					


				$CE_sql = "SELECT Email FROM vehicle_owner WHERE Vehicle_No = '$vNum' ";

				$CE_result = $conn->query($CE_sql);

					if ($CE_result->num_rows > 0) {
					    // output data of each row
					    while($CE_row = $CE_result->fetch_assoc()) {
					        
					        	$mail = $CE_row["Email"];
					    }
					}


	
				$stmt = $conn->prepare("INSERT INTO claim_history(Report_ID ,Email ,Claim_Value) VALUES(?,?,?)");
				$stmt->bind_param("sss",$repId, $mail, $cVal);
				$stmt->execute();
		
				echo "<br> Successfully submited Claim Details...";

				$stmt->close();
				$conn->close();
    		}
		?>

</body>
</html>