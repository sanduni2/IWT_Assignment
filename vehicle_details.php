<!DOCTYPE html>
<html>
<head>
	<title>Vehicle Details</title>

	<link rel="stylesheet" type="text/css" href="styles/ss.css">
	<link rel="stylesheet" type="text/css" href="styles/account.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />


</head>

<body>
	

		<?php

			session_start();

			$e = $_SESSION["username"];
			
			$Vehicle_No = "-";
    		$Chassis_No = "-";
    		$Engine_No = "-";
    		$Brand = "-";
    		$Model = "-";
    		$Fuel_Type = "-";
    		$Class = "-";
    		$Country = "-";
    		$V_Year = "-";
    		$Colour = "-";
    		$Engine_Capacity = "-";
    		$Cylinder_Capacity = "-";
					
			include 'connect.php';

			//$sql = "SELECT Email, Mobile, First_Name, Last_name, DoB FROM customer WHERE Email='$e'";
			$sql = "SELECT vehicle.Vehicle_No, vehicle.Chassis_No, vehicle.Engine_No, vehicle.Brand, vehicle.Model, vehicle.Fuel_Type, vehicle.Class, vehicle.Country, vehicle.V_Year, vehicle.Colour, vehicle.Engine_Capacity, vehicle.Cylinder_Capacity FROM Vehicle_owner,vehicle WHERE vehicle.Vehicle_No = vehicle_owner.Vehicle_No AND vehicle_owner.Email = '$e'";

			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			    // output data of each row
			    while($row = $result->fetch_assoc()) {
			    		$Vehicle_No = $row["Vehicle_No"];
			    		$Chassis_No = $row["Chassis_No"];
			    		$Engine_No = $row["Engine_No"];
			    		$Brand = $row["Brand"];
			    		$Model = $row["Model"];
			    		$Fuel_Type = $row["Fuel_Type"];
			    		$Class = $row["Class"];
			    		$Country = $row["Country"];
			    		$V_Year = $row["V_Year"];
			    		$Colour = $row["Colour"];
			    		$Engine_Capacity = $row["Engine_Capacity"];
			    		$Cylinder_Capacity = $row["Cylinder_Capacity"];
			    
			        
			    }
			}
			
			
			include 'navigation.php';
					
		?>





	<div class="abc">

	
		<?php 
			$_SESSION["acc-side"] = "s2";
			include 'sidebar.php'; 

		?>




		<div class="a"> 
			<div class="main--content">
				<div class="header--wrapper">
					<div class="header--title">
						<h2>Vehicle details</h2>
						
					</div>

					<div class="header--title">
						<a class="a_btn" href="main.php"> Buy Package </a> <br>
						
					</div>
				
				</div>
			
			</div>

			<div class="main--content">
				
				<div class="details_a">
					<div class="acc_details">
						
						<ul>
							
							<li>
									<div class="v_name">Vehicle Number - </div>
									<div class="v_value"><?php echo $Vehicle_No; ?></div>
							</li>
							<li>
									<div class="v_name">Vehicle Brand - </div>
									<div class="v_value"><?php echo $Brand; ?></div>
							</li>
							<li>
									<div class="v_name">Vehicle Model - </div>
									<div class="v_value"><?php echo $Model; ?></div>
							</li>
							<li>
									<div class="v_name">Vehicle Fuel Type - </div>
									<div class="v_value"><?php echo $Fuel_Type; ?></div>
							</li>
							<li>
									<div class="v_name">Vehicle Class - </div>
									<div class="v_value"><?php echo $Class; ?></div>
							</li>
							<li>
									<div class="v_name">Vehicle Colour - </div>
									<div class="v_value"><?php echo $Colour; ?></div>
							</li>


							
						</ul>

					</div>


					<div class="list_start">
						<ul>
							
							<li>
									<div class="account_name">Engine Number - </div>
									<div class="name_value"><?php echo $Engine_No; ?></div>
							</li>

							<li>
									<div class="account_name">Chassis Number - </div>
									<div class="name_value"><?php echo $Chassis_No; ?></div>
							</li>

							<li>
									<div class="account_name">Manufactured Country - </div>
									<div class="name_value"><?php echo $Country; ?></div>
							</li>

							<li>
									<div class="account_name">Manufactured Year - </div>
									<div class="name_value"><?php echo $V_Year; ?></div>
							</li>

							<li>
									<div class="account_name">Engine Capacity - </div>
									<div class="name_value"><?php echo $Engine_Capacity; ?></div>
							</li>

							<li>
									<div class="account_name">Cylinder Capacity - </div>
									<div class="name_value"><?php echo $Cylinder_Capacity; ?></div>
							</li>


						</ul>
					</div>
				
				</div>
			
			</div>
			

		</div>
	

	</div>


	<?php include 'footer.php'; ?>

	</body>
</html>