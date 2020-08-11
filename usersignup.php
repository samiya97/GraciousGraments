<?php

$name = $_POST['name'];
$email = $_POST['email'];
$pword = $_POST['password'];

include('config.php');

session_start();


$_SESSION["nme"] = $name;
$_SESSION["em"] = $email;
$_SESSION["pw"] = $pword; 
$fav = "";
$qry = "SELECT * FROM `user` WHERE `email`='$email'";
$run = mysqli_query($conn,$qry);
$row = mysqli_num_rows($run);


	if($row>0){
		?>
	 	<script>
   		alert('this email already exits, please enter another email');	
		window.open('register.php','_self');
		</script>
	<?php
	}

	else{
	if(filter_var($_SESSION["nme"],FILTER_SANITIZE_STRING)){
		if(filter_var($_SESSION["em"],FILTER_VALIDATE_EMAIL)){
			if(filter_var($_SESSION["pw"],FILTER_SANITIZE_SPECIAL_CHARS)){
				$query = "INSERT INTO `user`( `name`, `email`, `password`,`favourites`) VALUES ('$name','$email','$pword','$fav')";
				$excute = mysqli_query($conn,$query);
				if($excute == true){
				header('location:login.php');
				}
			
			}	
		}
	}
}
 ?>