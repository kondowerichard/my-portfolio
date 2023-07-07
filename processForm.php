<?php

$localhost = "localhost";
$username = "root";
$password = "";
$dbname = "messagedb";

$conn = mysqli_connect($localhost,$username,$password,$dbname);

if(!$conn)
{
die("failed to connect!".mysqli_connect_error());
}
if($_SERVER["REQUEST_METHOD"]="POST"){
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST["phone"];
$subject = $_POST['subject'];
$message = $_POST['message'];
$sql="INSERT INTO message(name,email,phone,subject,message) VALUES('$name','$email',$phone,'$subject','$message')";
if(mysqli_query($conn,$sql)){
echo "Message sent successfully";
}else{
    echo mysqli_connect_error($conn);
}
}
?>