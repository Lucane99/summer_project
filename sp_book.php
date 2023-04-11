<!DOCTYPE html>
<html>
<head>
	<title>Search AD</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="sp_bootstrap4.1.3.css">
	<link rel="stylesheet" type="text/css" href="sp_home.css">
	<style type="text/css">

		.menuitem-wf a{
			text-decoration: none;
			text-align: center;
		}
		.search-box
		{
			display: flex;
			justify-content: center;
			margin-top: 30vh;
			padding: 50px;
			position: relative;
			bottom: 125px;

		}
		fieldset
		{
			padding: 30px;
			border: 1px solid #A0A0A0;
			box-shadow: 5px 5px #707070;
		}
		h2
		{
			text-align: center;
			margin-top: 100px;
		}
		select {
		  width: 100%;
		  padding: 12px 20px;
		  margin: 8px 0;
		  display: inline-block;
		  border: 1px solid #ccc;
		  border-radius: 4px;
		  box-sizing: border-box;
		}

		button {
		  width: 100%;
		  background-color: #4CAF50;
		  color: white;
		  padding: 14px 20px;
		  margin: 8px ;
		  border: none;
		  border-radius: 4px;
		  cursor: pointer;
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

		button:hover {
		  background-color: #45a049;
		}
		h4{
			font-family: "Times New Roman", Times, serif;
		}
		input {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
  text-align: center;
	  }
	label{
		font-size: 30px;
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
  	<?php
	session_start();
	$id= $_GET['vehicleid'];
	$price=$_GET['vehicleprice'];
	?>
<!-----------------end of navbar------------------------->  


<form style="margin: auto;width: 520px; text-align: center;"action="sp_booked.php" method="post">
  <label style="font-size: '50px';" for="bookin">BookIN:</label>  <input type="date"required="required" id="bookin"  name="bookin"><br>
  <br>
  <label for="bookout">BookOut:</label><input type="date" id="bookout" required="required" name="bookout">
  <br>
    <input type="hidden" name="price" id="pph" value="<?php echo $price?>">
  <input type="button" value="Confirm Date" onclick="Tprice()"><br>

    <label for="totalprice">Totalprice in Rs.</label><input readonly type="text" id="totalprice" name="tprice">
  <!-- <script src="totalprice.js"></script> -->

  <br>

  <input type="hidden" name="VN" value="<?php echo $id?>">
  
<button>Book</button>
   
</form> 

  



<!-------------------------------------footer------------------------------------------------------------------------->

			<footer>
			  <p>© 2022 Copyright:<a style="color: black;" class="footerlink" href="sp_homepage.php">www.bikebaalma.com</a></p>
			  <h3>Bike Baal Ma</h3>				
			</footer>
	</body>	
</body>
	<script >
	function Tprice() {
 
    // JavaScript program to illustrate 
    // calculation of no. of days between two date 
    	var currentdate = new Date();
	
  
    // To set two dates to two variables
    var date1 = new Date(document.getElementById("bookin").value);
var date2 = new Date(document.getElementById("bookout").value);
if (currentdate.getTime() > date1.getTime() || currentdate.getTime()>date2.getTime()){
alert("Cannot select date less than today's date");
return
}
	if  (date1.getTime() > date2.getTime()){
		alert("Cannot select BookOut date less than BookIN date");
		return
	}
// To calculate the time difference of two dates
	else{
var Difference_In_Time = date2.getTime() - date1.getTime();
  
// To calculate the no. of days between two dates
var Difference_In_Days = Difference_In_Time / (1000 * 3600 * 24);
var pph=document.getElementById("pph").value;
  
//To display the final no. of days (result)
var totalprice=pph*Difference_In_Days *24;
 document.getElementById("totalprice").value = totalprice;
}
} 



</script>

</html>
 