<?php  

$sname = "localhost";
$uname = "root";
$password = "";

$db_name = "my_db";

$con = mysqli_connect($sname, $uname, $password, $db_name);

if (!$con) {
	echo "Connection Failed!";
	exit();
}