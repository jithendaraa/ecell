<?php
session_start();
if(isset($_SESSION['user']))
session_destroy();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Form</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body style="background-color: black;">
    <br><br>
<center>
	<form style="width: 30%;" method="get" action="admincheck.php">
		<div class="panel panel-primary">
			<div class="panel-heading">Admin login</div>
			<div class="panel-body"> 
				<input type="text" class="form form-group form-control" id="aname" name="name" placeholder="Name" style="width: 80%;">
				<input type="password" class="form form-group form-control" id="email" name="password" placeholder="Password" style="width: 80%;">
				<input type="submit" class="btn btn-primary" value="Submit" style="width:200px;">
			</div>
		</div>
	</form>
</center>

</body>
</html>

