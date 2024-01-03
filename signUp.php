<?php

	include 'connect.php';

	$fname= $_POST['fname'];
	$lname= $_POST['lname'];
	$mobile= $_POST['mobile'];
	$email= $_POST['email'];
	$birth= $_POST['birth'];
	$password= $_POST['password'];
	$rpass= $_POST['rpass'];

		$sql = "SELECT Email FROM customer";

			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			    // output data of each row
			    while($row = $result->fetch_assoc()) {
			        
			    	if($email == $row["Email"]){
			    		
			    		echo "This email Already Exist...!, PLease create different Email Address..";
			    		
			    		
			            
			    	}

			    	else{

						if($password == $rpass)

						{
							$stmt = $conn->prepare("INSERT INTO customer(Email,Mobile,Password,First_Name,Last_name,DoB) VALUES(?,?,?,?,?,?)");
							$stmt->bind_param("ssssss",$email, $mobile, $password, $fname, $lname, $birth);
							$stmt->execute();
							
							include("signup-confirm.php");
							
							$stmt->close();
							$conn->close();
							
						}

						else{
							echo "registration Unsuccessfully, password does not match...";
							
						}

			    	}

			        
			    }
			}


		
		
	
?>