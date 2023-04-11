<?php
	include "sp_connection.php";

	$id=$_GET['vehicleid'];
	$sql="DELETE FROM vehicleinfo where vehicleid=$id";

	$query=mysqli_query($connect,$sql);

			if($query)
			{
				header('location:sp_viewmyad.php');
			}
			else
			{
				echo("Fail  to delete"."<br>"."<a href='sp_viewmyad.php'> Try Again</a>");
			}	 
?>