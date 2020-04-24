<?php


session_start();
$con=mysqli_connect("localhost","root");
if(!$con){
	echo" connection unsuccessful";
}

mysqli_select_db($con,'mysql');
$password=$_POST['pass'];
$confirm=$_POST['cpass'];
if(strcasecmp($password, $confirm) == 0){
	$uname = $_SESSION['super'];
	$d=" update logindb set password='$confirm' where username='$uname'";
	$red=mysqli_query($con,$d);
	echo "password has been changed";

}

else{
	echo" Something went wrong....";
	echo" Please reeneter the information";
}





?>