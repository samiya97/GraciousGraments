<head>
<?php include('header.php');?>
<link rel="stylesheet" href="new.css" type="text/css"/>
<link rel="stylesheet" href="desc.css" type="text/css"/>
</head>


<!--Brand detail-->
<?php
include('config.php');
if(isset($_GET['id'])){
	$id = $_GET['id'];
}
	$sql= "SELECT * FROM women_collection where id='$id'";
	$result= mysqli_query($conn,$sql);
	$row= mysqli_fetch_array($result);
?>
<div class="main">
<div id="gul"><h1>Design Details</h1></div>
<div id="bar"></div>
<div class="container3">
 <?php
echo " <img class=image src='women/".$row['image']."' >";
?>

</div>
<div id="gul"><h1>Description</h1></div>
<div id="bar"></div>
<div id="details">
<?php
echo "<div id='description'>";
echo "<p> <span>COLOR: </span>".$row['color']."</p>";
echo "<p> <span>FABRIC: </span>".$row['fabric']."</p>";
echo "<p> <span> DESIGN: </span>" .$row['design']."</p>";
echo "</div>";
?>
</div>   
<?php include('footer.php');?>