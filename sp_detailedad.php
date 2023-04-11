<!DOCTYPE html>
<html>
<?php
	session_start();
	if (isset($_SESSION['email']))
	{}
	else
	{
		header('location:sp_login.php');
	}
?>
<head>
	<title></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="sp_bootstrap4.1.3.css">
	<link rel="stylesheet" type="text/css" href="sp_home.css">
	<style type="text/css">
		

		
	
		
		
		
		
		.menuitem-wf a{
			text-decoration: none;
			text-align: center;
		}

		
	.ad
	{
		width: 1000px;
		height: auto;
		border-radius: 10px;
		border:2px solid black;
		display: flex;
		margin-left: 275px;
		justify-content: center;
		margin-top: 45px;
		margin-bottom: 50px;

		
	}
	.slider
	{
		width: 70%;
		height: 80%;
		border-radius: 10px;
		overflow: hidden;
		float: left;
		margin-top: 20px;
	}

	.slides
	{
		width: 500%;
		height: 500px;
		display: flex;
	}

	.slides input
	{
		display:none;

	}

	.slide
	{
		width:20%;
		transition:2s;
	}

	.slide img
	{
		width: 700px;
		height: 500px;
		display: flex;
		justify-content: center;

	}

	.navigation-manual
	{
		position: absolute;
		width: 800px;
		margin-top: 520px;
		display: flex;
		margin-left: 275px;
	}

	.manual-btn
	{
		border:2px solid black;
		padding:5px;
		border-radius: 10px;
		cursor:pointer;
		transition: 1s;
	}
		.menu-item
		{
			font-size:1.5vw;
		}
		.footer-item p
		{
			font-size:1vw;
		}
		.footer-item h3
		{
			font-size:3vw;
		}
	.manual-btn:hover
	{
		background:black;
	}

	.manual-btn:not(:last-child)
	{
		margin-right: 40px;

	}

	#radio1:checked ~.first
	{
		margin-left:0; 
	}

	#radio2:checked ~.first
	{
		margin-left:-20%; 
	}

	#radio3:checked ~.first
	{
		margin-left:-40%; 
	}

	#radio4:checked ~.first
	{
		margin-left:-60%; 
	}

		table{
		display: flex;
		margin-top: 600px;
		margin-left: -500px;
		font-family: Georgia, Source Sans Pro;
		font-size: 25px;
	}



		
	</style>
</head>
	<body>

<!-----------------------------------------------navbar----------------------------------------->
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
<!------------------------------------------------end of navbar---------------------------------------------->  
	<?php
	include "sp_connection.php"; 
	$id= $_GET['vehicleid'];
	$email=$_SESSION['email'];

	//getting user name of the ad poster

	$sql="SELECT username FROM userinfo where email='$email'";
	$query=mysqli_query($connect,$sql);
	$data=array();
	while ($row=mysqli_fetch_assoc($query))
	{
		array_push($data, $row);
		
	}
	foreach ($data as $key => $value)
	{
		$username=$value['username'];	
	}	

	//geting all photos and details of the ad
	$basefilepath="sp_uploadpics/";
	$sql="SELECT * FROM vehicleinfo where vehicleid='$id'";
	$query=mysqli_query($connect,$sql);
	$data=array();
	while ($row=mysqli_fetch_assoc($query))
	{
		array_push($data, $row);
		
	}
	foreach ($data as $key => $value) {
	?>

					<div class="ad">
						<div class ="slider">
							<div class="slides">
								<input type="radio" name="radio-btn" id="radio1">
								<input type="radio" name="radio-btn" id="radio2">
								<input type="radio" name="radio-btn" id="radio3">
								<input type="radio" name="radio-btn" id="radio4">

								<div class="slide first">
									<img src="<?php echo $basefilepath.$value['photo1'];?>">
								</div>

								<div class="slide">
									<img src="<?php echo $basefilepath.$value['photo2'];?>">
								</div>

								<div class="slide">
									<img src="<?php echo $basefilepath.$value['photo3'];?>">
								</div>

								<div class="slide">
									<img src="<?php echo $basefilepath.$value['photo4'];?>">
								</div>

								<div class="navigation-auto">
									<div class="btn1"></div>
									<div class="btn2"></div>
									<div class="btn3"></div>
									<div class="btn4"></div>
								</div>

								<div class="navigation-manual">
									<label for="radio1" class="manual-btn"></label>
									<label for="radio2" class="manual-btn"></label>
									<label for="radio3" class="manual-btn"></label>
									<label for="radio4" class="manual-btn"></label>
								</div>
							</div>
										
						</div>	

						<div class="info">
							<table>
								<tr><td>Vehicle name</td><td>:</td><td><?php echo $value['vehiclename'];?></td></tr>
								<tr><td>CC</td><td>:</td><td><?php echo $value['cc'];?></td></tr>
								<tr><td>Mileage</td><td>:</td><td><?php echo $value['mileage'];?></td></tr>
								<tr><td>Price</td><td>:</td><td><?php echo $value['price'];?></td></tr>
								<tr><td>Posted by</td><td>:</td><td><?php echo $username;?></td></tr>
								<tr><td>Email</td><td>:</td><td><?php echo $value['email'];?></td></tr>
								<tr><td>Contact number</td><td>:</td><td><?php echo $value['contact'];?></td></tr>
								
								<tr><td>Rented By</td><td>:</td><td><?php echo $value['renteduser'];?></td></tr>
							
							</table>

						</div>
					</div>
<?php
	}
?>	
<!---------------------footer-------------------------------->
			<footer class="footer-item">
			  <p>© 2022 Copyright:<a style="color: black;" class="footerlink" href="sp_homepage.php">www.bikebaalma.com</a></p>
			  <h3>Bike Baal Ma</h3>				
			</footer>
	</body>

</html>