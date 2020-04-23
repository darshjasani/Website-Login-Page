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
$phnumber=$_POST['phonenu'];
$email=$_POST['email'];
$p=" select * from logindb where phonenumber='$phnumber' ";
$result = mysqli_query($con,$p);
$num = mysqli_num_rows($result);
$e=" select * from logindb where emailid='$email' ";
$result1 = mysqli_query($con,$e);
$num1 = mysqli_num_rows($result1);

if ($num == 1 and $num1 == 1){
	$getRow = mysqli_fetch_row($result);
	echo "<label>username </label>".$getRow['1'];
	include 'test.html';
}
else{
	echo" Something went wrong....";
	echo" Please reeneter the information";
}





?>