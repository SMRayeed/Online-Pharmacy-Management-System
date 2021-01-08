<?php
	session_start();
?>



<!DOCTYPE html>
<html>
	<head>
		<title>
			Online Pharmacy Management System
		</title>
		<link rel="stylesheet" type="text/css" href="style.css">
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<style type="text/css">
			nav
			{
				background-image: url("Images/aaa.jpg");
				float: right;
				word-spacing: 30px;
				padding-right: 70px;
				padding-top: 30px;
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

			section
			{
				background-image: url("Images/back.jpg");
			}

			


		</style>
	</head>

	<body>
		<div class="wrapper">
			<header style="height: 180px; width: 1903px;">
				<div class="logo">
					
					<br><h1 style="color: orange; font-size: 40px; font-family: Lucida Bright; margin-top: -25px;">
						Online Pharmacy<br> Management System
					</h1>
				</div>

				<?php
					if(isset($_SESSION['login_user']))
					{
						?>
						<nav>
							<ul>
								<li> <a style="font-family: Lucida Bright; font-size: 20px; color: orange;" href="medicine.php"><b>Med-Corner</b></a> </li>
								<li> <a style="font-family: Lucida Bright; font-size: 20px; color: orange;" href="profile.php"><b>Profile</b></a> </li>
								<li> <a style="font-family: Lucida Bright; font-size: 20px; color: orange;" href="feedback.php"><b>ABOUT</b></a> </li>
								<li> <a style="font-family: Lucida Bright; font-size: 20px; color: orange;" href="logout.php"><b>LOGOUT</b></a> </li>
							</ul>
						</nav>
						<?php
					}

					else
					{
						?>
							<nav>
								<ul>
									<li> <a style="font-family: Lucida Bright; font-size: 20px; color: orange;" href="registration.php"><b>SIGN-UP</b></a> </li>
									<li> <a style="font-family: Lucida Bright; font-size: 20px; color: orange;" href="customer.php"><b>LOGIN</b></a> </li>
									<li> <a style="font-family: Lucida Bright; font-size: 20px; color: orange;" href="feedback.php"><b>ABOUT</b></a> </li>
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
						<br><br>
						<h1 style="color: white; text-align: center; font-size: 50px; font-family: Lucida Bright">
							You're most Welcome !!!
						</h1>
						<br>
						<h1 style="color: white; text-align: center; font-size: 40px; font-family: Lucida Bright">
							We're Available
						</h1>
						<br>
						<h1 style="color: #e2a900; text-align: center; font-size: 45px; font-family: Lucida Bright">
							Everyday@Anytime !!!
						</h1>
						<br>
					</div>
				</div>
			</section>

		<?php
			include "footer.php";
		?>

		<!--
			<footer>
				<h1 style="color: orange; text-align: right; font-size: 20px; font-family: Lucida Bright; padding-right: 40px; padding-top: 20px;">
							Contact Details :
				</h1>
				<p style="color: orange; text-align: right; font-size: 15px; font-family: Lucida Bright">
					<br><br>
					Email : rayeed.sm@gmail.com <br>
					Contact No. : 01629-271932
				</p>
			</footer>

		-->
		</div>

	</body>
</html>