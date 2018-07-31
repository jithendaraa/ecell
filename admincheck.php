<?php

if(isset($_GET['name']) && isset($_GET['password']))
{
	$name = $_GET['name'];
	$password = $_GET['password'];
	if($name != "" && $password != "")
	{
		$con=mysqli_connect("localhost","jith","Abhinav1234","ecell") or die(mysqli_error($con));
        $entry = mysqli_query($con,"SELECT * FROM userlogin");
        $result = mysqli_fetch_assoc($entry);
        if($name == $result['name'] && $password == $result['password'])
        {
        	header("Location: admind.php");
        	session_start();
        	$_SESSION['user']=$name;
        }
        else
        {
        	session_destroy();
        }
	}
}

?>