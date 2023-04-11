<!DOCTYPE html>
<html lang="en">
<head>
    <title>Sign UP</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="stylesheet" type="text/css" href="sp_util.css">
    <link rel="stylesheet" type="text/css" href="sp_main.css">
    
</head>

<body>
   <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100 p-l-85 p-r-85 p-t-55 p-b-55">
                <form class="login100-form validate-form flex-sb flex-w" method="post">
                    <span class="login100-form-title p-b-32">
                        Account Sign Up
                    </span>

                    <span class="txt1 p-b-11">
                        Username
                    </span>
                    <div class="wrap-input100 validate-input m-b-36" data-validate = "Username is required">
                        <input class="input100" type="text" name="uname" >
                        <span class="focus-input100"></span>
                    </div>

                    <span class="txt1 p-b-11">
                        Email
                    </span>
                    <div class="wrap-input100 validate-input m-b-36" data-validate = "Username is required" required="required">
                        <input class="input100" type="text" name="email" >
                        <span class="focus-input100"></span>
                    </div>
                    <span class="txt1 p-b-11">
                        Password
                    </span>
                    <div class="wrap-input100 validate-input m-b-12" data-validate = "Password is required" required="required">
                        <span class="btn-show-pass">
                            <i class="fa fa-eye"></i>
                        </span>
                        <input class="input100" type="password" name="pword" required="required">
                        <span class="focus-input100"></span>
                    </div>
                    
                    <span class="txt1 p-b-11">
                        Confirm Password
                    </span>
                    <div class="wrap-input100 validate-input m-b-12" data-validate = "Password is required" required="required">
                        <span class="btn-show-pass">
                            <i class="fa fa-eye"></i>
                        </span>
                        <input class="input100" type="password" name="confirmpword" >
                        <span class="focus-input100"></span>
                    </div>

                    <div class="flex-sb-m w-full p-b-48">
                        <div class="contact100-form-checkbox">

                          
                        </div>

                        <div>
                            <a href="sp_login.php" class="txt3">
                                 Already have an account? Log in
                            </a>
                        </div>
                    </div>

                    <div class="container-login100-form-btn">
                        <button class="login100-form-btn">
                            Sign Up
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    

    <div id="dropDownSelect1"></div>
</body>
    
<?php
if(isset($_POST['email']))
{
    include('sp_connection.php');

    $name=$_POST['uname'];
    $email=$_POST['email'];
    $password=$_POST['pword'];
    $cpassword=$_POST['confirmpword'];
    $count=0;

    $sql="SELECT email FROM userinfo";
    $query=mysqli_query($connect,$sql);

    while ($row=mysqli_fetch_assoc($query))
    {

        if($row['email']==$email)
        {
            echo "<script>
                        alert('Already an account created using this email')
                </script>";
            $count=10;

            break;
        }
    }
    if($count!=10)
    {
           echo "<script>
                        var error='';
                </script>";        
        if(strlen($password)<3)
        {
           
            echo "<script>
                        error+='password is weak has to be atleast 3 characters';
                </script>";
            $count++;
        }
        if(strcmp($password,$cpassword)!=0)
        {
            echo "<script>
                        error+='password is not correct';
                </script>";
            $count++;
        }
        if ($count>0) 
        {
            echo "<script>
                        alert(error);
                </script>";            
        }
        else
        {
            $sql= "INSERT into userinfo values('','$name','$email','$password','no')";  
            $query= mysqli_query($connect,$sql);
            if($query)
            {
                header('location:sp_login.php');
            }
            else
            {
                echo "<script>
                        alert('TRY AGAIN')
                    </script>";
            }
        }   
    }    
}
?>


</html>