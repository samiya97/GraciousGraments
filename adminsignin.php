<?php


session_start();
include('config.php');
$email=$_POST['email'];
$_SESSION['admin'] = '$email';
$pass=$_POST['password'];
$query ="SELECT * FROM admin WHERE `email`='$email' AND `password`='$pass'";
$run = mysqli_query($conn,$query);
$row = mysqli_num_rows($run);

if($row==1){
header('location:adminacc.php');
}
else{
?>
	<script>
		alert('incorrect email or password');
		window.open("adminlogin.php","_self");
	</script>
	<?php
}
?>