<html>

<head>
	<title>Upload ad</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" type="text/css" href="sp_bootstrap4.1.3.css">
		<link rel="stylesheet" type="text/css" href="sp_home.css">
			<style type="text/css">
			.wf
			{
				outline: none;
			}
			html
			{
				height: 100%
			}

			
			body
			{
				min-height: 100%;
				display: flex;
				flex-direction: column;

			}

			.area
			{
				padding: 15px;

			}
			.form-container
			{
				position: absolute;
				background: white;
				padding:30px;
				border-radius:10px;
				box-shadow: 0px 0px 10px 0px #000;
				margin-top: 10px;

			}
			
				
			h1
				{
					font-size: 60px;
					font-weight: 60px;
					text-align: center;
					margin-bottom:10px;
				}
			 	footer
			 	{
				   margin-top: auto;
				   background-color: #DCDCDC;
				   color: black;
				   text-align: center;
				   

				}
				input[type=text]{
					 width: 100%;
					  padding: 12px 20px;
					  margin: 8px 0;
					  display: inline-block;
					  border: 1px solid #ccc;
					  border-radius: 4px;
					  box-sizing: border-box;

				}
				select{
					 width: 100%;
					 padding: 12px 20px;
					  margin: 8px 0;
					  display: inline-block;
					  border: 1px solid #ccc;
					  border-radius: 4px;
					  box-sizing: border-box;
				}
				input[type=file]{
					 width: 80%;
					  padding: 12px 20px;
					  margin: 8px 0;
					  display: inline-block;
					  border: 1px solid #ccc;
					  border-radius: 4px;
					  box-sizing: border-box;

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
				.menuitem-wf a{
					text-decoration: none;
					text-align: center;
				}
				
				
		</style>
	</head>


	<body>
<!-------------------------------------------------------------------navbar------------------------------------------------------------>
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
<!------------------------------------------------------------------end of navbar------------------------------------------------------------->  
	<div class="body">				
				<div class="container-fluid bg" style="padding: 20px;">
					<section class="row justify-content-center">
							<form class="form-container" method="post" enctype="multipart/form-data" action="sp_vehicleinfoinsert.php">
							  <div class="form-group">
							  	
							  		<h1>POST AD</h1>
							  		<table>
							  			<tr>
							  				<td class="area">
							  					<table>
											  		<tr><td><b>Vehicle type</b></td></tr>
											  		<tr><td><select name="vtype" >
															  
															  <option value="Moterbike">Moterbike</option>
															  <option value="Scooter">Scooter</option>
															</select>
											  		</td></tr>
												  	<tr><td><label><b>Vehicle Name</b></label></td></tr>
												  	<tr><td><input class="form-control" type="text" name="vname"  required="required"></td></tr>
												   		
												   	<tr><td><label><b>CC</b></label></td></tr>
												   	<tr><td><input class="form-control" type="Number" name="cc" required="required"></td></tr>

													<tr><td><label><b>Mileage</b></label></td></tr>
											   		<tr><td><input class="form-control" type="Number" name="milage" required="required"></td></tr>
												
												    <tr><td><label><b>Price per hour</b></label></td></tr>
												  	<tr><td><input class="form-control" type="Number" name="price" required="required"></td></tr>

												    <tr> <td><label ><b>Contact no</b></label></td></tr>
												    <tr><td> <input class="form-control" type="text" name="contact" required="required"></td></tr>				  						
							  					</table>
							  					
							  				</td>

							  				<td class="area">
							  					<table>
													<tr><td> <label><b>Upload photo</b></label></td></tr>

												    <tr><td> <label><b>Front Side</b></label></td></tr>
												  	<tr> <td><input type="file" name="photo1" accept="image/*" required="required"></td></tr>

													<tr><td> <label><b>Back Side</b></label></td></tr>
													<tr> <td><input type="file" name="photo2" accept="image/*" required="required"></td></tr>

													<tr><td> <label><b>Left Side</b></label></td></tr>
													<tr> <td><input type="file" name="photo3" accept="image/*" required="required"></td></tr>

													<tr><td> <label><b>Right Side</b></label></td></tr>
													<tr> <td><input type="file" name="photo4" accept="image/*" required="required"></td></tr>

													<input type="hidden" name="availability" value="yes">			  						
							  					</table>
							  				</td>
							  			</tr>				
								</table><br>
								  <button type="submit" name="submit" class="btn btn-primary btn-block">Post AD</button>
								</div>
							</form>	
					</section>
		</div>
	</div>
			
	</body>
</body>
</html>
