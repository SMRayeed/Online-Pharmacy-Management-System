<?php
	include "connection.php";
	include "navbar_feedback.php";
?>

<!DOCTYPE html>
<html>
<head>
	<title>
		About US
	</title>
	<style type="text/css">
		nav
		{
			padding-left: 50px;
			padding-top: 60px;
			padding-bottom: 30px;

		}
		section
		{
			height: 700px;
			background-color: lightgrey;
			background-image: url("Images/e.jpg");
			margin-top: -20px;
			margin-bottom: -20px;
		}

		footer
		{
			height: 200px;
			padding-top: 20px;
			padding-bottom: 50px;
		}

		.wrapper_feed
		{
			padding-top: 15px;
			height: 600px;
			width: 1800px;
			background-color: #000000;
			margin: 20px auto;
			opacity: 0.80;    
		}

	</style>

</head>
<body>
	<section>
		<br>
		<div class="wrapper_feed">
			<h1 style="color: white; font-size: 30px; font-family: Lucida Bright; text-align: left; padding-top: 60px; ; padding-left: 60px; padding-right: 40px;">
				The main objective of Online Pharmacy Management System is to develop an automated system to virtualize an entire pharmacy.  It has two sides – <br>
				<li style="padding-left: 60px; padding-top: 8px; color: orange;"> 
					<a style="font-family: Lucida Bright; font-size: 30px; color: white; " href="index.php"> 
						<b style="color: orange;">Admin-Side</b></a></li>
						<li style="padding-left: 100px; padding-top: 8px; color: white;">
							Admin manages the website.
						</li>						
						<li style="padding-left: 100px; padding-top: 8px; color: white;">
							Admin can see all the users information.
						</li>
						<li style="padding-left: 100px; padding-top: 8px; color: white;">
							Admin can add new medicines & also delete medicines.
						</li>

				
				<li style="padding-left: 60px; padding-top: 8px; color: orange;"> 
					<a style="font-family: Lucida Bright; font-size: 30px; color: white; " href="index.php"> 
						<b style="color: orange;">Customer-Side</b></a></li>
						<li style="padding-left: 100px; padding-top: 8px; color: white;">
							Customers can login to their account and see their personal information.
						</li>
						<li style="padding-left: 100px; padding-top: 8px; color: white;">
							Customers can search a medicine by name or search a medicine of a particular manufacturer.
						</li>
						<li style="padding-left: 100px; padding-top: 8px; color: white;">
							Customers can can add a medicine to their wish-list. The details along with the cost will be shown.
						</li>

			</h1>

		</div>
		
	</section>

	<?php
			include "footer_bootstrap.php";
	?>
	
	<!--
	<footer>
		<h1 style="color: darkorange; text-align: right; font-size: 20px; font-family: Lucida Bright; padding-right: 30px; padding-top: 20px;">
					Contact Details :
		</h1>
		<p style="color: orange; text-align: right; font-size: 15px; font-family: Lucida Bright">
			<br>
			Email : rayeed.sm@gmail.com <br>
			Contact No. : 01629-271932
		</p>
	</footer>
	-->

</body>
</html>