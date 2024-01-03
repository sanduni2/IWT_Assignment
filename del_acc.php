<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php

		session_start();

		$e = $_SESSION["username"];

		include 'connect.php';

		$del_p = $_POST['del_p'];
		$del_m = $_POST['del_m'];

		$sql = "SELECT Password FROM customer WHERE Email = '$e'";

		$result = $conn->query($sql);

		if ($result->num_rows > 0) {

		    while($row = $result->fetch_assoc()) {	
		        
		    	if($del_p == $row["Password"]){

		    		$delA = $conn->prepare("DELETE FROM customer WHERE Email = ? ");
					$delA->bind_param("s",$e);
					$delA->execute();
					$delA->close();	

		    		header("Location: Home.php");

				}
				
				else{echo "<font color='red'> Incorrect password, Please try again...! </font>";} 
				
			}
		}
 		
	?>
</body>
</html>