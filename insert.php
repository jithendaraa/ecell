<?php


if(isset($_GET['name']) && isset($_GET['email']) && isset($_GET['contact']))
{
	$name = $_GET['name'];
	$email = $_GET['email'];
	$contact = $_GET['contact'];

	if($name != "" && $email != "" && $contact != "")
	{
		$con=mysqli_connect("localhost","jith","Abhinav1234","ecell") or die(mysqli_error($con));
		$insert_query = mysqli_query($con,"INSERT INTO visitor (name,email,contact) VALUES('$name','$email','$contact')");
		header("Location: index.html");
	}
     
}
?>
