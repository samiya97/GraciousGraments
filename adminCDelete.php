<?php include('header2.php'); ?>
<link href="adminCDelete.css" rel="stylesheet" type="text/css">
</head>
<body>
	<?php
	include('config.php');

	$id=$_GET['id'];
	$sql2="Select * FROM user WHERE id='$id'";
	$record2=mysqli_query($conn,$sql2);
	$result2=mysqli_fetch_assoc($record2);
	?>
	

			<div class="box">
				Are you sure you want to delete <?php echo "".$result2['name'].""; ?> 's Account?
					<br /> <br />
					<?php
					echo '<a class="yes" href="adminDeleteUser.php?id='.$result2['id'].'">Yes</a>';
					?>
					<a href="viewusers.php">No</a>

			</div>			
	
<?php include('footer.php'); ?>