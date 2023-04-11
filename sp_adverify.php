<?php

include ('sp_connection.php');
	
	$vtype=$_POST['vtype'];
	$vname=$_POST['vname'];
	$price=$_POST['price'];
	$contact=$_POST['contact'];

	$error=0;
	if(!is_numeric($contact))
	{
		echo "Contact should be numeric value <br>";
		$error++;
	}
	if(!is_numeric($price))
	{
		echo "Price should be numeric value <br>";
		$error++;
	}
	if(strlen($contact)==10 || strlen($contact)==7)
	{

	}
	else
	{
		echo "Contact number incorrect <br>";
		$error++;
	}

	
?>