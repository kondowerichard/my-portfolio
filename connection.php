<?php

$localhost = "localhost";
$username = "root";
$password = "";
$dbname = "login_sample_db";
$conn = mysqli_connect($localhost,$username,$password,$dbname);
if(!$conn)
{
die("failed to connect!".mysqli_error());
}else {
	echo" connection successful!";
}
