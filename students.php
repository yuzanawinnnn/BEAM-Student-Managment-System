<?php
include("vendor/autoload.php");
use Libs\Database\MySQL;
use Libs\Database\UsersTable;
use Libs\Database\StudentsTable;
use Helpers\Auths;
use Helpers\Auth;

$table = new StudentsTable(new MySQL());
$all = $table->getAll();
$auth = Auth::check();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BEAM EDUCATION</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css">
     <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css">   
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">

<style>
  .export_btn{
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 8px 10px;
  text-align: center;
  border-radius: 10px;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
    } 

    .container header{
    padding-top: 5px;
    padding-bottom: 30px;
    font-family: cambria;
    text-align: center;
    font-size: 40px;
    font-weight: 600;
    color: #333;
}

/* .tb_data:hover{background-color:var(--color-2);}

    /* width */
.tab_section::-webkit-scrollbar {
  width: 10px;
}

/* Track */
.tab_section::-webkit-scrollbar-track {
  background: #f1f1f1; 
}
 
/* Handle */
.tab_section::-webkit-scrollbar-thumb {
  background: #888; 
}

/* Handle on hover */
.tab_section::-webkit-scrollbar-thumb:hover {
  background: #555; 
}
 /* width 
::-webkit-scrollbar {
  width: 20px;
}

/* Track 
::-webkit-scrollbar-track {
  box-shadow: inset 0 0 5px grey; 
  border-radius: 10px;
}
 
/* Handle 
::-webkit-scrollbar-thumb {
  background: red; 
  border-radius: 10px;
}

/* Handle on hover 
::-webkit-scrollbar-thumb:hover {
  background: #b30000; 
}
</style>
</head>
<body>
    <div class="container-fluid"> <!-- Outer DIV -->
        <div class="row g-0">     <!-- Inner DIV -->
            
            <!---- nav is Nav bar with 2 cols size ---->
           
            <nav class="col-2 pe-3 custom_nav" > 
            <span class="custom_logo_div">
                <div class="first"><img src="image/ONIELogoPNG.png" class="first_image"></div>
                <div class="second"><img src="image/BEAMLogoPNG.png" class="sec_image"></div>
            </span>
            
            <!--<h1 class="h4 py-3 text-center text-primary">
                <i class="fas fa-ghost me-2"></i>
                <span class="d-none d-lg-inline">GHOST ADMIN</span>
            </h1>-->
                
            <!-- nav button div ---->
            <div class="list-group text-center text-lg-start rounded-0">
                
                
                <!--======nav button list section =====-->
                <a href="home.php" class="list-group-item list-group-item-action menu_btn" style="font-family:cambria;">
                    <i class="fas fa-home"></i>
                    <span class="d-none d-lg-inline">HOME PAGE</span>
                </a>
                <a href="#" class="list-group-item list-group-item-action active menu_btn" style="font-family:cambria; background-color:#008181;">
                    <i class="fas fa-users"></i>
                    <span class="d-none d-lg-inline">STUDENTS</span>
                </a>
                <a href="collectors.php" class="list-group-item list-group-item-action menu_btn" style="font-family:cambria;">
                    <i class="fas fa-users"></i>
                    <span class="d-none d-lg-inline">COLLECTORS</span>
                </a>
                <a href="#" class="list-group-item list-group-item-action menu_btn" style="font-family:cambria;">
                    <i class="fas fa-chart-line"></i>
                    <span class="d-none d-lg-inline">STATISTICS</span>
                </a>
                 <a href="#" class="list-group-item list-group-item-action menu_btn" style="font-family:cambria;">
                    <i class="fas fa-flag"></i>
                    <span class="d-none d-lg-inline">REPORTS</span>
                </a>
                <a href="admin" class="list-group-item list-group-item-action menu_btn" style="font-family:cambria;">
                    <i class="fas fa-flag"></i>
                    <span class="d-none d-lg-inline">ROLES</span>
                </a>
                <a href="#" class="list-group-item list-group-item-action menu_btn" style="font-family:cambria;">
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
                   <p class="text-muted" style="font-size:30px; font-family:cambria; padding-left: 20px; ">Students Data</p>   
                        
                </div>
                <!-- 2nd Div with icons -->
                <div class="navbar nav">
                    <!--- li One --->
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" style="color: #008181;">
                            <i class="fas fa-user-circle"></i>
                        </a>
                        <!---=== User and Logout Dropdown ==-->
                        <ul class="dropdown-menu">
                        <li>
                            <a href="#" class="dropdown-item">User Profile</a>
                        </li>
                        <li>
                            <a href="_actions/logout.php" class="dropdown-item text-danger" style="color: #008181;">Logout</a>
                        </li>
                        </ul>
                    </li>
                    <!--- li Two Setting Icon--->
                    <li class="nav-item">
                        <a href="_actions/logout.php" class="nav-link" style="color: #008181;">
                        <i class="fa fa-sign-out"></i>
                        </a>
                    </li>
                
                </div>
            </nav>
            
<!--======================================== Main Middle Section Info ==============================================--->
<!--=================================================================================================================-->
    <div class="container mt-3 p-4">
                
    <div class="container">
        
    <div class="form-row">
        <div class="form-group col-md-5 search_div">
            <form>
               <div class="input-group ">
                  <input type="text" class="form-control">
                  <button class="btn btn-secondary" style="font-family:cambria; background-color:#008181;">Search</button>
               </div>
            </form>
        </div>
        <div style="float: right; display: flex; padding-bottom: 50px">
             <div class="add_btn_section">
                    <a href="form1.php" class="btn btn-outline-primary" style="float:left; margin-left:20px; margin-right:10px; font-family:cambria; ">Add New Students</a>
              </div>
              <div class="modify_btn_section"> 
                    <input type="button" id="btnExport" value="Export" class="export_btn"/>
              </div>              
               <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
               <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.22/pdfmake.min.js"></script>
               <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.min.js"></script>
               
               <script type="text/javascript">
               $("body").on("click", "#btnExport", function () {
               html2canvas($('#stable')[0], {
               onrendered: function (canvas) {
               var data = canvas.toDataURL();
               var docDefinition = {
               content: [{
               image: data,
               width: 500
                        }]
                                    };
                pdfMake.createPdf(docDefinition).download("students.pdf");
                                              }
                                              });
                                                                });
               </script>
           </div>
    </div>
    
 </div>

<div style="background: red:">
        <br>
        <br>
        <br></div>
<!-------==========================================STUDENT TABLE ===================================================---->
<!--==================================================================================================================-->
    <div class="tab_section" style="max-height:450px; width:1000px; overflow-y:auto; padding-top:20px; ">
      
    <table class="table table-striped table-bordered" style="font-family:cambria;" id="stable">
        <tr style="position:sticky; top:-30px; background:white;"><!--===== Table Header Row ====-->
           <th>ID</th>
           <th>Name</th>
           <th>Student ID</th>
           <th>Location in Thailand</th>
           <th>Ethnicity</th>
           <th>Actions</th>
        </tr><!--==== End of Table Header Row =====-->
        
        
        
        <!--====Table Data Row =====-->
        <?php foreach ($all as $students): ?>
        <tr class="tb_data">
           <td><?= $students->ID ?></td>
           <td><?= $students->Name ?></td>
           <td><?= $students->Tid ?></td>
           <td><?= $students->Loc_Thai ?></td>
           <td><?= $students->Ethnicity ?></td>
           <td>
           <!--- DELETE BUTTON  ---->
           <a href="_actions/deletestudent.php?ID=<?= $students->ID ?>" class="btn btn-sm btn-outline-danger" onClick="return confirm('Are you sure?')">Delete</a>
           <!-- END OF DELETE BUTTON -->
        
           <!----- VIEW BUTTON------->
           <a href="#" class="btn btn-info">View</a>
           <!-- END OF VIEW BUTTON--->
           </td>
        </tr> 
        
      <?php endforeach ?> 
      <!-- ===========End of Table Data Row =============-->
        
    </table>
    </div>
<!--========================================End of Student Table ======================================================--> 
<!--===================================================================================================================-->
 

                
            </div><!-- End of main Middle section -->
                
                
            </main>
            
        </div>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
     
<footer class="text-center py-4 text-muted">&copy; All rights reserved by BEAM & ONIE 2022 </footer>
</body>
</html>