<head>
<?php include('header2.php'); ?>
<link rel="stylesheet" href="useracc2.css" type="text/css"/>
<link rel="stylesheet" href="viewfav.css" type="text/css"/>
</head>

	


<br>
<br>
<div id='fav_item'>
<h1>VIEW FAVORITES</h1>
<div id='bar'></div>
</div>

<div class="model">
			USERS FAVORITES
					
					<?php
					session_start();
					include('config.php');
					$sql="Select * FROM user";
					$record=mysqli_query($conn,$sql);
					
					?>
	
			<?php
			
			while($fetchrecord = mysqli_fetch_assoc($record)){
					$fetch = $fetchrecord['favourites'];
					$decode = json_decode($fetch,true);
					if($decode != 0){
					//echo "<br>";	
					echo "<div >";	
					echo $fetchrecord['id'];
					echo $fetchrecord['name'];
					echo $fetchrecord['email'];
					echo "</div>";
			        echo "<div>";
					foreach($decode as $data ){
			       			
					$user_fav1 = $fetchrecord['favourites'];
		
	$fav_query1 = "SELECT * FROM `men_collection` WHERE `id`='$data'";
$exe1 = mysqli_query($conn,$fav_query1);
if($exe1 == true){
while($fetch_imagedetl1 = mysqli_fetch_assoc($exe1)){
	echo "<div id=image_1>";
    echo "<ul class=product_gallery>";
    echo "<li>";
	echo " <img class=image src='men/".$fetch_imagedetl1['image']."' >";
	echo "<div style=text-align:left;font-size:15px;>";
	echo "<p> <span style=color:#5fa4da;font-size:17px;font-weight:bold;>COLOR:</span>".$fetch_imagedetl1['color']."</p>";
	echo "<p> <span style=color:#5fa4da;font-size:17px;font-weight:bold;>FABRIC:</span>".$fetch_imagedetl1['fabric']."</p>";
	echo "<p> <span style=color:#5fa4da;font-size:17px;font-weight:bold;> DESIGN:</span>" .$fetch_imagedetl1['design']."</p>";
	echo "</div>";
	echo "</li>";
    echo "</ul>";
    echo "</div>";
	}
}

	$user_fav = $fetchrecord['favourites'];
	
	$fav_query = "SELECT * FROM `women_collection` WHERE `spec_id`='$data'";
$exe = mysqli_query($conn,$fav_query);
if($exe == true){
while($fetch_imagedetl = mysqli_fetch_assoc($exe)){
	echo "<div id=image_1>";
    echo "<ul class=product_gallery>";
    echo "<li>";
	echo " <img class=image src='women/".$fetch_imagedetl['image']."' >";
	echo "<div style=text-align:left;font-size:15px;>";
	echo "<p> <span style=color:#5fa4da;font-size:17px;font-weight:bold;>COLOR:</span>".$fetch_imagedetl['color']."</p>";
	echo "<p> <span style=color:#5fa4da;font-size:17px;font-weight:bold;>FABRIC:</span>".$fetch_imagedetl['fabric']."</p>";
	echo "<p> <span style=color:#5fa4da;font-size:17px;font-weight:bold;> DESIGN:</span>" .$fetch_imagedetl['design']."</p>";
	echo "</div>";
	echo "</li>";
    echo "</ul>";
    echo "</div>";
	}
}
                   		
}
echo "</div>";

	
					}			
			}
			
			?>
			




<?php include('footer.php'); ?>
