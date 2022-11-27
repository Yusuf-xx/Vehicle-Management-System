<?php
    $connection=mysqli_connect("localhost","root","","projectdb");

    session_start();
    
    if(isset($_POST['submit'])){
        $name= mysqli_real_escape_string($connection,strtolower($_POST['name']));
        $expert= mysqli_real_escape_string($connection,strtolower($_POST['expert']));
		$phone= mysqli_real_escape_string($connection,strtolower($_POST['phone']));
        $password= mysqli_real_escape_string($connection,strtolower($_POST['pass'])); 
        
        $check_query= "SELECT *FROM mechanic WHERE name='$name' or expert='$expert'";
		$signup_query = "INSERT INTO mechanic(`ID`, `name`,`expert`, `phone`, `password`) VALUES ('','$name', '$expert', '$phone', '$password')";
        
        $check_res=mysqli_query($connection,$check_query);
        
        if(mysqli_num_rows($check_res)>0){
             echo '<script> alert("Username or expert already exists")</script>';
            
        }
        
        else{
            $signup_res = mysqli_query($connection,$signup_query);
                 echo '<script> alert("Registration Successful!")</script>';
            
        }   
    }
	
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">
		
		<title>Car Workshop | Service</title>
		
		<!-- Loading third party fonts -->
		<link href="http://fonts.googleapis.com/css?family=Titillium+Web:300,400,700|" rel="stylesheet" type="text/css">
		<link href="fonts/font-awesome.min.css" rel="stylesheet" type="text/css">

		<!-- Loading main css file -->
		<link rel="stylesheet" href="style.css">
		
		<!--[if lt IE 9]>
		<script src="js/ie-support/html5.js"></script>
		<script src="js/ie-support/respond.js"></script>
		<![endif]-->

	
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  background-color:gray;
}

.navbar {
  overflow: hidden;
  background-color: #333;
}

.navbar a {
  float: left;
  font-size: 16px;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

.dropdown {
  float: left;
  overflow: hidden;
}

.dropdown .dropbtn {
  font-size: 16px;  
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}

.navbar a:hover, .dropdown:hover .dropbtn {
  background-color: red;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: black;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {
  background-color: #ddd;
}

.dropdown:hover .dropdown-content {
  display: block;
}
input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

button[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

div {
  border-radius: 5px;
  
  padding: 20px;
}
</style>

</head>

	<body>
		
		<div id="site-content">
			
			<header class="site-header">
				<div class="container">
					<a id="branding" href="index.html">
						<img src="images/logo.png" alt="Company Logo" class="logo">
						<h1 class="site-title">Quddus' <span>Technicians</span></h1>
					</a>

					<nav class="main-navigation">
						<button type="button" class="menu-toggle"><i class="fa fa-bars"></i></button>
						<ul class="menu">
							<li class="menu-item"><a href="index.html">Home</a></li>
							<li class="menu-item current-menu-item"><a href="register_mechanic.php">Register mechanic</a></li>
							<li class="menu-item"><a href="admin_login.php">Pending Lists</a></li>
							<li class="menu-item"><a href="logout.php">Logout</a></li>
							
								
							</li>
							
						</ul>
					</nav>
					<nav class="mobile-navigation"></nav>
				</div>
			</header> <!-- .site-header -->
			
  <div>
  <form action="" method="post">
  <h3>Register for mechanic</h3>
    <label for="fname" style = "color:black">Name</label>
    <input type="text" id="fname" name="name" placeholder="Your name" required>

    <label for="expert" style = "color:black">Expert</label>
    <input type="text" id="lname" name="expert" placeholder="Expertise" required>
	
	<label for="phone" style = "color:black">Phone</label>
    <input type="text" id="lname" name="phone" placeholder="Phone no" required>

    <label for="password" style = "color:black">Password</label>
    <input type="password" id="lname" name="pass" placeholder="Mechanic's Paswword" required>
  
    <button type="submit" name="submit" value="submit">Register</button>
  </form>
</div>

<div class="copy">
						<b><center><p style = "color:black">Copyright 2021 UTM. Designed by Group 1. All rights reserved.</p></center><b>
					</div>
			
			
			
			

			
		
	</body>

</html>