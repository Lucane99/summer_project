<?php
	include "sp_connection.php";

	$id=$_GET['vehicleid'];
	$sql="DELETE FROM vehicleinfo where vehicleid=$id";

	$query=mysqli_query($connect,$sql);

			if($query)
			{
				header('location:sp_adminviewsad.php');
			}
			else
			{
				echo("Failed  to Delete"."<br>"."<a href='sp_adminviewsad.php'> Try again</a>");
			}	 
?>