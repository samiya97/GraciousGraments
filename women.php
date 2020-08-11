<head>
<?php include('header.php');?>

<link rel="stylesheet" href="css/gallery.css" type="text/css"/>
<link rel="stylesheet" href="card.css" type="text/css"/>
<link rel="stylesheet" href="women.css" type="text/css"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
</head>



<!--Brand detail-->
<div class="main">
<div id="gul"><h1>WOMEN'S COLLECTIONS</h1></div>
<div id="bar"></div>


<!--gallery starts-->
<div id="gallery">
<?php
include('config.php');
$sql= "SELECT * FROM women_collection";
$result= mysqli_query($conn,$sql);

echo "<div id=main_image>";
while($row= mysqli_fetch_array($result)){
echo "<div id=image_1>";
echo "<ul class=product_gallery>";
echo "<li>";
echo " <img src='women/".$row['image']."' >";
echo "<div class=product_description>";
echo "<div class=hoverani>";
echo '<a href="favouraite1.php?id='.$row["spec_id"].'" class="heart">';										
echo "</a>";
echo "</div>";
echo "<div class=hoverani1>";
echo '<a href="description.php?id='.$row["id"].'" class="descr">';
echo "</a>";
echo "</div>";
echo "</div>";      
echo "</li>";
echo "</ul>";
echo "</div>";
}
echo "</div>";
?>
</div>
<!--gallery ends-->
</div>

<?php include('footer.php'); ?>