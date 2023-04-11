<?php
	session_start();

	include ('sp_connection.php');

	$id= $_POST['VN'];
	$datein=$_POST['bookin'];
	$dateout=$_POST['bookout'];
	$rentedemail=$_SESSION['email'];
	$totalprice=$_POST['tprice'];
	$sql="SELECT email,username FROM userinfo";
    $query=mysqli_query($connect,$sql);
    

    while ($row=mysqli_fetch_assoc($query))
    {
    	if($row['email']==$rentedemail)
    	{
    		$rentedusername=$row['username'];
    		break;
    	}
	}

	
	 $sql = "UPDATE vehicleinfo
SET availability = 'Booked',datein='$datein',dateout='$dateout',renteduser='$rentedusername',totalprice='$totalprice'
WHERE vehicleid = $id";

	$query= mysqli_query($connect,$sql);
			if($query)
		{
			header('location:sp_searchad.php');
		}
		else
		{
			echo("Fail  to book"."<br>");
		}
	




?>