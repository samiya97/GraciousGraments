<?php
session_start();
include('config.php');
$email=$_SESSION["eml"];
$tempdel = "SELECT  FROM `user` WHERE `email`='$email'";
$record2 = mysqli_query($conn,$tempdel);
$result2=mysqli_fetch_assoc($record2);

$sql="DELETE  FROM user WHERE email='$email'";
$result=mysqli_query($conn,$sql);
if($result)
	{
		
	session_destroy();
	header("location:register.php");
	}
else
	{
	header("location:useracc.php");

	}
?>