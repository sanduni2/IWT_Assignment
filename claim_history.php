<!DOCTYPE html>
<html>
<head>
	<title>Claim History</title>

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
			$_SESSION["acc-side"] = "s4";
			include 'sidebar.php'; 

		?>
	

		<div class="a"> 
			<div class="main--content">
				<div class="header--wrapper">
					<div class="header--title">
						<h2>Claim History</h2>
						
					</div>

					<div class="header--title">
						<a class="a_btn" href="main.php"> Buy Package </a> <br>
						
					</div>
				
				</div>
			
			</div>

			<div class="main--content">
				<div class="details_a">
					
					<div class="pament-topic">
						
						<h2> You can review your claim history including<br>
						 claim value and accident description. For more<br>
						  explanation about the information on claim history<br>
						   you can contact with customer support service. </h2>

					</div>
		
					
					<div class="tabular--wrapper">
					  	
						  <div class ="table--container">
							  <div style="height:300px;overflow:auto">
							  	
								  <table style="width:100%" "height:400px">
								  
									<thead>
									  <tr>
									  <th>Report ID</th>
									  <th>Package ID</th>
									  <th>Claim Value</th>
									  <th>Accident Description</th>
									  </tr>
									</thead>  

									<tbody>

									<?php

										$sqlClaim = "SELECT accident_report.Report_ID, accident_report.Package_ID, accident_report.Accident_Description, claim_history.Claim_Value FROM accident_report, claim_history WHERE accident_report.Report_ID = claim_history.Report_ID AND claim_history.Email = '$e' ORDER BY accident_report.Report_ID ASC";

										$resultClaim = $conn->query($sqlClaim);

										if ($resultClaim->num_rows > 0) {
										    // output data of each row
										    while($rowClaim = $resultClaim->fetch_assoc()) {
										        
										    		$Rep_id = $rowClaim["Report_ID"];
										    		$P_id = $rowClaim["Package_ID"];
										        	$C_value = $rowClaim["Claim_Value"];
										        	$des = $rowClaim["Accident_Description"];

												  echo '<tr>'.
														  '<td>'.$Rep_id.'</td>'.
														  '<td>'.$P_id.'</td>'.
														  '<td>'. 'Rs.'.$C_value.'</td>'.
														  '<td>'.$des.'</td>'.
												  	'</tr>';
										  	}

										}

									?>

									   
									  </tbody>
									  
								  
								  </table>
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