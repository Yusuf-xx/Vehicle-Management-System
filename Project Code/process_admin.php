<? php

$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'projectdb';

$username = 

$con = mysqli_connect($host, $user, $pass, $db);

if(!$con)
	die('Couldn't connect to:' .mysql_error());
else 
	echo 'Connected successfully';
?>