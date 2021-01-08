<?php
  include "connection.php";
  include "navbar.php";
?>

<!DOCTYPE html>
<html>
<head>
	<title>Add Medicines</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">

  <style type="text/css">
    .srch
    {
     padding-left: 1000px;

    }

    body 
    {
      font-family: "Lucida Bright", sans-serif;
      transition: background-color .5s;
    }

    .sidenav 
    {
      height: 100%;
      margin-top: 50px;
      width: 0;
      position: fixed;
      z-index: 1;
      top: 0;
      left: 0;
      background-color: #222;
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
      color: white;
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
      .sidenav {padding-top: 15px;}
      .sidenav a {font-size: 18px;}
    }

    .img-circle
    {
      margin-left: 20px;
    }

    .h:hover
    {
      color: orange;
      background-color: white;
    }

    .book
    {
      width: 400px;
      margin: 0px auto;
    }

    .form-control
    {
      background-color: #080707;
      color: white;
      height: 40px;
    }

    section
    {
      height: 850px;
      background-color: lightgrey;
      background-image: url("Images/aa.jpg");
      margin-top: -30px;
      margin-bottom: -30px;
    }

    nav
    {
      margin-top: -20px;
      margin-bottom: -20px;
      padding-left: 50px;
      padding-top: 60px;
      padding-bottom: 30px;
    }

    footer
    {
      height: 220px;
      padding-top: 20px;
      padding-bottom: 50px;
      margin-top: -30px;
    }

  </style>


</head>
<body style="height: 800px;">
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
      
      <div class="h"> <a style="font-size:30px; font-family: Lucida Bright; color: orange;" href="customerslist.php"> <b> List of Customers </b> </a> </div>
      <div class="h"> <a style="font-size:30px; font-family: Lucida Bright; color: orange;" href="request.php"> <b> Customers Wish-list </b> </a> </div>
      <div class="h"> <a style="font-size:30px; font-family: Lucida Bright; color: orange;" href="medicine.php"> <b> List of Medicines </b> </a> </div>
      <div class="h"> <a style="font-size:30px; font-family: Lucida Bright; color: orange;" href=" "> <b> List of Companies </b> </a> </div>

      

    </div>

      <div id="main">
        <div style="padding-left: 20px;">
          <span style="font-size:30px; font-family: Lucida Bright; color: orange; cursor:pointer" onclick="openNav()">&#9776; <b> Options </b> </span>
        </div>
  
          <div class="box2" style="text-align: center;">
            <br>
            <h1 style="color: orange; text-align: center; font-size: 25px; font-family: Lucida Bright;">
              Enlist Now !!!
            </h1>
            <br>

            <form name="registration" action="" method="post" style="color: white;">
              <div class="registration">
                <input class="form-control" type="int" name="id" placeholder="   Medicine ID" required="" style="font-family: Lucida Bright; font-size: 20px; height: 30px; width: 350px;">
                <br>
                <input class="form-control" type="text" name="name" placeholder="   Medicine Name" required="" style="font-family: Lucida Bright; font-size: 20px; height: 30px; width: 350px;" >
                <br>
                <input class="form-control" type="text" name="manufacturer" placeholder="   Manufacturer" required="" style="font-family: Lucida Bright; font-size: 20px; height: 30px; width: 350px;" >
                <br>
                <input class="form-control" type="text" name="type" placeholder="   Medicine Type" required="" style="font-family: Lucida Bright; font-size: 20px; height: 30px; width: 350px;" >
                <br>
                <input class="form-control" type="text" name="status" placeholder="   Status" required="" style="font-family: Lucida Bright; font-size: 20px; height: 30px; width: 350px;" >
                <br>
                <input class="form-control" type="int" name="quantity" placeholder="   Quantity" required="" style="font-family: Lucida Bright; font-size: 20px; height: 30px; width: 350px;" >
                <br>
                <input class="form-control" type="int" name="cost" placeholder="   Medicine Cost" required="" style="font-family: Lucida Bright; font-size: 20px; height: 30px; width: 350px;" >
                <br>
                <div class="reg_button">
                  <input class="btn btn-default" type="submit" name="submit" value="Add to Library"  style="color: black; height: 45px; width: 260px; font-size: 25px; background-color: #e8a23d5e; color: white; font-family: Lucida Bright; ">
                </div>
                
              </div>
            </form>
          </div>

      <?php
          if(isset($_POST['submit']))
          {
            if(isset($_SESSION['login_user']))
            {
              mysqli_query($db,"INSERT INTO medicine VALUES ('$_POST[id]', '$_POST[name]', '$_POST[manufacturer]', '$_POST[type]', '$_POST[status]', '$_POST[quantity]', '$_POST[cost]') ;");
              ?>
                <script type="text/javascript">
                  alert("Medicine Added Successfully.");
                  if(confirm("Add More?"))
                  {
                    window.location = "add.php";
                  }
                  else
                  {
                    window.location = "medicine.php";
                  }
                </script>

              <?php

            }
            else
            {
              ?>
                <script type="text/javascript">
                  alert("You need to login first.");
                </script>
              <?php
            }
          }
      ?>
      </div>
      <script>
      function openNav() 
      {
        document.getElementById("mySidenav").style.width = "350px";
        document.getElementById("main").style.marginLeft = "350px";
        document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
      }

      function closeNav() 
      {
        document.getElementById("mySidenav").style.width = "0";
        document.getElementById("main").style.marginLeft= "0";
        document.body.style.backgroundColor = "#024629";
      }
      </script>

      <?php
      include "footer_bootstrap.php";
      ?>

    </section>

  </body>
</html>
