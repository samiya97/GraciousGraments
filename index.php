<head>
<?php include('header.php');?>
<link rel="stylesheet" href="home.css" type="text/css"/>
<link rel="stylesheet" href="css/gallery.css" type="text/css"/>
<link rel="stylesheet" href="card.css" type="text/css"/>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script type="text/javascript">
$(document).ready(function(){
     $("#myCarousel").carousel({
         interval : 3000,
         pause: false
     });
});
</script>
<style type="text/css">
.carousel{
    background: #2f4357;
   // margin-top: 20px;
}
.carousel .item img{
    margin: 0 auto; /* Align slide image horizontally center */
    width:100%;
height:500px;
}
.bs-example{
	//margin: 20px;
	
}

</style>
</head>

<!--slider-->
<div class="bs-example">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
    	<!-- Carousel indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
            <li data-target="#myCarousel" data-slide-to="3"></li>
            <li data-target="#myCarousel" data-slide-to="4"></li>
            <li data-target="#myCarousel" data-slide-to="5"></li>
			<li data-target="#myCarousel" data-slide-to="6"></li>
			<li data-target="#myCarousel" data-slide-to="7"></li>
			
        </ol>   
        <!-- Wrapper for carousel items -->
        <div class="carousel-inner">
            <div class="active item">
                <img src="slider/slider_1.jpg" alt="First Slide">
         		<div class="carousel-caption">
             
                  <p>Women's Collection</p>
                </div>
            </div>
			   <div class="item">
                <img src="img/womentag.jpg" alt="Second Slide">
         		<div class="carousel-caption">
             
                  <p>Women's Collection</p>
                </div>
            </div>
            <div class="item">
                <img src="slider/slider_2.jpg" alt="Third Slide">
                <div class="carousel-caption">
          
                  <p>Women's Collection.</p>
                </div>
            </div>
             <div class="item">
                <img src="slider/slider_3.jpg" alt="Fourth Slide">
                <div class="carousel-caption">
            
                  <p>Women's Collection </p>
                </div>
            </div>
			   <div class="item">
                <img src="img/mentag.jpg" alt="Fifth Slide">
         		<div class="carousel-caption">
             
                  <p>Women's Collection</p>
                </div>
            </div>
             <div class="item">
                <img src="slider/slider_4.jpg" alt="Sixth Slide">
                <div class="carousel-caption">
                
                  <p>Men's Collection</p>
                </div>
            </div>
            <div class="item">
                <img src="slider/slider_5.jpg" alt="Seventh Slide">
                <div class="carousel-caption">
              
                  <p>Men's Collection</p>
                </div>
            </div>
			<div class="item">
                <img src="slider/slider_6.jpg" alt="Eigth Slide">
                <div class="carousel-caption">
              
                  <p>Men's Collection</p>
                </div>
            </div>
      </div>
        <!-- Carousel controls -->
        <a class="carousel-control left" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
        </a>
        <a class="carousel-control right" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
        </a>
    </div>
</div>
<!--slider ends-->
<div id="product"><h1>Collections</h1></div>
<div id="bar"></div>
<div id="slidex">
<div class="container3">
 <a href="men.php"> <img src="img/mentag.jpg" alt="Avatar" class="image"></a>
  <a href="women.php">  <img src="img/womentag.jpg" alt="Avatar" class="image"></a>
  
</div>
</div>

<div id="product"><h1>Latest Designs</h1></div>
<div id="bar"></div>
<!--gallery starts-->
<div id="gallery">
<?php
include('config.php');
$sql= "SELECT * FROM men_collection ORDER BY RAND() LIMIT 3";
$result= mysqli_query($conn,$sql);
$count=0;
echo "<div id=main_image>";
while ( $count <= 3){
while($row=mysqli_fetch_array($result)){
echo "<div id=image_1>";
echo "<ul class=product_gallery>";
echo "<li>";
echo " <img src='men/".$row['image']."' >";
echo "<div class=product_description>";
echo "<div class=hoverani>";
echo "<a href='favouraite.php?id=".$row['id']."' class=heart>";
echo "</a>";
echo "</div>";
echo "<div class=hoverani1>";
echo '<a href="description2.php?id='.$row["id"].'" class="descr">';
echo "</a>";
echo "</div>";
echo "</div>";      
echo "</li>";
echo "</ul>";
echo "</div>";
}
$count ++;}
echo "</div>";
?>
<?php
include('config.php');
$sql= "SELECT * FROM women_collection ORDER BY RAND() LIMIT 3";
$result= mysqli_query($conn,$sql);
$count=0;
echo "<div id=main_image>";
while ( $count <= 3){
while($row=mysqli_fetch_array($result)){
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
$count ++;}
echo "</div>";
?>
</div>
<!--gallery ends-->
</div>
<?php
/*

if(isset($_SESSION["eml"])==true){
	?>
	<script type="text/javascript">
	window.history.forward();
	function noBack() { window.history.forward(); }
	</script>
	<body onload="noBack();" onpageshow="if (event.persisted) noBack();" onunload="">

<?php

}
*/
?>
<?php include('footer.php');?>

