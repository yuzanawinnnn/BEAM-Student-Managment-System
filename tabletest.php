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
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
   
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

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
    


.controls-item {
    display: inline-block;
}

.btn {
    margin: 1px;
}
</style>
</head>
<body style="overflow: hidden;">
    <div class="container-fluid" > <!-- Outer DIV -->
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
                <a href="#" class="list-group-item list-group-item-action menu_btn" style="font-family:cambria;">
                    <i class="fas fa-chart-line"></i>
                    <span class="d-none d-lg-inline">STATISTICS</span>
                </a>
                
                <a href="#" class="list-group-item list-group-item-action menu_btn" style="font-family:cambria;">
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
                        <a href="register.php" class="btn btn-outline-primary" style="float:left; margin-left:20px; margin-right:10px; font-family: Cambria;">Add New Collectors</a>
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
    
 <table class="table table-bordered table-hover" id="our-table">
        <thead class=" table-success">
            <tr>
           <th>ID</th>
           <th>Name</th>
           <th>Student ID</th>
           <th>Location in Thailand</th>
           <th>Ethnicity</th>
           <th>Actions</th>
            </tr>
        </thead>
        <tbody id="table-body">

        </tbody>
    </table>
</div>
            <div class="container ">
    <div id="pagination-wrapper"></div>
<script>
    
<?php foreach ($all as $students): ?>
$array=[$Name = $students->Name;
$Loc_Thai =$students->Loc_Thai;  
$ID= $students->ID;]
<?php endforeach ?> 
var tableData = [{
        'first_name': "<?php echo"$Name"?>",
        'last_name': "<?php echo"$Loc_Thai"?>",
        'rank': "<?php echo"$ID"?>",
    },
]



/*
	1 - Loop Through Array & Access each value
  2 - Create Table Rows & append to table
*/


var state = {
    'querySet': tableData,
    'page': 1,
    'rows': 8,
    'window': 5,
}

buildTable()

function pagination(querySet, page, rows) {

    var trimStart = (page - 1) * rows
    var trimEnd = trimStart + rows

    var trimmedData = querySet.slice(trimStart, trimEnd)

    var pages = Math.round(querySet.length / rows);

    return {
        'querySet': trimmedData,
        'pages': pages,
    }
}

function pageButtons(pages) {
    var wrapper = document.getElementById('pagination-wrapper')

    wrapper.innerHTML = ``
	console.log('Pages:', pages)

    var maxLeft = (state.page - Math.floor(state.window / 2))
    var maxRight = (state.page + Math.floor(state.window / 2))

    if (maxLeft < 1) {
        maxLeft = 1
        maxRight = state.window
    }

    if (maxRight > pages) {
        maxLeft = pages - (state.window - 1)
        
        if (maxLeft < 1){
        	maxLeft = 1
        }
        maxRight = pages
    }
    
    

    for (var page = maxLeft; page <= maxRight; page++) {
    	wrapper.innerHTML += `<button value=${page} class="page btn btn-sm btn-info">${page}</button>`
    }

    if (state.page != 1) {
        wrapper.innerHTML = `<button value=${1} class="page btn btn-sm btn-info">&#171; First</button>` + wrapper.innerHTML
    }

    if (state.page != pages) {
        wrapper.innerHTML += `<button value=${pages} class="page btn btn-sm btn-info">Last &#187;</button>`
    }

    $('.page').on('click', function() {
        $('#table-body').empty()

        state.page = Number($(this).val())

        buildTable()
    })

}


function buildTable() {
    var table = $('#table-body')

    var data = pagination(state.querySet, state.page, state.rows)
    var myList = data.querySet

    for (var i = 1 in myList) {
        //Keep in mind we are using "Template Litterals to create rows"
        var row = `<tr>
                  <td>${myList[i].rank}</td>
                  <td>${myList[i].first_name}</td>
                  <td>${myList[i].last_name}</td>
                  `
        table.append(row)
    }

    pageButtons(data.pages)
}


</script>
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