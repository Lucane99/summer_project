<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin Dashboard</title>

     

    <!-- Custom styles for this template-->
    <link href="sp_sb-admin-2.min.css" rel="stylesheet">
    <style type=text/css>
          h1{
            text-align: center;
        }
        table{
            margin-left: auto;
            margin-right: auto;
            width: 100%;
        }
        
        td{
            text-align: center;
           
        }


    </style>


</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="sp_adminindex.php">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Admin</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="sp_adminindex.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Interface
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="sp_adminviewsuser.php">
                    View Users
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="sp_adminviewsad.php">
                    View ADs
                </a>
            </li>            

       
            <li class="nav-item">
                <a class="nav-link collapsed" href="sp_adminviewsfeedback.php">
                    View Feedbacks
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="sp_homepage.php">
                    Visit website
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="sp_logout.php">
                    Logout
                </a>
            </li>   
            <!-- Divider -->
            <hr class="sidebar-divider">

  

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                   

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>


                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Shubham Rauniyar</span>
                                <img class="img-profile rounded-circle"
                                    src="sp_adminimages/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                             
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <h1>FEEDBACKS</h1>

                    <!-- Content Row -->
                    <div class="row">

                        <?php
                             include 'sp_connection.php';
                        ?>

                    <table class="info-table">
                        <tr>
                            <td>SN</td>
                            <td>Username</td>
                            <td>Email</td>
                            <td>Subject</td>
                            <td>Message</td>    
                        </tr>

                    <?php 

                        $sql="SELECT * FROM feedback";
                        $query=mysqli_query($connect,$sql);
                        $data=array();
                        while ($row=mysqli_fetch_assoc($query))
                        {
                            array_push($data, $row);
                            
                        }
                        foreach ($data as $key => $value)

                         {

                    ?>
                                    <tr>
                                        <td><?php echo $value['SN'];?></td>
                                        <td><?php echo $value['username'];?></td>
                                        <td><?php echo $value['email'];?></td>
                                        <td><?php echo $value['subject'];?></td>
                                        <td><?php echo $value['message'];?></td>
                                    </tr> 
                                    
                                
                    <?php           
                        }
                    ?>
                    </table>
                    </div>

                 

                    

                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->


        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->


</body>

</html>