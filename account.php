<!DOCTYPE html>
<html>
<head>
	<title>User Account</title>

	<link rel="stylesheet" type="text/css" href="styles/ss.css">
	<link rel="stylesheet" type="text/css" href="styles/account.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />


</head>

<body>

	<?php
			$mob = "-";
    		$fname = "-";
    		$lname = "-";
    		$birth = "-";
			session_start();

			$e = $_SESSION["username"];

			if(is_null($e)){

				if(isset($_GET['e'])) {
				$e = $_GET['e'];
				}
				
			}

					
			include 'connect.php';

			$sql = "SELECT Email, Mobile, First_Name, Last_name, DoB FROM customer";

			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			    // output data of each row
			    while($row = $result->fetch_assoc()) {
			        
			    	if($e == $row["Email"]){
			    		$mob = $row["Mobile"];
			    		$fname = $row["First_Name"];
			    		$lname = $row["Last_name"];
			    		$birth = $row["DoB"];
			            
			    	}

			        
			    }
			}


					
		?>

	<?php include 'navigation.php'; ?>
		


	<div class="abc">
		

		<?php 
			$_SESSION["acc-side"] = "s1";
			include 'sidebar.php'; 

		?>
		
			

		<div class="a"> 
			<div class="main--content">
				<div class="header--wrapper">
					<div class="header--title">
						<h2>My Account</h2>
						
					</div>
					<div class="header--title">
						<a class="a_btn" href="main.php"> Buy Package </a> <br>
						
					</div>
				
				</div>
			
			</div>

			<?php
				$PP = "-";
				$sql_propic = "SELECT profile_pic FROM customer WHERE Email = '$e' ";

				$result_propic = $conn->query($sql_propic);

				if ($result_propic->num_rows > 0) {
				    // output data of each row
				    while($row_propic = $result_propic->fetch_assoc()) {
				       
				    		$PP = $row_propic["profile_pic"];
				    		
				    }
				}

				if(is_null($PP))
				{
					$PP = 'default_propic.jpg';
				}

			?>

			<div class="main--content">
				<h3>User Profile </h3>
				<div class="details_a">
					<div class="acc_details">
						
						<img src="profile_pic/<?php echo $PP; ?>" class="pro_pic">
						<h1> <?php echo $fname." ".$lname; ?> </h1>

					</div>


					<div class="list_start">
						<ul>
							
							<li>
									<div class="account_name">Account holder name - </div>
									<div class="name_value"><?php echo $fname." ".$lname; ?></div>
							</li>

							<li>
									<div class="account_name">Email Address - </div>
									<div class="name_value"> <?php echo $e; ?> </div>
							</li>

							<li>
									<div class="account_name">Mobile Number - </div>
									<div class="name_value"><?php echo "0".$mob; ?></div>
							</li>

							<li>
									<div class="account_name">Date of Birth - </div>
									<div class="name_value"><?php echo $birth; ?></div>
							</li>


						</ul>
					</div>

					<div class="list_start user_photo">
						
						<form method="POST" class="photo_form" enctype="multipart/form-data">

							<input type="file" name="my_image"><br>
							<input type="submit" name="submit" class="photo_submit" value="upload">

							

						</form>
					</div>


					<?php
						if (isset($_POST['submit']) && isset($_FILES['my_image'])) {
								
							include 'connect.php';

							$img_name = $_FILES['my_image']['name'];
							$full_path = $_FILES['my_image']['full_path'];
							$img_size = $_FILES['my_image']['size'];
							$tmp_name = $_FILES['my_image']['tmp_name'];
							$error = $_FILES['my_image']['error'];

							if($error === 0) {
								if ($img_size > 125000000000) {
									$em = "Sorry, your file is too large.";
									header("Location: account.php?error=$em");
									exit();

								} else {
									$img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
									$img_ex_lc = strtolower($img_ex);

									$allowed_exs = array("jpg", "jpeg", "png");

									if (in_array($img_ex_lc, $allowed_exs)) {
										$new_img_name = uniqid("IMG-", true).'.'.$img_ex_lc;
										$img_upload_path = 'profile_pic/'.$new_img_name;
										move_uploaded_file($tmp_name, $img_upload_path);

											$pass = $conn->prepare("UPDATE customer SET profile_pic = ? WHERE Email = ?");
											$pass->bind_param("ss",$new_img_name, $e);
											$pass->execute();
											$pass->close();
											echo "<font color='blue'> successfully upload your profile pic... </font>";
							    					
							    				

									} else{
										$em = "You can't upload files of this type";
										header("Location: account.php?error=$em");
										exit(); 
									}
								}
							} else {
								$em = "Unknown error occurred!";
								header("Location: account.php?error=$em");
								exit(); 
							}

						}
					?>



				
				</div>
			
			</div>

		</div>
	

	</div>




	<?php include 'footer.php'; ?>
	

	

	</body>
</html>