<?php
 
    session_start();
    $connection=mysqli_connect("localhost","root","","projectdb"); 
   
  
	
	$ID = $_GET['rn'];
	
	$deletequery = "DELETE FROM pending_list WHERE MechanicID = '$ID'";
	$delete_res = mysqli_query($connection,$deletequery);
    echo '<script> alert("Confirmed!")</script>';
    header('location: admin_login.php');


?>
	
	