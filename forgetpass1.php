<?php


session_start();
$con=mysqli_connect("localhost","root");
mysqli_select_db($con,'mysql');

$email=$_POST['email'];
$pass=$_POST['psw'];
$confirm=$_POST['confirm'];
$e=" select * from login1 where emailid='$email'";
$result=mysqli_query($con,$e);
echo $email;
$num = mysqli_num_rows($result);
if ($num == 1){
	echo"   already exist";

	$getRow = mysqli_fetch_row($result);
 
	echo "<label>username </label>".$getRow['1'];
	

 
}
if($pass==$confirm){
		$d=" update login1 set password='$confirm' where emailid='$email'";
		$red=mysqli_query($con,$d);
		echo "password has been changed";
}

?>