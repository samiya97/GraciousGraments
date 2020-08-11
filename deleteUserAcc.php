<?php include('header2.php'); ?>
<link href="adminCDelete.css" rel="stylesheet" type="text/css">
</head>
<body>
	<?php
	include('config.php');
    session_start();
	$email=$_SESSION["eml"];
	$sql2="Select * FROM user WHERE `email`='$email'";
	$record2=mysqli_query($conn,$sql2);
	$result2=mysqli_fetch_assoc($record2);
	
	
	
	?>
	

		<div class="box">
				Are you sure you want to delete your Account?
					<br /> 
					<span style="color:red;">Warning: This action cannot be undone</span><br />
					<?php
					echo '<a class="yes" href="deleteMyAcc.php">Yes</a>';
					?>
					<a href="useracc.php">No</a>
			</div>			
	
<?php include('footer.php'); ?>