<!DOCTYPE html>
<html>
<head>
	<title>Admin Estimate Value</title>
	<link rel="stylesheet" type="text/css" href="styles/admin.css">
	<link rel="stylesheet" type="text/css" href="styles/ss.css">

</head>
<body>

	<ul class="navi">
		<li class="navi2"><a class="naviA" href="admin_home.php"> Admin Home</a></li>
		<li class="navi1"><a class="naviA" href="main.html">(0)</a></li>
		<li class="navi1"><a class="naviA" href="Home.php">LogOut</a></li>
	</ul>

	<h1 class="admin_topic"> Upload Vehicle Estimate Value. </h1> 

	<div class="tabular--wrapper">
					  	
	  <div class ="table--container">
		  <div style="height:300px;overflow:auto">
		  	
			  <table style="width:100%;">
			  
				<thead>
				  <tr>
					  <th>Vehicle_No</th>
					  <th>Chassis_No</th>
					  <th>Engine_No</th>
					  <th>Brand</th>
					  <th>Model</th>
					  <th>Fuel_Type</th>
					  <th>Class</th>
					  <th>Country</th>
					  <th>V_Year</th>
					  <th>Colour</th>
					  <th>Engine_Capacity</th>
					  <th>Cylinder_Capacity</th>
				  </tr>
				</thead>  

				<tbody>

				<?php

					include 'connect.php';

					$sqlClaim = "SELECT vehicle.Vehicle_No, vehicle.Chassis_No, vehicle.Engine_No, vehicle.Brand, vehicle.Model, vehicle.Fuel_Type, vehicle.Class, vehicle.Country, vehicle.V_Year, vehicle.Colour, vehicle.Engine_Capacity, vehicle.Cylinder_Capacity FROM vehicle, vehicle_value WHERE vehicle.Vehicle_No = vehicle_value.Vehicle_No AND vehicle_value.Estimate_Value = '0' ";

					$resultClaim = $conn->query($sqlClaim);

					if ($resultClaim->num_rows > 0) {
					    // output data of each row
					    while($rowClaim = $resultClaim->fetch_assoc()) {
					        
					    		$Vehicle_No = $rowClaim["Vehicle_No"];
					    		$Chassis_No = $rowClaim["Chassis_No"];
					        	$Engine_No = $rowClaim["Engine_No"];
					        	$Brand = $rowClaim["Brand"];
					        	$Model = $rowClaim["Model"];
					    		$Fuel_Type = $rowClaim["Fuel_Type"];
					        	$Class = $rowClaim["Class"];
					        	$Country = $rowClaim["Country"];
					        	$V_Year = $rowClaim["V_Year"];
					    		$Colour = $rowClaim["Colour"];
					        	$Engine_Capacity = $rowClaim["Engine_Capacity"];
					        	$Cylinder_Capacity = $rowClaim["Cylinder_Capacity"];

							  echo '<tr>'.
									  '<td>'.$Vehicle_No.'</td>'.
									  '<td>'.$Chassis_No.'</td>'.
									  '<td>'.$Engine_No.'</td>'.
									  '<td>'.$Brand.'</td>'.
									  '<td>'.$Model.'</td>'.
									  '<td>'.$Fuel_Type.'</td>'.
									  '<td>'.$Class.'</td>'.
									  '<td>'.$Country.'</td>'.
									  '<td>'.$V_Year.'</td>'.
									  '<td>'.$Colour.'</td>'.
									  '<td>'.$Engine_Capacity.'</td>'.
									  '<td>'.$Cylinder_Capacity.'</td>'.
							  	'</tr>';
					  	}

					}

				?>


				   
				  </tbody>
				  
			  
			  </table>
		  </div>
		</div>

	</div>

		<form class="modal-content" action="" method="POST">

		    <div class="logincontainer">

		      <label for="vNum"><b>Vehicle Number</b></label>
		      <input type="text" placeholder="Enter Vehicle Number" id="vNum" name="vNum" required>

		      <label for="v_val"><b>Estimate Value</b></label>
		      <input type="text" placeholder="Enter Estimate Value" id="v_val" name="v_val" required>

		      <span id="toggleBtn"></span>
		        
		      <button type="submit" name="sub"> Submit </button>
		</form>
		

		<?php

			if (isset($_POST['sub'])) {

				$vNum = $_POST['vNum'];
				$v_val = $_POST['v_val'];

	
				$pass = $conn->prepare("UPDATE vehicle_value SET Estimate_Value = ? WHERE Vehicle_No = ? ");
				$pass->bind_param("ss",$v_val, $vNum);
				$pass->execute();
				$pass->close();
				echo "<br><br><font color='red'> successfully submited Vehicle Value...</font>";
    		}
		?>


</body>
</html>