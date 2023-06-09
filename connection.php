<?php

$localhost = "localhost";
$username = "root";
$password = "";
$dbname = "my-portfolio";
$conn = mysqli_connect($localhost,$username,$password,$dbname);
if(!$conn)
{
die("failed to connect!".mysqli_connect_error());
}else 
{
	echo" connection successful!";
}
