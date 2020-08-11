<?php
include("config.php");
$id=$_GET['id'];
$sql="DELETE FROM user WHERE id='$id'";
$result=mysqli_query($conn,$sql);
if($result)
	{
	header("location:viewusers.php");
	}
else
	{
	echo "Fail to query";
	header("location:viewusers.php");
	}
?>