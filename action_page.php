<?php


session_start();
$con=mysqli_connect("localhost","root");
if($con){
	echo" connection successful";
}
else{
	echo"no connection";
}
mysqli_select_db($con,'mysql');
$username=$_POST['uname'];
$password=$_POST['psw'];
$q=" select * from logindb where username ='$username' ";
$p=" select * from logindb where password ='$password' ";
$result = mysqli_query($con,$q);
$result1 = mysqli_query($con,$p);
$num = mysqli_num_rows($result);
$num1 = mysqli_num_rows($result1);
if ($num != 1){
	echo"   Sorry Username does not exit...... Please Create new account ";
}
else if ($num1 != 1){
	echo"   Sorry password is incorrect";
}
else{
	echo"   successfully login";
	<!DOCTYPE html>
<html>
<head>
	<title>Home Page</title>
</head>
<body>
	<h1>Welcome to our Website....</h1>

</body>
</html>
}





?>