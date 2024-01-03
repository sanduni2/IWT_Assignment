<!DOCTYPE html>
<html>
<head>
	<title>Account side bar</title>

	<link rel="stylesheet" type="text/css" href="styles/ss.css">
	<link rel="stylesheet" type="text/css" href="styles/account.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />


</head>

<body>

	<?php


		$side_type = $_SESSION["acc-side"];

		switch ($side_type) {

			case 's1':
				$active1 = 'active_a';
				break;

			case 's2':
				$active2 = 'active_a';
				break;

			case 's3':
				$active3 = 'active_a';
				break;

			case 's4':
				$active4 = 'active_a';
				break;

			case 's5':
				$active5 = 'active_a';
				break;

			case 's6':
				$active6 = 'active_a';
				break;
			
			default:
				
				break;
		}

	?>

	<div class="abc">
		<div class="sidebar">
			<div class="logo_a">

				<ul class="main_a">
					<li class="<?php echo $active1 ?>">
						<a href="account.php">
							<i class="fa-solid fa-user"></i>
							<span>My <br> Account</span>
						</a>
					</li>

					<li class="<?php echo $active2 ?>">
						<a href="vehicle_details.php">
							<i class="fa-solid fa-car"></i>
							<span>Vehicle <br> Details</span>
						</a>
					</li>

					<li class="<?php echo $active3 ?>">
						<a href="package_details.php">
							<i class="fa-solid fa-money-check-dollar"></i>
							<span>Payment <br> History</span>
						</a>
					</li>

					<li class="<?php echo $active4 ?>">
						<a href="claim_history.php">
							<i class="fa-solid fa-car-burst"></i>
							<span>Claim <br> History</span>
						</a>
					</li>

					<li class="<?php echo $active5 ?>">
						<a href="support_tickets.php">
							<i class="fa-solid fa-envelope-open-text"></i>
							<span>My <br> Tickets</span>
						</a>
					</li>

					<li class="<?php echo $active6 ?>">
						<a href="settings.php">
							<i class="fa-solid fa-gear"></i>
							<span>Settings</span>
						</a>
					</li>

				</ul>
			</div>

		
		</div>

	</div>
</body>
</html>