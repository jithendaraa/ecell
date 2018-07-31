<?php

session_start();
if(isset($_SESSION['user']))
{ 
?>

<!DOCTYPE html>
<html>
<head>
	<title>Form</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<style type="text/css">
		table{
			color: white;
		}
		td,th{
			text-align: center;
		}
		td{
			width: 280px;
			border-left: 1px solid yellow;
			border-right: 1px solid yellow;
			border-bottom: 1px solid yellow;
			color: orange;
			font-size: 20px;
		}
		th{
			border-bottom: 1px solid yellow;
			border-left: 1px solid yellow;
			border-right: 1px solid yellow;
			border-top: 1px solid yellow;
			font-size: 25px;
			
		}
	</style>
</head>
<body style="background-color: rgb(40,40,40);">
    <br><br>
<center>
	<h1 style="color: red;">Visitor details(Get info requests)</h1>
	<br><br>
	<table>
		<th>Name</th>
		<th>Email</th>
		<th>Contact</th>
		<th>Time</th>
		<?php
                $con=mysqli_connect("localhost","jith","Abhinav1234","ecell") or die(mysqli_error($con));
                $entry = mysqli_query($con,"SELECT * FROM visitor");
                
                while ($result=mysqli_fetch_assoc($entry)) 
                {
                	$output = "";
                	$output .= "<tr><td>".$result['name']."</td><td>".$result['email']."</td><td>".$result['contact']."</td><td>".$result['time']."</td></tr>";
                	echo $output;

                	
                }
		?>
	</table>
	
</center>

</body>
</html>

<?php }

else
{
  echo "You're not logged in as an admin";
} 
?>