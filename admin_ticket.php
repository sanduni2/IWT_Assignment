<!DOCTYPE html>
<html>
<head>
	<title> Admin Support ticket view</title>
	<link rel="stylesheet" type="text/css" href="styles/admin.css">
	<link rel="stylesheet" type="text/css" href="styles/ss.css">
</head>
<body>

	<ul class="navi">
		<li class="navi2"><a class="naviA" href="admin_home.php"> Admin Home</a></li>
		<li class="navi1"><a class="naviA" href="main.html">(0)</a></li>
		<li class="navi1"><a class="naviA" href="Home.php">LogOut</a></li>
	</ul>

	<h1 class="admin_topic"> View Customer Support Tickets. </h1> 

	<div class="tabular--wrapper" style="height: 400px;">
					  	
	  <div class ="table--container">
		  <div style="height:300px;overflow:auto">
		  	
			  <table style="width:100%;">
			  
				<thead>
				  <tr>
					  <th>Ticket_ID </th>
					  <th>Email</th>
					  <th>Name</th>
					  <th>Message</th>
				  </tr>
				</thead>  

				<tbody>

				<?php

					include 'connect.php';

					$sqlClaim = "SELECT support_ticket.Ticket_ID, support_ticket.Email, support_ticket.Name, support_ticket.Message FROM support_ticket ORDER BY support_ticket.Ticket_ID DESC ";

					$resultClaim = $conn->query($sqlClaim);

					if ($resultClaim->num_rows > 0) {
					    // output data of each row
					    while($rowClaim = $resultClaim->fetch_assoc()) {
					        
					    		$Ticket_ID = $rowClaim["Ticket_ID"];
					    		$Email = $rowClaim["Email"];
					        	$Name = $rowClaim["Name"];
					        	$Message = $rowClaim["Message"];

							  echo '<tr>'.
									  '<td>'.$Ticket_ID.'</td>'.
									  '<td>'.$Email.'</td>'.
									  '<td>'.$Name.'</td>'.
									  '<td>'.$Message.'</td>'.
							  	'</tr>';
					  	}

					}

				?>


				   
				  </tbody>
				  
			  
			  </table>
		  </div>
		</div>

	</div>


</body>
</html>