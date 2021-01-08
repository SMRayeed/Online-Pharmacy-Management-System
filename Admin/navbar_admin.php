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
				<a style="color: orange; font-family: Lucida Bright; font-size: 30px;" class="navbar-brand active" href="">
					Online Pharmacy Management System
				</a>
			</div>
			<?php
				if(isset($_SESSION['login_user']))
				{
					?>
					<ul style="padding-left: 50px; padding-top: 5px; " class="nav navbar-nav">					
						<li> <a style="font-family: Lucida Bright; font-size: 20px; " href="medicine.php"> <b>Med-Corner</b> </a> </li>
						<li> <a style="font-family: Lucida Bright; font-size: 20px; " href="customerslist.php"> <b>Customers</b>  </a> </li>
						<li> <a style="font-family: Lucida Bright; font-size: 20px; " href="companieslist.php"> <b>Manufacturers</b>  </a> </li>
					</ul>
					<?php
				}
			?>


			<?php
				
				if(isset($_SESSION['login_user']))
				{					
					?>

					<ul class="nav navbar-nav navbar-right">

						<li> <a style="color: orange; font-family: Lucida Bright; font-size: 25px; padding-right: 55px;" href=""><span class="glyphicon glyphicon-user">
							<?php 
								echo "<b>ADMIN</b>"; 
							?>
						</span></a></li>

					</ul>

					<?php
				}

				else
				{
					?>
					<ul style="padding-top: 5px;" class="nav navbar-nav navbar-right">
						<b style="color: orange; font-family: Lucida Bright; font-size: 25px; padding-right: 40px; "> 
							Creating Admin Account is Restricted!!!
						</b>

					</ul>
					<?php
				}

			?>			
		</div>
	</nav>
</body>

</html>