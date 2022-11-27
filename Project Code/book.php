<?php
 
    session_start();
    $connection=mysqli_connect("localhost","root","","projectdb"); 
    
    
    $client_name = $_SESSION['username'];
	$search = mysqli_query($connection, "select * from signup where name = '$client_name'");
	$ID = $_GET['rn'];
    $address = "jalan tun razak";
	
	
	
	$check_query = "select * from pending_list where MechanicID = '$ID'";
	
	$insertpending = "INSERT INTO pending_list(MechanicID, Book_by) VALUES ('$ID', '$client_name', $address)";
        
    
    $insert_res = mysqli_query($connection,$insertpending);
    echo '<script> alert("Booking Successful!")</script>';
    echo '<script> window.locaion.href = "client_login.php" </script>';


?>
	
	