<head>
<?php include('header.php');?>
<link rel="stylesheet" href="new.css" type="text/css"/>
<link rel="stylesheet" href="favouraite.css" type="text/css"/>
</head>


<?php

include('config.php');


if(isset($_GET['id'])){
	$id = $_GET['id'];
	$user_email = $_SESSION["eml"];
	
	$inquery  = "INSERT INTO `temp`(`email`,`imageid`) VALUES ('$user_email','$id')";
	$runin = mysqli_query($conn,$inquery);
				
					$stquery = "SELECT `imageid` FROM `temp` WHERE `email`='$user_email'";
					$runsl = mysqli_query($conn,$stquery);
					$fetch = mysqli_fetch_assoc($runsl);
					
					$alrdyadquery = "SELECT `imageid` FROM `temp` WHERE `email`='$user_email' AND `imageid`='$id'";
					$alrdyadrun = mysqli_query($conn,$alrdyadquery);
					$row = mysqli_num_rows($alrdyadrun);
					
				$arr = array();
		while($data = mysqli_fetch_array($runsl)){
			
			$arr[] = $data['imageid'];
		}
		

			$arr2 = array_unique($arr);
			
		$jsonarray = json_encode($arr2);
		
	
	$user_id = $_SESSION["uid"];
	
//	echo $user_email."".$user_id;
	$uquery = "SELECT * FROM `user`";
	$exe = mysqli_query($conn,$uquery);
	
	
	$query = "UPDATE `user` SET `favourites`=('$jsonarray') WHERE `id`='$user_id'";
	
	$run = mysqli_query($conn,$query);
	
	if($row != 1){
		
		?>
		<script>
				alert('This image is already added to your favourite!!');
				window.open("men.php","_self");
		</script>
		<?php
		
	}
	else {
		
		?>
		<script>
				alert('This image is added to your favourite, if you want to view your favourite list go to your account');
				window.open("men.php","_self");
		</script>
		<?php
		
		}
	
}

?>


<?php include('footer.php');?>
