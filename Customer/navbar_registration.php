<?php
	session_start();
?>


<!DOCTYPE html>
<html>
<head>
	<title>
		
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
				background-image: url("Images/jik.jpg");
			}
		</style>
</head>

<body>
	<nav class="navbar navbar-inverse" style="width: 1903px;">
		<div class="container-fluid">
			<div class="navbar-header">
				<a style="color: orange; font-family: Lucida Bright; font-size: 30px;" class="navbar-brand active" href="index.php">
					Online Pharmacy Management System
				</a>
			</div>

			<ul style="padding-left: 50px; padding-top: 5px; " class="nav navbar-nav">
						<li> <a style="font-family: Lucida Bright; font-size: 20px; " href="feedback.php"> <b>ABOUT</b>  </a> </li>
			</ul>

			<?php
				if(isset($_SESSION['login_user']))
				{					
					?>
					<ul style="padding-left: 1px; padding-top: 5px; " class="nav navbar-nav">					
						<li> <a style="font-family: Lucida Bright; font-size: 20px; " href="profile.php"> <b>PROFILE</b> </a> </li>
						<li> <a style="font-family: Lucida Bright; font-size: 20px; " href="customer.php"> <b>CUSTOMERS</b> </a> </li>
					</ul>					
					<ul class="nav navbar-nav navbar-right">

						<li> <a style="color: orange; font-family: Lucida Bright; font-size: 25px; padding-right: 25px;" href="profile.php"><span class="glyphicon glyphicon-user">
							<?php 
								echo "<b>".$_SESSION['login_user']."</b>"; 
							?>
						</span></a></li>

						<li> <a style="color: orange; font-family: Lucida Bright; font-size: 25px; padding-right: 65px; " href="logout.php"><span class="glyphicon glyphicon-log-out"> LOGOUT</span></a></li>
					</ul>
					<?php
				}

				else
				{
					?>
					<ul class="nav navbar-nav navbar-right">
						<li> <a style="color: orange; font-family: Lucida Bright; font-size: 25px; padding-right: 70px; " href="customer.php"><span class="glyphicon glyphicon-log-in"> LOGIN</span></a></li>
					</ul>
					<?php
				}

			?>					
		</div>
	</nav>
</body>

</html>