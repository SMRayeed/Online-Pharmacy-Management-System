<?php
  include "connection.php";
  include "navbar.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Customers List</title>
	<style type="text/css">
		nav
		{
			margin-top: -20px;
			margin-bottom: -20px;
			padding-left: 50px;
			padding-top: 60px;
			padding-bottom: 30px;

		}
		section
		{
			background-color: lightgrey;
			background-image: url("Images/aa.jpg");
			margin-top: -20px;
			margin-bottom: -20px;
		}

		footer
		{
			height: 200px;
			padding-top: 20px;
			padding-bottom: 50px;
		}

		body 
		{
			font-family: "Lato", sans-serif;
			transition: background-color .5s;
		}

		.sidenav 
		{
			height: 100%;
			width: 0;
			position: fixed;
			z-index: 1;
			top: 0;
			left: 0;
			background-color: #111;
			overflow-x: hidden;
			transition: 0.5s;
			padding-top: 60px;
		}

		.sidenav a 
		{
			padding: 8px 8px 8px 32px;
			text-decoration: none;
			font-size: 25px;
			color: #818181;
			display: block;
			transition: 0.3s;
		}

		.sidenav a:hover 
		{
			color: #f1f1f1;
		}

		.sidenav .closebtn 
		{
			color: orange;
			position: absolute;
			top: 0;
			right: 25px;
			font-size: 36px;
			margin-left: 50px;
		}

		#main 
		{
			transition: margin-left .5s;
			padding: 16px;
		}

		@media screen and (max-height: 450px) 
		{
			.sidenav 
			{
				padding-top: 15px;
			}

			.sidenav a 
			{
				font-size: 18px;
			}
		}

		.h:hover
		{
			color:  orange;
			background-color: white;
		}		


	</style>
