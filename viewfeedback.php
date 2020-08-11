<head>
<?php include('header2.php'); ?>
<link rel="stylesheet" href="viewfeedback.css" type="text/css"/>
</head>

	


<br>
<br>
<div id='fav_item'>
<h1>VIEW FEEDBACKS</h1>
<div id='bar'></div>
</div>

<div class="model">
			USERS FEEDBACK
					
					<?php
					session_start();
					include('config.php');
					$sql2="Select * FROM contact";
					$record2=mysqli_query($conn,$sql2);
					?>
			<table width="800px" class="tb" cellpadding="1" cellspacing="2" >
			<tr>
			<th>ID</th>
			<th>Name</th>
			<th>Email</th>
			<th >Message</th>
			
			</tr>
			<?php
			while($result2=mysqli_fetch_assoc($record2)){
			echo "<tr>";
			echo "<td>".$result2['id']."</td>";
			echo "<td>".$result2['name']."</td>";
			echo "<td>".$result2['email']."</td>";
			echo "<td>".$result2['message']."</td>";
			echo '<td><a class="del" href="CDeleteFeedback.php?id='.$result2['id'].'">Delete</a></td>';
			echo "</tr>";
			}
			?>
			</table>

					
			</div>
<?php include('footer.php'); ?>
