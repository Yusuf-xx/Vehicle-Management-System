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

#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
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
							<li class="menu-item"><a href="register_mechanic.php">Register mechanic</a></li>
							<li class="menu-item current-menu-item"><a href="services.html">Pending Lists</a></li>
							<li class="menu-item"><a href="services.html">Change Password</a></li>
							<li class="menu-item"><a href="services.html">Manage Profiles</a></li>
							<li class="menu-item"><a href="logout.php">Logout</a></li>
							
								
							</li>
							
						</ul>
					</nav>
					<nav class="mobile-navigation"></nav>
				</div>
			</header> <!-- .site-header -->
			<center><h1>Welcome, Syafiq</h1></center>
			
  <table id="customers">
  <tr>
    <th>MechanicID ID</th>
    <th>Booked By</th>
    <th>Address</th>
	<th>Operations</th>
  </tr>
  
<?php
session_start();
$connection=mysqli_connect("localhost","root","","projectdb"); 
$query = "select * from pending_list";
$data = mysqli_query($connection, $query);
$total = mysqli_num_rows($data);

if ($total != 0)
{
	while ($result = mysqli_fetch_assoc($data))
	{
		echo "
		<tr>
		<td> ".$result['MechanicID']."</td>
		<td> ".$result['Book_by']."</td>
        <td> ".$result['address']."</p></td>	
		<td><u><a href = 'confirm.php?rn=$result[MechanicID]'>Confirm</u></td>
		</tr>
		";
	}
}
else {
	echo "<center><h1>No new pending requests</h1>
	      <p></p></center>";
}
?>
				
	</body>

</html>

