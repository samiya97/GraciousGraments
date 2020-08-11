<head>
<?php include('header2.php');?>
<link rel="stylesheet" href="adminacc.css" type="text/css"/>
</head>

<img src="img/man.png" style="margin-left:600px;height:150px;width:140px;" />
<h1 style="text-align:center;">WELCOME TO ADMIN DASHBOARD</h1>
<?php
session_start();
 ?> 
<br />
<div id="linkss">
<a href="viewusers.php"><img src="img/userview.png" /></a>
<a href="viewfeedback.php"><img src="img/feedback.jpg" /></a>
<a href="uploadimg.php"><img src="img/upload.png" /></a>
</div>
<br />
<br />
<div id="linkss2">
<a href="viewfav.php"><img src="img/favorites.jpg" /></a>
</div>

<?php include('footer.php');?>