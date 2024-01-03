<html>

	<head>

		<title> Admin Signup</title>

		<link rel="stylesheet" type="text/css" href="styles/login_CS.css">
		<link rel="stylesheet" type="text/css" href="styles/ss.css">

		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
		
		<script defer src="js/login.js"></script>

	</head>

	<body>

		<?php

			include ('home_navigation.php');

		?>

		<form class="modal-content animate" action="" method="POST">

		    <div class="imgcontainer">
	
		      <img src="images/human.png" alt="Avatar" class="avatar">
		    </div>

		    <div class="logincontainer">

		      <label for="uname"><b>Email</b></label>
		      <input type="email" placeholder="Enter Email" id="uname" name="uname" required>

		      <label for="psw"><b>Password</b></label>
		      <input type="password" placeholder="Enter Password" id="psw" name="psw" required>

		      <span id="toggleBtn"></span>
		        
		      <button type="submit" name="login"> Login </button>

		      <label>
		        <input type="checkbox" checked="checked" name="remember"> Remember me
		      </label>
		    </div>

		    <div class="logincontainer" style="background-color:#f1f1f1">
		      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
		      <span class="psw">Forgot <a href="#">password?</a></span><br>
		      <center><span>If you User Login <a href="login_account.php"> here..?</a></span></center>
		    </div>
		  </form>
		</div>

		
		<?php

			session_start();

			include 'connect.php';

			if (isset($_POST['login'])) {

			    $valid = 0;
			    $e = $_POST['uname'];
			    $p = $_POST['psw'];


				$sql = "SELECT Email, Password FROM admin";

				$result = $conn->query($sql);

				if ($result->num_rows > 0) {
				    // output data of each row
				    while($row = $result->fetch_assoc()) {
				        
				    	if($e == $row["Email"]){
				    		$check = $row["Password"];
				            $valid = $valid + 1;
				    	}

				
				    }

				    if($valid == 1)
				    {
				        if($check == $p){

							$_SESSION["username"] = $_POST['uname'];
							header("Location:admin_home.php");
								
				        }
				        else{
				            echo "Email and password do not match";
				        }

				    }
				    else {
				        echo "Invalid Email";
				    }

				   

				} else {
				    echo "0 results";
				}


				$conn->close();
			}
			

		?>


		<?php include 'footer.php'; ?>


	</body>

</html>