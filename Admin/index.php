

<?php
	session_start();
?>



<!DOCTYPE html>
<html>
	<head>
		<title>
			Online Pharmacy Management System - Homepage
		</title>
		<link rel="stylesheet" type="text/css" href="style.css">
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
		
		<style type="text/css">
			nav
			{
				float: right;
				word-spacing: 30px;
				padding-right: 70px;
				padding-top: 20px;
			}

			nav li
			{
				display: inline-block;
				line-height: 150px;
			}
			header
			{
				background-image: url("Images/jik.jpg");
			}

			footer
			{
				padding-top: 15px;
				margin-top: -20px;

			}

			section
			{
				background-image: url("Images/back.jpg");
			}


		</style>
	</head>

	<body>
		<div class="wrapper">
			<header>
				<div class="logo">
					<h1 style="color: orange; font-size: 40px; font-family: Lucida Bright; padding-top: 25px;">
						Online Pharmacy <br> Management System
					</h1>
				</div>

				<?php
					if(isset($_SESSION['login_user']))
					{
						?>
						<nav>
							<ul>
								
								<li> <a style="font-family: Lucida Bright; font-size: 22px; color: orange;" href="medicine.php"><b>Med-Corner</b></a> </li>
								<li> <a style="font-family: Lucida Bright; font-size: 22px; color: orange;" href="customerslist.php"><b>Customers</b></a> </li>
								<li> <a style="font-family: Lucida Bright; font-size: 25px; color: orange; " href="logout.php"><span class="glyphicon glyphicon-log-out">LOGOUT</span></a> </li>

							</ul>
						</nav>
						<?php
					}

					else
					{
						?>
							<nav>
								<ul>
									<li> <a style="font-family: Lucida Bright; font-size: 25px; word-spacing: 1px; color: orange;" href="admin.php"><span class="glyphicon glyphicon-log-in"> LOGIN</span></a> </li>
								</ul>
							</nav>
						<?php
					}
				?>

				
			</header>

			<section>
				<div>
					<br><br><br><br><br>
					<div class="box">
						<br>
						<h1 style="color: darkorange; text-align: center; font-size: 55px; font-family: Lucida Bright; padding-top: 8px;">
							Welcome Back !!!
						</h1>
						
						<h1 style="color: darkorange; text-align: center; font-size: 50px; font-family: Lucida Bright">
							Manage your Website
						</h1>
					</div>
				</div>
			</section>

		<?php
			include "footer_bootstrap.php";
		?>

		</div>

	</body>
</html>