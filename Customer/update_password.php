<?php 
	include "connection.php";
	include "navbar.php";
?>

<!DOCTYPE html>
<html>
<head>
	<title>Manage Password</title>

	<style type="text/css">
		body
		{
			height: 650px;
			background-image: url("images/7.jpg");
			background-repeat: no-repeat;
		}
		.wrapper
		{
			width: 750px;
			height: 420px;
			margin:100px auto;
			background-color: black;
			opacity: .8;
			color: white;
			padding: 27px 15px;
		}
		.form-control
		{
			padding-left: 20px;
			width: 500px;
		}

		section
		{
			margin-top: -20px;
			margin-bottom: -20px;
			height: 660px;
			width: 1903px;	
			background-image: url("Images/reg.jpg");
		}

			nav
			{
				padding-top: 60px;
				padding-left: 50px;
				margin-top: -20px;
				height: 180px;
				background-image: url("Images/jik.jpg");
			}

			footer
			{
				padding-top: 30px;
			}
	</style>
</head>
<body>
	<section style="padding-top: .1px;">
	<div class="wrapper" style="">
		<div style="text-align: center;">
			<h1 style="color: orange; text-align: center; font-size: 40px;font-family: Lucida Bright; padding-bottom: 15px;">Change Your Password</h1>
		</div>
		<div style="padding-left: 20px; ">
		<form action="" method="post" style="padding-left: 89px;">
			<input style="height: 40px; font-family: Lucida Bright; font-size: 25px;" type="text" name="username" class="form-control" placeholder="Username" required=""><br>
			<input style="height: 40px; font-family: Lucida Bright; font-size: 25px;" type="text" name="email" class="form-control" placeholder="Email" required=""><br>
			<input style="height: 40px; font-family: Lucida Bright; font-size: 25px;" type="text" name="password" class="form-control" placeholder="New Password" required=""><br>
			<div style="padding-left: 110px; padding-top: 30px;">
				<input class="btn btn-default" type="submit" name="submit" value="Update Password"  style="color: black; height: 55px; width: 260px; font-size: 25px; background-color: #e8a23d5e; color: white; font-family: Lucida Bright; ">
			</div>
		</form>

	</div>
	
	<?php

		if(isset($_POST['submit']))
		{
			if(mysqli_query($db,"UPDATE customer SET password='$_POST[password]' WHERE username='$_POST[username]'
			AND email='$_POST[email]' ;"))
			{
				?>
					<script type="text/javascript">
                		alert("The Password Updated Successfully.");
                		window.location = "customer.php";
              		</script> 

				<?php
			}
			else
			{
				?>
					<script type="text/javascript">
                		alert("Username and Email doesn't match !!!");
              		</script> 
				<?php
			}
			
		}
	?>
	</div>

	</section>

	<?php 
		include "footer_bootstrap.php";
	?>
</body>
</html>