<?php 
$conn = mysqli_connect('localhost','root','','handmade');
		if(mysqli_connect_errno()!==0)
		{
			die("Error: Could not connect to the database. An error ".mysqli_connect_error()." ocurred.");
		}

mysqli_set_charset($conn,'utf8');
?>
