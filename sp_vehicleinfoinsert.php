<?php
	session_start();
	
	include ('sp_adverify.php');

	$vtype=$_POST['vtype'];
	$vname=$_POST['vname'];
	$cc=$_POST['cc'];
	$milage=$_POST['milage'];
	$price=$_POST['price'];
	$contact=$_POST['contact'];
	$email=$_SESSION['email'];
	$availability=$_POST['availability'];
	$basefilepath="./sp_uploadpics/";
	if($error==0)
	{
		$filename1 = $_FILES['photo1']['name'];
		$tempname = $_FILES['photo1']['tmp_name'];     
        $folder = $basefilepath.$filename1;
        move_uploaded_file($tempname, $folder); 

        $filename2 = $_FILES['photo2']['name'];
		$tempname = $_FILES['photo2']['tmp_name'];     
        $folder2 = $basefilepath.$filename2;
        move_uploaded_file($tempname, $folder2); 

        $filename3 = $_FILES['photo3']['name'];
		$tempname = $_FILES['photo3']['tmp_name'];     
        $folder3 = $basefilepath.$filename3;
        move_uploaded_file($tempname, $folder3);

        $filename4 = $_FILES['photo4']['name'];
		$tempname = $_FILES['photo4']['tmp_name'];     
        $folder4 = $basefilepath.$filename4;
        move_uploaded_file($tempname, $folder4); 


   

          
        $sql = "INSERT into vehicleinfo (vehicleid,vehiclename,cc,mileage,price,contact,photo1,photo2,photo3,photo4,vehicletype,email,availability) 
		values('', '$vname', '$cc','$milage', '$price', '$contact', '$filename1','$filename2','$filename3','$filename4','$vtype','$email','$availability')";
		
		$query= mysqli_query($connect,$sql);
			if($query)
		{
			header('location:sp_viewmyad.php');
		}
		else
		{
			echo("Fail  to regeister"."<br>"."<a href='sp_uploadad.php'>Try again</a>");
		}
	}
	else
	{
	echo "<a href='sp_uploadad.php'>Enter again, Error occured</a>";
	
	}



?>