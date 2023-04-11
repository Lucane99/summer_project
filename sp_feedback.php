<?php
	session_start();
	$subject=$_POST['subject'];
	$message=$_POST['message'];
	$email= $_SESSION["email"];
	
	include 'sp_connection.php';

	//geting user name
	$sql="SELECT * FROM userinfo where email='$email'";
	$query=mysqli_query($connect,$sql);
	$data=array();
	while ($row=mysqli_fetch_assoc($query))
	{
		array_push($data, $row);
		
	}
	foreach ($data as $key => $value) 
	{
		$username= $value['username'];
	}

	//inserting feedback into database

	 $sql = "INSERT into feedback (SN,username,email,subject,message) 
		values('', '$username','$email','$subject','$message')";
		
		$query= mysqli_query($connect,$sql);
			if($query)
		{
			echo "sucess";
		}
		else
		{
			echo("fail  to regeister"."<br>"."<a href='sp_signup.php'>Sign up again</a>");
		}
?>