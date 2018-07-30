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
			width: 200px;
			border-left: 1px solid white;
			border-right: 1px solid white;
			border-bottom: 1px solid white;
		}
		th{
			border-bottom: 1px solid red;
			border-left: 1px solid red;
			border-right: 1px solid red;
			border-top: 1px solid red;
			
		}
	</style>
</head>
<body style="background-color: black;">
    <br><br>
<center>
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