<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>G.G</title>
</head>
<?php   
   include('config.php');
	session_start();
    $email=$_SESSION['eml'];
	$sql="Select * from user where email='$email'";
	$record=mysqli_query($conn,$sql);
	$result=mysqli_fetch_assoc($record);
   
	?>
<body>
<header>
<div id="headtxt">WELCOME TO THE <span>ASIA'S</span> FAMOUS DESIGNER WEBSITE.<img id="flag" src="img/asia.png"/> 
<div style="float:right;width:170px;font-weight: bolder;font-size:14px;color:#48494e;text-decoration:none;">
<a href="logout.php" style="margin-right:47px;text-decoration:none;">LOGOUT   </a>
<br/>
<a href="useracc.php" style="margin-right:18px;text-decoration:none;">MY ACCOUNT</a>
</div>
</div>

<div id="headline"></div>
<div id="logo">
<a href="index.php"><img alt="logo" src="img/logo3.png"/></a>

<h1>Gracious Garments </br> Style up your life </h1>
</div>
<!--NAV-->
<div id="tab">
<div id="navi">
<div id="navi-inner">

<li><a href="index.php"  class="active" style="border-left:1px solid#999;">Home</a></li>

<li><a href="collections.php">Collections</a>
  <ul>
   <li><a href="men.php">Men</a></li>
   <li><a href="women.php">Women</a></li>
  
  </ul>
  </li>
<li><a href="about.php">About us</a></li>
<li><a href="contact.php">Contact us </a></li>
<li><a href="useracc.php"><?php echo "".$result['name']; ?></a></li>	
</div>
</div>
</div>

<!--NAV-END-->
</header>
</body>
</html>