</head>
<body>
	<section>
		<div id="mySidenav" class="sidenav">
			<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
				<div style="color: orange; font-family: Lucida Bright; margin-left: 30px; font-size: 30px;">
					<b><u>
	                <?php
	                if(isset($_SESSION['login_user']))
	                { 	

	                    echo "Welcome ".$_SESSION['login_user']; 
	                }
	                ?>
	                </u></b>
	            </div><br>
			<div class="h">  <a style="font-size:30px; font-family: Lucida Bright; color: orange;" href="medicine.php"> <b> Med-Corner </b> </a> </div>
			<div class="h">  <a style="font-size:30px; font-family: Lucida Bright; color: orange;" href="request.php"> <b> Customers Wish-list </b> </a> </div>


		</div>

		<div id="main">
			<div style="padding-left: 20px;">
			<span style="font-size:30px; font-family: Lucida Bright; color: orange; cursor:pointer" onclick="openNav()">&#9776; <b> Options </b> </span>
			</div>
		
			<script>
				function openNav() 
				{
					document.getElementById("mySidenav").style.width = "350px";
					document.getElementById("main").style.marginLeft = "350px";
					document.body.style.backgroundColor = "rgba(0,0,0,0.7)";
				}

				function closeNav() 
				{
					document.getElementById("mySidenav").style.width = "0";
					document.getElementById("main").style.marginLeft= "0";
					document.body.style.backgroundColor = "white";
				}
			</script>

				<div>
					<form class="navbar-form" method="post" name="form1" style="text-align: right; padding-top: 18px; padding-right: 60px;">
						<div>
							<input class="form-control" type="text" name="search" placeholder="  Search for Customers by Name " required="" style="font-family: Lucida Bright; font-size: 18px; height: 49.3px; width: 350px;">
								<button class="btn btn-default" type="submit" name="submit" style="background-color: #e8a23d5e; font-size: 25px; ">
									<span class="glyphicon glyphicon-search" style="color: white; height: 27.5px;"></span>
								</button>
						</div>				
					</form>
				</div>
			<h1 style="font-size: 50px; font-family: Lucida Bright; color: orange; padding-left: 50px; padding-top: 0px;">
				List Of Customers<br>
			</h1>
	
		<?php

			if (isset($_POST['submit'])) 
			{
				$q = mysqli_query($db, "SELECT * FROM `customer` WHERE name like '%$_POST[search]%';");

				if(mysqli_num_rows($q)==0)
				{
					echo "<p style='color: orange; font-size:30px; text-align: center; font-family: Lucida Bright; padding-top: 0px;'> <strong> <b>Sorry!!! Entry of the Customer has not been found! </b> </strong> </p>";
				}

				else
				{
					echo "<table class='table table-bordered table-hover' >";
						echo "<tr style='background-color: #fff4d6ba; font-family: Lucida Bright; font-size: 20px;'>";
							//Table header
						echo "<th style='text-align:center;'>"; echo "ID";	echo "</th>";
						echo "<th style='text-align:center;'>"; echo "Name";  echo "</th>";
						echo "<th style='text-align:center;'>"; echo "Email";  echo "</th>";
						echo "<th style='text-align:center;'>"; echo "Contact No.";  echo "</th>";
						echo "<th style='text-align:center;'>"; echo "Username";  echo "</th>";
						echo "</tr>";	

						while($row=mysqli_fetch_assoc($q))
						{
							echo "<tr style='background-color:#ffedc7bd '>";
								echo "<td style='text-align:center; font-family: Lucida Bright; font-size: 15px; '>"; echo $row['id']; echo "</td>";
								echo "<td style='text-align:left; padding-left: 15 px; font-family: Lucida Bright; font-size: 15px; '>"; echo "<p style='padding-left: 15px;'>".$row['name']."</p>" ; echo "</td>";
								echo "<td style='text-align:left; padding-left: 15 px; font-family: Lucida Bright; font-size: 15px; '>"; echo "<p style='padding-left: 15px;'>".$row['email']."</p>" ; echo "</td>";
								echo "<td style='text-align:center; font-family: Lucida Bright; font-size: 15px; '>"; echo $row['phone']; echo "</td>";
								echo "<td style='text-align:center; font-family: Lucida Bright; font-size: 15px; '>"; echo $row['username']; echo "</td>";
				
							echo "</tr>";
						}
					echo "</table>";
				}
			}

			else
			{
				$res=mysqli_query($db, "select * from `customer` order by `customer`.`id`;");

				echo "<table class='table table-bordered table-hover' >";
					echo "<tr style='background-color: #fff4d6ba; font-family: Lucida Bright; font-size: 20px;'>";
						//Table header
						echo "<th style='text-align:center;'>"; echo "ID";	echo "</th>";
						echo "<th style='text-align:center;'>"; echo "Name";  echo "</th>";
						echo "<th style='text-align:center;'>"; echo "Email";  echo "</th>";
						echo "<th style='text-align:center;'>"; echo "Contact No.";  echo "</th>";
						echo "<th style='text-align:center;'>"; echo "Username";  echo "</th>";
			
					echo "</tr>";	

					while($row=mysqli_fetch_assoc($res))
					{
						echo "<tr style='background-color:#ffedc7bd; '>";
								echo "<td style='text-align:center; font-family: Lucida Bright; font-size: 15px; '>"; echo $row['id']; echo "</td>";
								echo "<td style='text-align:left; font-family: Lucida Bright; font-size: 15px; '>"; echo "<p style='padding-left: 15px;'>".$row['name']."</p>" ; echo "</td>";
								echo "<td style='text-align:left; font-family: Lucida Bright; font-size: 15px; '>"; echo "<p style='padding-left: 15px;'>".$row['email']."</p>" ; echo "</td>";
								echo "<td style='text-align:center; font-family: Lucida Bright; font-size: 15px; '>"; echo $row['phone']; echo "</td>";
								echo "<td style='text-align:center; font-family: Lucida Bright; font-size: 15px; '>"; echo $row['username']; echo "</td>";
	
						echo "</tr>";
					}
				echo "</table>";				
			}
		?>
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