<?php

	$server="localhost";
	$username="root";
	$password="";
	$dbname="sp_bikebaalma";


	$connect=mysqli_connect($server,$username,$password,$dbname);
	

	if (!$connect)
	{
		die("connection failed".mysqli_connect_error());
	}



?>