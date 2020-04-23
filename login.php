<?php


session_start();
$con=mysqli_connect("localhost","root");
if(!$con){
	echo" connection unsuccessful";
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
	echo" Welcome to $username";
	include 'test.html';
}





?>