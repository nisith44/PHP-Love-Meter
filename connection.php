<?php 

	$connection=mysqli_connect('127.0.0.1','root','','love');

	if(mysqli_errno($connection)){
		die('database connection error' . mysqli_error());
	}else{
		//echo "connection succesfull";
	}

 ?>