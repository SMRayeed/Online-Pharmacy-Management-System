<?php
  include "connection.php";
  include "navbar.php";
?>

<!DOCTYPE html>
<html>
<head>
	<title>Cart</title>
	<style type="text/css">
		header
		{
			height: 180px;
		}
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
			height: 680px;
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
			padding-top: 25px; 
		}

		@media screen and (max-height: 450px) 
		{
			.sidenav {padding-top: 15px;}
			.sidenav a {font-size: 18px;}
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

			<div class="h">	<a style="font-size:30px; font-family: Lucida Bright; color: orange;" href="customerslist.php"> <b> List of Customers </b> </a> </div>
			<div class="h">	<a style="font-size:30px; font-family: Lucida Bright; color: orange;" href="medicine.php"> <b> List of Medicines </b> </a> </div>
			<div class="h">	<a style="font-size:30px; font-family: Lucida Bright; color: orange;" href="request.php"> <b> My Wish-list </b> </a> </div>
			

		</div>	

		<div id="main">
			<div style="padding-left: 20px;">
			<span style="font-size:30px; font-family: Lucida Bright; color: orange; padding-left: 20px; cursor:pointer" onclick="openNav()">&#9776; <b> Options <br><br></b> </span>
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
			
			<h1 style="font-size: 40px; font-family: Lucida Bright; color: orange; padding-left: 40px; padding-top: 10px;">
			
			<?php
			echo $_SESSION['login_user']."'s Cart";
			?>

			</h1>
				<?php
					if(isset($_SESSION['login_user']))
					{
						$q = mysqli_query($db,"SELECT cart.med_id, medicine.name as mname, cart.cus_id, cart.username, medicine.cost from cart, medicine where username='$_SESSION[login_user]' AND cart.med_id = medicine.id;");
						$q2 = mysqli_query($db,"select sum(medicine.cost) as `total` from cart, medicine where username='$_SESSION[login_user]' AND cart.med_id = medicine.id;");

						if(mysqli_num_rows($q)==0)
						{
							echo "<p style='color: orange; font-size:30px; text-align: center; font-family: Lucida Bright; padding-top: 0px;'> <strong> <b>The Cart is Empty ... </b> </strong> </p>";
						}
						else
						{
							echo "<table class='table table-bordered table-hover' style='padding-top: 15px;'>";
								echo "<tr style='background-color: #fff4d6ba; font-family: Lucida Bright; font-size: 20px;'>";
									//Table header
									
									echo "<th style='text-align: center;' >"; echo "Medicine ID";  echo "</th>";
									echo "<th style='text-align: center;' >"; echo "Medicine Name";  echo "</th>";
									echo "<th style='text-align: center;' >"; echo "Customer ID";  echo "</th>";
									echo "<th style='text-align: center;' >"; echo "Customer Username";  echo "</th>";
									echo "<th style='text-align: center;' >"; echo "Medicine Cost";  echo "</th>";
									
								echo "</tr>";	

							while($row=mysqli_fetch_assoc($q))
							{
								echo "<tr style='background-color:#ffedc7bd '>";
									echo "<td style='text-align: center; font-family: Lucida Bright; font-size: 18px; '>"; echo $row['med_id']; echo "</td>";
									echo "<td style='text-align: center; font-family: Lucida Bright; font-size: 18px; '>"; echo $row['mname']; echo "</td>";
									echo "<td style='text-align: center; font-family: Lucida Bright; font-size: 18px; '>"; echo $row['cus_id']; echo "</td>";
									echo "<td style='text-align: center; font-family: Lucida Bright; font-size: 18px; '>"; echo $row['username']; echo "</td>";
									echo "<td style='text-align: center; font-family: Lucida Bright; font-size: 18px; '>"; echo $row['cost']; echo "</td>";
								
								echo "</tr>";
							}

							echo "</table>";
							while($row = mysqli_fetch_assoc($q2))
							{
								echo "<p style='color: orange; font-size:30px; text-align: center; font-family: Lucida Bright; padding-top: 0px;'> <strong> <b>"; echo "The Total Cost(tk) is : ".$row['total']; echo "</b> </strong> </p>";
							}
							



						}

					}

					else
					{
						echo "<p style='color: orange; font-size:30px; text-align: center; font-family: Lucida Bright; padding-top: 0px;'> <strong> <b>There's no pending request ... </b> </strong> </p>";
						
					}

				?>

			</div>
		</div>


	</section>

	<?php
			include "footer_bootstrap.php";
	?>

</body>
</html>