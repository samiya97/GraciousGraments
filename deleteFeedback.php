<?php
include("config.php");
$id=$_GET['id'];
$sql="DELETE FROM contact WHERE id='$id'";
$result=mysqli_query($conn,$sql);
if($result)
	{
	header("location:viewfeedback.php");
	}
else
	{
	echo "Fail to query";
	header("location:viewfeedback.php");
	}
?>