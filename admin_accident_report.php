<!DOCTYPE html>
<html>
<head>
	<title>Admin Accident Report</title>
	<link rel="stylesheet" type="text/css" href="styles/admin.css">
	<link rel="stylesheet" type="text/css" href="styles/ss.css">
</head>
<body>

	<ul class="navi">
		<li class="navi2"><a class="naviA" href="admin_home.php"> Admin Home</a></li>
		<li class="navi1"><a class="naviA" href="main.html">(0)</a></li>
		<li class="navi1"><a class="naviA" href="Home.php">LogOut</a></li>
	</ul>

	<h1 class="admin_topic"> Upload Vehicle Accident Details. </h1> 

		<form class="modal-content" action="" method="POST">

		    <div class="logincontainer">

		      <label for="vNum"><b>Vehicle Number</b></label>
		      <input type="text" placeholder="Enter Vehicle Number" id="vNum" name="vNum" required>

		      <label for="v_val"><b>Enter Accident Description</b></label><br>
		     <textarea placeholder="Type Your Message" class="field" name="Acc_message"></textarea>

		      <span id="toggleBtn"></span>
		        
		      <button type="submit" name="sub"> Submit </button>
		</form>
		

		<?php

			if (isset($_POST['sub'])) {

				include 'connect.php';

				$vNum = $_POST['vNum'];
				$Acc_message = $_POST['Acc_message'];

				$A_sql = "SELECT MAX(Report_ID) FROM accident_report";

				$A_result = $conn->query($A_sql);

					if ($A_result->num_rows > 0) {
					    // output data of each row
					    while($A_row = $A_result->fetch_assoc()) {
					        
					        	$A = $A_row["MAX(Report_ID)"];
					    }
					}
					$A_rep = $A + 1;


				$P_sql = "SELECT Package_ID FROM owner_package WHERE Vehicle_No = '$vNum' ";

				$P_result = $conn->query($P_sql);

					if ($P_result->num_rows > 0) {
					    // output data of each row
					    while($P_row = $P_result->fetch_assoc()) {
					        
					        	$pId = $P_row["Package_ID"];
					    }
					}


	
				$stmt = $conn->prepare("INSERT INTO accident_report(Report_ID,Vehicle_No,Package_ID,Accident_Description) VALUES(?,?,?,?)");
				$stmt->bind_param("ssss",$A_rep, $vNum, $pId, $Acc_message);
				$stmt->execute();
		
				echo "<br> Successfully submited Accident Description...";

				$stmt->close();
				$conn->close();
    		}
		?>

</body>
</html>