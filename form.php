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
$gender=$_POST['gen'];
$phnumber=$_POST['phno'];
$email=$_POST['eid'];
$city=$_POST['city'];
$q=" select * from logindb where emailid='$email' ";
$result = mysqli_query($con,$q);
$num = mysqli_num_rows($result);
if ($num == 1){
	echo"   already exit Please enter other emailid";
}
else{
	$qy=" insert into logindb(username,password,gender,phonenumber,emailid,city) values('$username','$password','$gender',
	'$phnumber','$email','$city') ";
	mysqli_query($con,$qy);
}





?>