<?php
	include "connection.php";
	include "navbar_admin.php";
?>



<!DOCTYPE html>
<html>
	<head>
		<title>
			Admin Login
		</title>
		<link rel="stylesheet" type="text/css" href="style.css">
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<style>
			nav
			{
				height: 140px;
				padding-left: 50px;
				padding-top: 50px;
				padding-bottom: 20px;
				background-image: url("Images/jik.jpg");

			}
			section
			{
				height: 680px;
				margin-top: -20px;
				margin-bottom: -20px;
				background-image: url("Images/back.jpg");
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
		
		<section>
			<div>
				<br>
					<div class="box1">
						<br>
						<h1 style="color: darkorange; text-align: center; font-size: 45px; padding-top: 40px; font-family: Lucida Bright;">
							Pharmacy Management System !!!
						</h1>
						<h1 style="color: darkorange; text-align: center; font-size: 45px; padding-top: 8px; font-family: Lucida Bright;">
							Log in as ADMIN
						</h1>
						<br>
						<form style="padding-top: 20px;" name="login" action="" method="post">
							<div class="login">
								<input class="form-control" type="text" name="username" placeholder="  Admin Username" required="" style="font-family: Lucida Bright; font-size: 30px; height: 60px;">
								<br>
								<input class="form-control" type="password" name="password" placeholder="  Admin Password" required="" style="font-family: Lucida Bright; font-size: 30px; height: 60px;" >
								<br>
								<div style="padding-top: 20px;" class="login_button">
									<input class="btn btn-default" type="submit" name="submit" value="Login"  style="color: black; height: 55px; width: 200px; font-size: 25px; background-color: #e8a23d5e; color: white; font-family: Lucida Bright; padding-top: 5px; text-align: center;">
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
				$res = mysqli_query($db, "SELECT * FROM `admin` WHERE username = '$_POST[username]' && password = '$_POST[password]';");

				$count = mysqli_num_rows($res) ;


				if($count!=0)
				{
					$_SESSION['login_user'] = $_POST['username'];

					?>

					<script type="text/javascript" style="font-size: 30px; font-family: Lucida Bright; float: left;">
						window.location = "index.php";
						alert("Login Successful !!!");	
					</script>

					<?php
				}

				else
				{
					?>

					<script type="text/javascript" style="font-size: 100px; font-family: Lucida Bright; float: left;">
						alert("Username and Password do not match !!!");	
					</script>

					<?php
				}				 
			}
		?>

	</body>
</html>