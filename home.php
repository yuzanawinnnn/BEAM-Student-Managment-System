<?php
include("vendor/autoload.php");
use Helpers\Auth;
$auth = Auth::check();
include('security.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME PAGE</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css">      
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Mulish&display=swap" rel="stylesheet">
 <style>

.container-fluid{ }
html{height: 100%;}
body{height: 100%;}
     
</style>
</head>
    
<body>
    <!--  class="container-fluid"-->
    <div> <!-- Outer DIV -->
        <div class="row g-0">     <!-- Inner DIV -->
            
            <!---- nav is Nav bar with 2 cols size ---->
           <nav class="col-2 pe-3 custom_nav" style=""> 
           <span class="custom_logo_div">
                <div class="first"><img src="image/ONIELogoPNG.png" class="first_image"></div>
                <div class="second"><img src="image/BEAMLogoPNG.png" class="sec_image"></div>
            </span>
            
            <!--<h1 class="h4 py-3 text-center" style="font-family:cambria; color: #FFFFFF; font-weight: 20px;">
               
                <span class="d-none d-lg-inline">MIGRANT CHILD DATABASE</span>
                </h1>-->
                
            <!-- nav button div ---->
            <div class="list-group text-center text-lg-start rounded-0">
                
                <!---008181--->
                <!--======nav button list section =====-->
                <a href="#" class="list-group-item list-group-item-action active menu_btn" style="font-family:cambria; background-color:#008181;">
                    <i class="fas fa-home" ></i> <!--style="padding-left:50px; font-size: 25px;-->
                  
                    <span class="d-none d-lg-inline">HOME PAGE</span><!-- style="font-size: 10px;padding-left: 35px;"-->
                </a>
                <a href="students.php" class="list-group-item list-group-item-action menu_btn" style="font-family:cambria;">
                    <i class="fas fa-users"></i>
                    <span class="d-none d-lg-inline">STUDENTS</span>
                </a>
                <a href="collectors.php" class="list-group-item list-group-item-action menu_btn" style="font-family:cambria;">
                    <i class="fas fa-users"></i>
                    <span class="d-none d-lg-inline">COLLECTORS</span>
                </a>
                <a href="statistics.php" class="list-group-item list-group-item-action menu_btn" style="font-family:cambria;">
                    <i class="fas fa-chart-line"></i>
                    <span class="d-none d-lg-inline">STATISTICS</span>
                </a>
                <a href="admin.php" class="list-group-item list-group-item-action menu_btn" style="font-family:cambria;">
                    <i class="fas fa-flag"></i>
                    <span class="d-none d-lg-inline">ROLES</span>
                </a>
                <a href="settings.php" class="list-group-item list-group-item-action menu_btn" style="font-family:cambria;">
                    <i class="fas fa-flag"></i>
                    <span class="d-none d-lg-inline">SETTINGS</span>
                </a>
                
            </div>
            </nav>
            
            <!---- Main section with 10 cols size ---->
            <main class="col-10 custom_main">
            <!--==== Horizontal nav bar on top ===---->
            <nav class="navbar navbar-expand-lg navbar-light custom_top_nav">
                <!--- 1st Div To set the icons on the right -->
                <div class="flex-fill">
                 <p class="text-muted" style="font-size:30px; font-family:cambria; padding-left: 20px; ">Home</p>   
                </div>
                
                <!-- 2nd Div with icons -->
               
                <div class="navbar nav">
                    
                    <!--- li One --->
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"  style="color: #008181;">
                            <i class="fas fa-user-circle"></i>
                        </a>
                        <!---=== User and Logout Dropdown ==-->
                        <div class="dropdown-menu">
                        
                            <a href="#" class="dropdown-item">User Profile</a>
                        
                            <a href="_actions/logout.php" class="dropdown-item text-danger" style="color: #008181;">Logout</a>
                       </div>
                   </li>
                    <!--- li Two Setting Icon--->
                    <li class="nav-item">
                        <a href="_actions/logout.php" class="nav-link" style="color: #008181;">
                        <i class="fa fa-sign-out"></i>
                        </a>
                    </li>
                </div>
              
                <!-- End of 2nd Div with icons -->
            </nav>
                
            <!--=== Main Middle Section Info ===--->
            <!--=================================-->
            <div class="container-fluid mt-3 p-4">
                
                   <!-- Alert Block --->
               <!--     <div class="row mb-3">
                    <div class="col">
                       <div class="alert alert-info">
                          <i class="fas fa-download me-2"></i>
                           A new version of admin dashboard is released.
                          <a href="#">Download Now!</a>
                       </div>
                    </div>
                </div>-->
                
                <!-- Status Block --->
                <div class="row flex-column flex-lg-row">
                    <!-- header --->
                    <h2 class="h6 text-blue-50 pt-0.2" style="font-family:cambria; color:#008181; font-size: 30px;">QUICK STATS </h2>
                    
                    <!-- status cards section-->
                    <!-- 1st card -->
                    <div class="col">
                        <div class="card mb-3" style="border-color:transparent; border-left-color: #EEEF05; border-left-width:10px;">
                           <div class="card-body" style="background-color:#FFFFFF; border-radius: 3px; 
                          box-shadow: 10px 10px 5px 0px rgba(0,0,0,0.75);
-webkit-box-shadow: 10px 10px 5px 0px rgba(0,0,0,0.75);
-moz-box-shadow: 10px 10px 5px 0px rgba(0,0,0,0.75);">
                               <?php
                
                            $query = "SELECT ID FROM students ORDER BY ID";  
                            $query_run = mysqli_query($connection, $query);
                            $row = mysqli_num_rows($query_run);
                            echo '<h3 class="card-title h2" style="font-family: Mulish, sans-serif; color:#999999"; >'.$row.'</h3> ';
                            ?>
                               <span class="text-success" style="padding:10px;">
                                    <i class="fas fa-chart-line" style="color:#999999;">
                                    <a href="students.php" style="font-family: 'Mulish', sans-serif; margin-bottom: 10px; color:#999999">TOTAL STUDENTS</a></i>
                               </span>
                           </div>
                        </div>
                        
                    </div><!-- End of 1st card -->
                    
                    <!-- 2nd card -->
                    <div class="col">
                       <div class="card mb-3" style="border-color:transparent; border-left-color:#F06292; border-left-width:10px;">
                            <div class="card-body" style="background-color:white; border-radius: 3px; box-shadow: 10px 10px 5px 0px rgba(0,0,0,0.75);
-webkit-box-shadow: 10px 10px 5px 0px rgba(0,0,0,0.75);
-moz-box-shadow: 10px 10px 5px 0px rgba(0,0,0,0.75);">
                                 <?php
                
                            $query = "SELECT ID FROM students ORDER BY ID";  
                            $query_run = mysqli_query($connection, $query);
                            $row = mysqli_num_rows($query_run);
                            $mov_stu= 4-$row;
                            echo '<h3 class="card-title h2" style="font-family: Mulish, sans-serif; color:#999999"; >0</h3> ';
                            ?>
                               
                                    <i class="fas fa-chart-line" style="color:#999999;">
                                    <a href="students.php" style="font-family: 'Mulish', sans-serif; margin-bottom: 10px; color:#999999">MOVE OUT</a></i>
                               
                        </div>
                        </div>
                    </div><!-- End of 2nd card -->
                    
                    <!-- 3rd card -->
                    <div class="col">
                        <div class="card mb-3" style="border-color:transparent; border-left-color:#4DB6AC; border-left-width:10px;">
                            <div class="card-body" style="background-color:white; border-radius: 3px; box-shadow: 10px 10px 5px 0px rgba(0,0,0,0.75);
-webkit-box-shadow: 10px 10px 5px 0px rgba(0,0,0,0.75);
-moz-box-shadow: 10px 10px 5px 0px rgba(0,0,0,0.75);">
                               <?php
                
                            $query = "SELECT ID FROM students ORDER BY ID";  
                            $query_run = mysqli_query($connection, $query);
                            $row = mysqli_num_rows($query_run);
                            $new_stu= $row - 4;
                            echo '<h3 class="card-title h2" style="font-family: Mulish, sans-serif; color:#999999"; >'.$new_stu.'</h3> ';
                            ?>
                              
                               <span class="text-success">
                                    <i class="fas fa-chart-line" style="color:#999999;">
                                    <a href="students.php" style="font-family: 'Mulish', sans-serif; margin-bottom: 10px; color:#999999">NEW STUDENTS</a></i>
                               </span>
                         </div>
                        </div>
                    </div><!-- End of 3rd card -->
                    
                    <!-- 4th card -->
                    <div class="col">
                        <div class="card mb-3" style="border-color:transparent; border-left-color:#9575CD; border-left-width:10px;">
                            <div class="card-body" style="background-color:white; border-radius: 3px; box-shadow: 10px 10px 5px 0px rgba(0,0,0,0.75);
-webkit-box-shadow: 10px 10px 5px 0px rgba(0,0,0,0.75);
-moz-box-shadow: 10px 10px 5px 0px rgba(0,0,0,0.75);">
                                <?php
                            $query = "SELECT ID FROM users ORDER BY ID";  
                            $query_run = mysqli_query($connection, $query);
                            $row = mysqli_num_rows($query_run);
                            echo '<h3 class="card-title h2" style="font-family: Mulish, sans-serif; color:#999999"; >'.$row.'</h3> ';
                            ?>
                               <span class="text-success">
                                    <i class="fas fa-chart-line" style="color:#999999;">
                                    <a href="collectors.php" style="font-family: 'Mulish', sans-serif; margin-bottom: 10px; color:#999999">COLLECTORS</a></i>
                               </span>
                           </div>
                        </div>
                    </div><!-- End of 4th card -->
                    
                    
                </div><!-- End of Status Block -->
                <br><br><br>
                
                <div>
                    <p style="font-family: 'georgia'; color:grey; font-size:18px; font-align:center; "><a href="https://beamedu.org/">BEAM</a> envisions people-oriented, peaceful, and developed communities in Myanmar and Thailand, which can be sustained by empowering local communities through comprehensive and continuous access to education.</p>
                    <br>
                    <img src="image/BEAMLogoPNG.png" alt="BEAM Education Foundation Logo" style="width:300px; margin-left:300px;">
                </div>
            </div><!-- End of main Middle section -->
                
                
            </main>
            
        </div>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
 
<!--<footer class="container" style="height:20px;">
 <div class=" py-5 text-center text-muted">&copy; All rights reserved by BEAM & ONIE 2022</div>
</footer>-->
<footer class="text-center py-2 text-muted">&copy; All rights reserved by BEAM & ONIE 2022 </footer>
</body>
</html>
