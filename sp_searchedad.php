<?php
	session_start();
	include 'sp_connection.php';

?>

<html>
<head>

	<title>My AD</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="sp_bootstrap4.1.3.css">
	<link rel="stylesheet" type="text/css" href="sp_home.css">
	<style type="text/css">
		.menu-item
		{
			font-size:1.5vw;
		}
		.menuitem-wf a{
			text-decoration: none;
			text-align: center;
		}
		.footer-item p
		{
			font-size:1vw;
		}
		.footer-item h3
		{
			font-size:3vw;
		}
		h1{
			text-align: center;
		}
		.info-table{
			position: relative;
			left: 100px;
		}
	</style>
</head>
<body>
<!-----------------navbar------------------------->
	<div class="menubar">
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<div class="col col-lg-3 col-lg-3 col-md-3 col-sm-3 col-3 box menuitem-wf">
				<a href="sp_homepage.php"><h5 class="menu-item">HOME</h5></a>
			</div>
			<div class="col col-lg-3 col-lg-3 col-lg-3 col-md-3 col-sm-3 col-3 box menuitem-wf">
				<a href="sp_aboutus.php"><h5 class="menu-item">ABOUT US</h5></button></a>
			</div>
			<div class="col col-lg-3 col-lg-3 col-lg-3 col-md-3 col-sm-3 col-3 box menuitem-wf">
				<a href="sp_contactus.php"><h5 class="menu-item">CONTACT US</h5></a>
			</div>
			<div class="col col-lg-3 col-lg-3 col-md-3 col-sm-3 col-3 box menuitem-wf">
				<a href="sp_logout.php"><h5 class="menu-item">LOGOUT</h5></a>
			</div>
		</nav>
  	</div>
<!-----------------end of navbar------------------------->  
<h1 style="margin-top: 30px;">Available Two Wheelers</h1>

<table  style="text-align: center";class="info-table">
	<tr>
		<th>Vehicle Name</th>
		<th>CC</th>
		<th>Mileage</th>
		<th>Price per Hour</th>
		<th>Contact</th>
		<th>Availability</th>
		<th>From</th>
		<th>Till</th>
		<th>Images</th>		
	</tr>

<?php 
	$vehicletype=$_POST['vehicletype'];
	$basefilepath="sp_uploadpics/";
	$sql="SELECT * FROM vehicleinfo";
	$query=mysqli_query($connect,$sql);
	$data=array();
	while ($row=mysqli_fetch_assoc($query))
	{
		array_push($data, $row);
		
	}
	
	foreach ($data as $key => $value)

	 {
	 	if( $value['vehicletype']==$vehicletype)
	 	{

?>
				<tr>
					<td><?php echo $value['vehiclename'];?></td>
					<td><?php echo $value['cc'];?></td>
					<td><?php echo $value['mileage'];?></td>
					<td><?php echo $value['price'];?></td>
					<td><?php echo $value['contact'];?></td>
					<td><?php echo $value['availability'];?></td>
					<td><?php echo $value['datein'];?></td>
					<td><?php echo $value['dateout'];?></td>

					
						
					<td>
					<div id ="slider">
					<figure>	
							<image src="<?php echo $basefilepath.$value['photo1'];?>" height="100" width="100"><br>
							 <a href="sp_slider.php?vehicleid=<?php echo $value['vehicleid']?>&vehicleprice=<?php echo $value['price']?>"> View more</a>
					</figure>
					</td>	
				</tr> 
				
			
<?php			
		}
	}
?>
</table>


<!---------------------------------footer-------------------------------------------------->

	</div>
			<footer class="footer-item">
			  <p>© 2022 Copyright:<a style="color: black;" class="footerlink" href="sp_homepage.php">www.bikebaalma.com</a></p>
			  <h3>Bike Baal Ma</h3>				
			</footer>
	</body>

</body>
</html>