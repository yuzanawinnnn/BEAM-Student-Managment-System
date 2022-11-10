<?php
include("vendor/autoload.php");
use Libs\Database\MySQL;
use Libs\Database\UsersTable;
use Helpers\Auth;

$table = new UsersTable(new MySQL());
$all = $table->getAll();
$auth = Auth::check();

/*<?php if($user->id !== $auth->id): ?>
                    <a href="_actions/profile.php?id=<?= $user->id ?>" class="btn btn-info">View</a>
                <?php endif ?>*/
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>COLLECTORS TABLE</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css">
     <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css">      
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

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
</style>
</head>
<body style="overflow: hidden;">
    <div> <!-- Outer DIV -->
        <div class="row g-0">     <!-- Inner DIV -->
            
            <!---- nav is Nav bar with 2 cols size ---->
            <nav class="col-2 pe-3 custom_nav"> 
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
                <a href="students.php" class="list-group-item list-group-item-action menu_btn" style="font-family:cambria;">
                    <i class="fas fa-users"></i>
                    <span class="d-none d-lg-inline">STUDENTS</span>
                </a>
                <a href="#" class="list-group-item list-group-item-action active menu_btn" style="font-family:cambria; background-color:#008181;">
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
                    <p class="text-muted" style="font-size:30px; font-family:cambria; padding-left: 20px; ">Collectors Data</p>            
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
                
            <!--=== Main Middle Section Info ===--->
            <!--=================================-->
            <div class="container-fluid mt-3 p-4">
                
<div class="container">
 <!--    
/*<?php if (isset($_GET['registered'])): ?>
 
 <div class="alert alert-success alert-dismissible">
     New Collectors account created.<a href="#" class="close" data-dismiss="alert" aria-label="close" style="text-decoration:none; color: black; padding-right: 3px;">&times;</a></div>
<?php endif ?>/
-->
        
    <div class="form-row">
      <div class="form-group col-md-5 search_div">
      <!--  <form>
            <div class="input-group ">
               <input type="text" class="form-control">
               <button class="btn btn-secondary" style="font-family: Cambria; background:#008181;">Search</button>
            </div>
        </form> -->
     </div>
      <div style="float: right; display: flex; padding-bottom: 50px">
                    <div class="add_btn_section">
                        <a href="register_collectors.php" class="btn btn-outline-primary" style="float:left; margin-left:20px; margin-right:10px; font-family: Cambria;">Add New Collectors</a>
                        </div>
                    <div class="modify_btn_section"> 
                        <!--<a href="register.php" class="btn btn-warning" style="float:left; font-family: Cambria;" > Export</a>-->
                        <input type="button" id="btnExport" value="Export" class="export_btn"/>
                    </div>     
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.22/pdfmake.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.min.js"></script>
    <script type="text/javascript">
        $("body").on("click", "#btnExport", function () {
            html2canvas($('#ctable')[0], {
                onrendered: function (canvas) {
                    var data = canvas.toDataURL();
                    var docDefinition = {
                        content: [{
                            image: data,
                            width: 500
                        }]
                    };
                    pdfMake.createPdf(docDefinition).download("collectors.pdf");
                }
            });
        });
    </script>
               
    </div>
    </div>
    


    
      
    <table class="table table-striped table-bordered" style="font-family: cambria;" id="ctable">
        <tr>
        <!--===== Table Header Row ====-->
           <th>ID</th>
           <th>Name</th>
           <th>Email</th>
           <th>Phone</th>
           <th>Role</th>
           <th>Actions</th>
        </tr>
        <!--==== End of Table Header Row =====-->
        
        <?php foreach ($all as $user): ?>
        
        <tr><!--====Table Data Row =====-->
           <td><?= $user->id ?></td>
           <td><?= $user->name ?></td>
           <td><?= $user->email ?></td>
           <td><?= $user->phone ?></td>
           <td><!--======= Role cell =======-->
               <?php if($user->value === '1'): ?>
                  <span class="badge bg-secondary">
                      <?= $user->role ?>
                  </span>
               <?php elseif($user->value === '2'): ?>
                  <span class="badge bg-primary">
                      <?= $user->role ?>
                  </span>
               <?php else: ?>
                  <span class="badge bg-success">
                      <?= $user->role ?>
                  </span>
               <?php endif ?>
           </td>
            
           <td><!--===== Function buttons cell =====-->
              <!--=====check if the user is admin or manager =====-->
              <?php if($auth->value > 1): ?> 
                <div class="btn-group dropdown">
                   <a href="#" class="btn btn-sm btn-outline-primary dropdown-toggle" data-bs-toggle="dropdown">Change Role</a>
                   <div class="dropdown-menu dropdown-menu-dark">
                      <a href="_actions/role.php?id=<?= $user->id ?>&role=1" class="dropdown-item">User</a>
                      <a href="_actions/role.php?id=<?= $user->id ?>&role=2" class="dropdown-item">Manager</a>
                      <a href="_actions/role.php?id=<?= $user->id ?>&role=3" class="dropdown-item">Admin</a>
                   </div>
                 
                <!-- SUSPEND AND ACTIVE BUTTON -->
                <?php if($user->suspended): ?>
                    <a href="_actions/unsuspend.php?id=<?= $user->id ?>" class="btn btn-sm btn-danger">Suspended</a>
                <?php else: ?>
                    <a href="_actions/suspend.php?id=<?= $user->id ?>" class="btn btn-sm btn-outline-success">Active</a>
                <?php endif ?>
                <!-- END OF SUSPEND AND ACTIVE BUTTON -->
                    
                <!-- DELETE BUTTON--->
                <?php if($user->id !== $auth->id): ?>
                    <a href="_actions/delete.php?id=<?= $user->id ?>" class="btn btn-sm btn-outline-danger" onClick="return confirm('Are you sure?')">Delete</a>
                <?php endif ?>
                <!-- END OF DELETE BUTTON -->
                
               
                    <a href="profile.php" class="btn btn-info">View</a>
             
                
              </div>
               <?php else: ?>
                 
               <?php endif ?>
            </td><!--===== End of Function buttons row =====-->
            
        </tr><!--==== End of Table Data Row ====-->
        
        <?php endforeach ?>
    </table>
 </div>
                
            </div><!-- End of main Middle section -->
                
                
            </main>
            
        </div>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<!--<footer class="text-center py-4 text-muted" style="height:50px;"></footer>-->
    <div class="text-center py-4 text-muted" id="footer" style=" bottom: 0;padding:10px;height:25px;">
    <p>&copy; All rights reserved by BEAM & ONIE 2022 </p>
</div>
</body>
</html>
