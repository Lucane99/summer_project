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
	<title>home page</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="sp_bootstrap4.1.3.css">
	<link rel="stylesheet" type="text/css" href="sp_home.css">
	<style type="text/css">
		.wf
		{
			outline: none;
			text-decoration: none;
		}

		
			.heading
		{
			text-align: center;
			margin-top:5%;	
			margin-bottom: 5%;
			font-size:2vw;	
		}

		.image
		{
			padding: 10px;
			width: 50%;
			height: 90%;
			float: left;
		}
		.description
		{
			width: 50%;
			height: 90%;
			float: left;
		}
		
		.menuitem-wf a{
			text-decoration: none;
			text-align: center;
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
		.box:hover
		{
			background-color: #A9A9A9;
		}
		.sendbtn
		{
			font-size:1vw;
			position: relative;
			left: 230px;
		}
		.aboutus
		{
			font-size:1vw;
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
				<a href="sp_aboutus.php"><h5 class="menu-item">ABOUT US</h5></a>
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
	<div class="body">	
		
		<div class="row">
			<div class="col col-lg-1 col-md-1 col-sm-1 col-1 wf">
			</div>
			<div class="col col-lg-10 col-md-10 col-sm-10 col-10 wf">
					<div class="description wf box">
						<h3 class="heading"><b>WANT TO RENT A BIKE?</b></h3>
						<p class="aboutus">You can choose any bike you want to rent</p>
						<p class="aboutus">Get Started..</p>
						<form action="sp_searchad.php">
							<div class="btncenter">
						    	<button type="submit" class="sendbtn">Search</button>   	
						    </div>
						</form>
					</div>
					<div class="image wf">
						<img src="sp_homepageimages/vr150.jpg" width=100% height=100%>
					</div>	
			</div>
			<div class="col col-lg-1 col-md-1 col-sm-1 col-1 wf">
			</div>
		</div>

		<div class="row">
			<div class="col col-lg-1 col-md-1 col-sm-1 col-1 wf">
			</div>
			<div class="col col col-lg-10 col-md-10 col-sm-10 col-10 wf">
					<div class="image wf">
						<img src="sp_homepageimages/crossx.jpg" width=100% height=100%>
					</div>
					<div class="description box wf">
						<h3 class="heading"><b>POST AN AD</b></h3>
						<p class="aboutus">Upload an AD for your bike so that others can rent it</p>
						<p class="aboutus">Upload Your AD..</p>
						<form action="sp_uploadad.php">
							<div class="btncenter">
						    	<button type="submit" class="sendbtn" >POST AD</button>   	
						    </div>
						</form>
					</div>	
			</div>
			<div class="col col-lg-1 col-md-1 col-sm-1 col-1 wf">
			</div>
		</div>

		<div class="row">
			<div class="col col-lg-1 col-md-1 col-sm-1 col-1 wf">
			</div>
			<div class="col col col-lg-10 col-md-10 col-sm-10 col-10 wf">
					<div class="box description wf">

						<h3 class="heading"><b>VIEW MY AD</b></h3>
						<p class="aboutus">Update your bikes info</p>
						<p class="aboutus">Update it..</p>
						<form action="sp_viewmyad.php">
							<div class="btncenter">
						    	<button type="submit" class="sendbtn" >VIEW MY AD</button>   	
						    </div>
						</form>
					</div>
					<div class="image wf">
						<img src="sp_homepageimages/crossfire.jpg" width=100% height=100%>
					</div>	
			</div>
			<div class="col col-lg-1 col-md-1 col-sm-1 col-1 wf">
			</div>
		</div>
</div>
<!-----------------------------------------------------footer------------------------------------------------>
	
			<footer class="footer-item" >
			  <p>© 2022 Copyright:<a style="color: black;" class="footerlink" href="sp_homepage.php">www.bikebaalma.com</a></p>
			  <h3>BikeBaalMa</h3>				
			</footer>
	</body>
	

</html>