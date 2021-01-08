<?php
	include "connection.php";
	include "navbar_customer.php";
	
?>



<!DOCTYPE html>
<html>
	<head>
		<title>
			Customer Login
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
				height: 160px;
				padding-left: 50px;
				padding-top: 70px;
				padding-bottom: 20px;
				background-image: url("Images/jik.jpg");

			}
			section
			{
				height: 650px;
				margin-top: -20px;
				margin-bottom: -20px;
			}
			footer
			{
				height: 200px;
				padding-top: 20px;
				padding-bottom: 40px;
			}


		</style>
	</head>

	<body>
		<!--
		<nav class="navbar navbar-inverse" style="width: 1903px;">
			<div class="container-fluid">
				<div class="navbar-header">
					<a style="color: orange; font-family: Lucida Bright; font-size: 30px;" class="navbar-brand active" href="index.php">
						Online Library Management System
					</a>
				</div>
				<ul style="padding-left: 50px; padding-top: 5px; " class="nav navbar-nav">					
					<li> <a style="font-family: Lucida Bright; font-size: 20px; " href="index.php"> <b>HOME</b> </a> </li>
					<li> <a style="font-family: Lucida Bright; font-size: 20px; " href="books.php"> <b>BOOKS</b> </a> </li>
					<li> <a style="font-family: Lucida Bright; font-size: 20px; " href="feedback.php"> <b>ABOUT</b>  </a> </li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li> <a style="color: orange; font-family: Lucida Bright; font-size: 25px; " href="student.php"><span class="glyphicon glyphicon-log-in"> LOGIN</span></a>/li>
					<li> <a style="color: orange; font-family: Lucida Bright; font-size: 25px; " href="student.php"><span class="glyphicon glyphicon-log-out"> LOGOUT</span></a>/li>
					<li> <a style="color: orange; font-family: Lucida Bright; font-size: 25px; padding-right: 65px;" href="registration.php"><span class="glyphicon glyphicon-user"> SIGN-UP</span></a> </li>
				</ul>					
			</div>
		</nav>		
		-->
		
		<section>
			<div class="std_login_image">
				<br>
					<div class="box1">
						<br>
						<h1 style="color: white; text-align: center; font-size: 45px; font-family: Lucida Bright;">
							Pharmacy Management System !!!
						</h1>
						<h1 style="color: white; text-align: center; font-size: 45px; font-family: Lucida Bright;">
							User Login Form
						</h1>
						<br>
						<form name="login" action="" method="post">
							<div class="login">
								<input class="form-control" type="text" name="username" placeholder="   Username" required="" style="font-family: Lucida Bright; font-size: 30px; ">
								<br>
								<input class="form-control" type="password" name="password" placeholder="   Password" required="" style="font-family: Lucida Bright; font-size: 30px;" >\
								<br>
								<div class="login_button">
									<input class="btn btn-default" type="submit" name="submit" value="Login"  style="color: black; height: 55px; width: 200px; font-size: 25px; background-color: #e8a23d5e; color: white; font-family: Lucida Bright; padding-top: 5px;">
								</div>
								
																
							</div>
							<!--
							<div class="login_button">
								<button style="color: red; height: 55px; width: 200px; font-size: 32px; font-family: Lucida Bright; background-color: #e8a23d5e; color: white;">
									Login
								</button>
							</div>
							-->
						</form>
						<p style="font-family: Lucida Bright;">
							<br><br>
							<a style="font-size: 20px; color: white; padding-left: 70px; text-decoration: none;" href="update_password.php">Forgot Password?</a>
							<a  style="font-size: 25px; color: orange; padding-left: 540px;text-decoration: none; " href="registration.php">New Here? Sign-Up</a>							
						</p>
					</div>
			</div>
		</section>

		<?php
			include "footer_bootstrap.php";
		?>

		<?php
			if(isset($_POST['submit']))
			{
				$count = 0 ;
				$res = mysqli_query($db, "SELECT * FROM `customer` WHERE username = '$_POST[username]' && password = '$_POST[password]';");

				$count = mysqli_num_rows($res) ;
				if($count == 0)
				{
					?>

					<script type="text/javascript" style="font-size: 100px; font-family: Lucida Bright; float: left;">
						alert("Username and Password do not match !!!");	
					</script>

					<?php
				}

				else
				{
					$_SESSION['login_user'] = $_POST['username'];

					?>

					<script type="text/javascript" style="font-size: 30px; font-family: Lucida Bright; float: left;">
						window.location = "index.php";
						alert("Login Successful !!!");	
					</script>

					<?php
				}				 
			}
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