<head>
<?php include('header.php');?>
<link rel="stylesheet" type="text/css" href="new.css" />
<link rel="stylesheet" type="text/css" href="contact.css" />
</head>

<div id="break"></div>
<!-- HEADER END -->


<!-- BODY DIV START -->

<div class="cu-body">




<div id="contact-banner">
<img src="img/contactbanner.png" />
</div>




	<!-- Form Start -->
	<div id="cuform-div">
    <form class="cu-form" action="thankyou.php" method="post" enctype="multipart/form-data">
    	<p class="cuform-para">Name</p><input type="text" name="u_name" class="cu-name" placeholder="Your Name" required="required" autofocus="autofocus"/>
        <p class="cuform-para">Email Address</p><input type="email" name="u_email"  class="cu-name" placeholder="Enter Email" required="required" />
        <p class="cuform-para">Write Comments</p><textarea class="cutextarea" name="message" placeholder="Comments/Feedback" required="required"></textarea>
         <div class="submit">
        <input type="submit" value="SEND" name="submit" class="submitbtn1" />
        <div class="ease"></div>
      </div>
    
    </form>
    </div>
    <!-- Form end -->


<!-- Map Div Start -->


<div id="map">
<script src='https://maps.googleapis.com/maps/api/js?v=3.exp'></script><div style='overflow:hidden;height:300px;width:700px;'><div id='gmap_canvas' style='height:300px;width:700px;'></div><div><small><a href="http://www.googlemapsgenerator.com/en/">Quickly generate and embed a Google Map on your site!									Click here									Visit our website</a></small></div><div><small><a href="https://couponcode.ng/">nigerian coupon codes</a></small></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style></div><script type='text/javascript'>function init_map(){var myOptions = {zoom:10,center:new google.maps.LatLng(24.7978484,67.04513650000001),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(24.7978484,67.04513650000001)});infowindow = new google.maps.InfoWindow({content:'<strong>Grecious Garments</strong><br>C142, Phase II Badar Commercial DHA, Karachi, Pakistan<br>'});google.maps.event.addListener(marker, 'click', function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);</script>
</div>

<!-- Map Div End-->


</div>

<!-- BODY DIV END -->

<?php include('footer.php');?>

