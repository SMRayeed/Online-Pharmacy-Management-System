<?php
	include "connection.php";
	include "navbar_registration.php";
?>


<!DOCTYPE html>
<html>
	<head>
		<title>
			Customer Registration
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
				padding-left: 50px;
				padding-top: 60px;
				padding-bottom: 30px;
				background-image: url("Images/jik.jpg");

			}
			section
			{
				margin-top: -20px;
				margin-bottom: -20px;
			}

			footer
			{
				height: 200px;
				padding-top: 20px;
				padding-bottom: 50px;
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
					<li> <a style="font-family: Lucida Bright; font-size: 30px; padding-right: 70px; color: orange;" href="student.php"><span class="glyphicon glyphicon-log-in"> LOGIN</span></a> </li>
				</ul>					
			</div>
		</nav>	
		-->		


		<section>
			<div class="std_reg_image">
				<br><br>
					<div class="box2">
						<br>
						<h1 style="color: orange; text-align: center; font-size: 40px; font-family: Lucida Bright;">
							Register Now !!!
						</h1>
						<br>

						<form name="registration" action="" method="post">
							<div class="registration">
								<input class="form-control" type="int" name="id" placeholder="   Customer ID" required="" style="font-family: Lucida Bright; font-size: 20px; height: 30px; width: 350px;">
								<br>
								<input class="form-control" type="text" name="name" placeholder="   Customer Name" required="" style="font-family: Lucida Bright; font-size: 20px; height: 30px; width: 350px;" >
								<br>
								<input class="form-control" type="text" name="email" placeholder="   Email Address" required="" style="font-family: Lucida Bright; font-size: 20px; height: 30px; width: 350px;" >
								<br>
								<input class="form-control" type="text" name="phone" placeholder="   Contact No." required="" style="font-family: Lucida Bright; font-size: 20px; height: 30px; width: 350px;" >
								<br>
								<input class="form-control" type="text" name="username" placeholder="   Set Username" required="" style="font-family: Lucida Bright; font-size: 20px; height: 30px; width: 350px;" >
								<br>
								<input class="form-control" type="password" name="password" placeholder="   Set Password" required="" style="font-family: Lucida Bright; font-size: 20px; height: 30px; width: 350px;" >
								<br>
								<div class="reg_button">
									<input class="btn btn-default" type="submit" name="submit" value="Create Account"  style="color: black; height: 55px; width: 260px; font-size: 25px; background-color: #e8a23d5e; color: white; font-family: Lucida Bright; ">
								</div>
								
							</div>
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
        $count = 0;
        $sql = "SELECT username from `customer`";
        $res = mysqli_query($db,$sql);

        while($row = mysqli_fetch_assoc($res))
        {
	          if($row['username']==$_POST['username'])
	          {
	            $count = $count + 1;
	          }
        }
        
        if($count == 0)
        {
          mysqli_query($db,"INSERT INTO `customer` VALUES('$_POST[id]', '$_POST[name]', '$_POST[email]', '$_POST[phone]', '$_POST[username]', '$_POST[password]');");
        ?>
          <script type="text/javascript" style="font-size: 30px; font-family: Lucida Bright;">
           alert("Congratulations!!!\nYour Account is Created Successfully!");\
           window.location = "customer.php";
          </script>
        <?php
        }
        else
        {

          ?>
            <script type="text/javascript" style="font-size: 30px; font-family: Lucida Bright;">
              alert("The username already exists! ");
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