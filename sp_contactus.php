<!DOCTYPE html>
<html>
<head>
	<title>Contact</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="sp_bootstrap4.1.3.css">
	<link rel="stylesheet" type="text/css" href="sp_home.css">
	<style type="text/css">
			.heading
	{
		text-align: center;
		margin-top:5%;	
		margin-bottom: 5%;: 	
	}
		.menuitem-wf a{
			text-decoration: none;
			text-align: center;
		}	

		.menu-item
		{
			font-size:1.5vw;
		}
		.contactheading
		{
			text-align: center;
			margin-top:20px;		
		}
		.wf
		{
			outline: none;
				}
		.menuitem-wf a{
			text-decoration: none;
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
		.sendbtn{
			position: relative;
			left: 470px;
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
		<div class="body">				
			<div class="row">
				<div class="col col-1 col-lg-1 col-md-1 col-sm-1 wf">
				</div>
				<div class="col col-lg-10 col-md-10 col-sm-10 col-10 wf">
					<h1 class="heading"><b>CONTACT US</b></h1>
					  <form  action="sp_feedback.php" method="post" >
					    
					    <div>
					      <h5 class="contactheading">Subject</h5><br>
					      <input class="form-control" name="subject" placeholder="Enter subject" required>
					    </div>

					    <div>
					     <h5 class="contactheading">Message</h5><br>
					      <textarea name="message" class="form-control" id="exampleFormControlTextarea1" rows="8" placeholder="Write your message" required=""></textarea>
					    </div>
					    <div class="btncenter">
					    	<button type="submit" class="sendbtn" >Send</button>   	
					    </div>
					  </form>				  
				</div>
				<div class="col col-1 col-lg-1 col-md-1 col-sm-1 wf">
				</div>	
			</div>
		</div>
<!------------------------------------------------------------------------------footer start------------------------------------------------------------------------------->
			<footer class="footer-item">
			  <p>© 2022 Copyright:<a style="color: black;" class="footerlink" href="sp_homepage.php">www.bikebaalma.com</a></p>
			  <h3>Bike Baal Ma</h3>
				
			</footer>
<!------------------------------------------------------------------------------footer ends------------------------------------------------------------------------------->
	</body>
	
	
</html>