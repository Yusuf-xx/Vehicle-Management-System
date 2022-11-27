<?php
 
    session_start();
    $connection=mysqli_connect("localhost","root","","projectdb"); 
    
    if(isset($_POST['submit'])){
        $current=mysqli_real_escape_string($connection,strtolower($_POST['current']));
        
        $new=mysqli_real_escape_string($connection,$_POST['new']); 
        
        $check_query="SELECT * FROM signup WHERE address='$current'";
        
        $address_res=mysqli_query($connection,$check_query);
        if(mysqli_num_rows($address_query)>0){ 
		    $sql = "UPDATE signup set address = '$new' where address = '$current'";
            echo '<script> alert("Breakdown Address Updated succesfully!")</script>';
        } 

else {
	
 echo '<script> alert("Wrong address entered")</script>';
 echo '<script> window.locaion.href = "update_address.php" </script>';
}
}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">
		
		<title>Car Workshop | Admin</title>
		
		<!-- Loading third party fonts -->
		<link href="http://fonts.googleapis.com/css?family=Titillium+Web:300,400,700|" rel="stylesheet" type="text/css">
		<link href="fonts/font-awesome.min.css" rel="stylesheet" type="text/css">

		<!-- Loading main css file -->
		<link rel="stylesheet" href="style.css">
		
		
		<!--[if lt IE 9]>
		<script src="js/ie-support/html5.js"></script>
		<script src="js/ie-support/respond.js"></script>
		<![endif]-->
		
</head>

<style>
	
	body {
    background:#DDDDDD;
    font-family: 'Roboto', sans-serif;
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

/* ----- form ----- */ 

input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
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
							<li class="menu-item"><a href="book.php">Book Mechanic</a></li>
							<li class="menu-item current-menu-item"><a href="update_address.php">Update Information</a></li>
							<li class="menu-item"><a href="logout.php">Logout</a></li>
							
  </div> 
						</ul>
					</nav>
					<nav class="mobile-navigation"></nav>
				</div>
			</header> <!-- .site-header -->
			
			<div>
  <form action="" method="post">
    <label for="fname">Current address</label>
    <input type="text" id="fname" name="current" placeholder="Your current address">

    <label for="lname">New Address</label>
    <input type="text" id="lname" name="new" placeholder="Your new breakdown address">

    
  
    <button type="submit" value="Submit">Update</button>
  </form>
</div>

</body>
</html>
