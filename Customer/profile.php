<?php
	include "connection.php";
	include "navbar_profile.php";
?>

<!DOCTYPE html>
<html>
<head>
	<title>USER PROFILE</title>
	<style type="text/css">
		nav
		{
			padding-left: 50px;
			padding-top: 60px;
			padding-bottom: 30px;

		}
		section
		{
			height: 700px;
			width: 1903px;
			background-color: lightgrey;
			background-image: url("Images/reg.jpg");
			margin-top: -20px;
			margin-bottom: -20px;
		}

		footer
		{
			height: 220px;
			padding-top: 20px;
			padding-bottom: 50px;
						margin-top: -20px;
			margin-bottom: -20px;
		}

		.wrapper
 		{
 			height: 640px;
 			width: 600px;
 			margin: 0 auto;
 			color: white;
 		}

	</style>
</head>

<body>
<section>
	<div>
 		<form action="" method="post">

 		</form>
 		<div class="wrapper">
 			<?php

 				if(isset($_POST['submit']))
 				{
 					?>
 						<script type="text/javascript">
 							window.location="edit.php"
 						</script>
 					<?php
 				}

 				$q=mysqli_query($db,"SELECT * FROM `customer` where username='$_SESSION[login_user]' ;");
 			?>


 			<?php
 				$row=mysqli_fetch_assoc($q);
 			?>
 			<div style="color: orange; font-size: 35px; font-family: Lucida Bright; ; text-align: center; padding-top: 30px;">
	 				<b><br><br>
	 				<?php 	
	 						echo "<p style='padding-left: 15px;'>"."Welcome ".$row['name']." !!!"."</p>" ; echo "</td>";
					?>
					</b>
	 			
 			</div>
 			<?php
 				echo "<b>";
 				echo "<table style='font-family: Lucida Bright; font-size:20px; background-color: #3e310e75;' class='table table-bordered'>";
	 				
					echo "<tr>";
	 					echo "<td>";
	 						echo "<p style='padding-left: 15px;'>"."Customer ID"."</p>" ; echo "</td>";
	 					echo "</td>";
	 					echo "<td>";
	 						echo "<p style='padding-left: 15px;'>".$row['id']."</p>" ; echo "</td>";
	 					echo "</td>";
	 				echo "</tr>";

	 				echo "<tr>";
	 					echo "<td>";
	 						echo "<p style='padding-left: 15px;'>"."Customer Name"."</p>" ; echo "</td>";
	 					echo "</td>";

	 					echo "<td>";
	 						echo "<p style='padding-left: 15px;'>".$row['name']."</p>" ; echo "</td>";
	 					echo "</td>";
	 				echo "</tr>";

	 				echo "<tr>";
	 					echo "<td>";
	 						echo "<p style='padding-left: 15px;'>"."Email Address"."</p>" ; echo "</td>";
	 					echo "</td>";
	 					echo "<td>";
	 						echo "<p style='padding-left: 15px;'>".$row['email']."</p>" ; echo "</td>";
	 					echo "</td>";
	 				echo "</tr>";

	 				echo "<tr>";
	 					echo "<td>";
	 						echo "<p style='padding-left: 15px;'>"."Contact no."."</p>" ; echo "</td>";
	 					echo "</td>";
	 					echo "<td>";
	 						echo "<p style='padding-left: 15px;'>".$row['phone']."</p>" ; echo "</td>";
	 					echo "</td>";
	 				echo "</tr>";

	 				echo "<tr>";
	 					echo "<td>";
	 						echo "<p style='padding-left: 15px;'>"."Username"."</p>" ; echo "</td>";
	 					echo "</td>";
	 					echo "<td>";
	 						echo "<p style='padding-left: 15px;'>".$row['username']."</p>" ; echo "</td>";
	 					echo "</td>";
	 				echo "</tr>";

	 				echo "<tr>";
	 					echo "<td>";
	 						echo "<p style='padding-left: 15px;'>"."Password"."</p>" ; echo "</td>";	
	 					echo "</td>";
	 					echo "<td>";
	 						echo "<p style='padding-left: 15px;'>".$row['password']."</p>" ; echo "</td>";
	 					echo "</td>";
	 				echo "</tr>";

	 				


	 				
 				echo "</table>";
 				echo "</b>";
 			?>
 		</div>
 	</div>
</section>
<?php
	include "footer_bootstrap.php";
?>
</body>
</html>