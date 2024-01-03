<!DOCTYPE html>
<html>
<head>
	<title>Director About</title>

	<link rel="stylesheet" type="text/css" href="styles/ss.css">
	<link rel="stylesheet" type="text/css" href="styles/about.css">
	

</head>

<body>

		<?php
			session_start();

			$e = $_SESSION["username"];

			if($e === 0){
				include ('home_navigation.php');
			}
			else{

				include 'navigation.php';
			}

		?>


	<br>


	<img src="images/Board-of-Directors.png" alt="Board of Directors" width="100%" height="300px">

	<div class="topic">
		<div class="about">
			<h4><i><u>Board of Directors</u></i></h4>
		</div>

		<br>

	</div>	

	<div  class="members"><br>
		<p>The Board of Directors comprises directors with extensive experience and varied financial,
		management and entrepreneurial skills.</p>
		<br>

		<div class="row" align="center">
			<div class="column">
				<img src="images/male_images (1).png" alt="Mr. S.C. Dilshan" style="width:200px">
				<figcaption><b><p class="name">Mr. S.C. Dilshan</b><br>Executive Chairman</p>
				</figcaption>

			</div>
		
			<div class="column">
				<img src="images/male_images (1).png" alt="Mr. L.A.V.U. Liyanaarachchi" style="width:200px">
				<figcaption><b><p class="name">Mr. L.A.V.U. Liyanaarachchi</b><br>Executive Director</p>
				</figcaption>

			</div>

			<div class="column">
				<img src="images/male_images (1).png" alt="Mr. R.P.D.Y. Jayakodi" style="width:200px">
				<figcaption><b><p class="name">Mr. R.P.D.Y. Jayakodi</b><br>Non Executive Director</p>
				</figcaption>

			</div>
		</div><br>

		<div class="row" align="center">
			<div class="column1">
				<img src="images/female_images__1.png" alt="Ms. S.N.S. Samaraweera" style="width:200px">
				<figcaption><b><p class="name">Ms. S.N.S. Samaraweera</b><br>Executive Director</p>
				</figcaption>

			</div>
		
			<div class="column1">
				<img src="images/female_images__1.png" alt="Ms. I.V.I. Chamodya" style="width:200px">
				<figcaption><b><p class="name">Ms. I.V.I. Chamodya</b><br>Non Executive Director</p>
				</figcaption>

			</div>
		</div><br>
	</div>			


	<?php include 'footer.php'; ?>

</body>
</html>