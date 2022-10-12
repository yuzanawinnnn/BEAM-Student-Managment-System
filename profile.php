<?php
 /*session_start();
 if(!isset($_SESSION['user'])) {
 header('location: index.php'); //redirect to index.php if user session is not found 
 exit();  // stop php's works 
 }*/

include("vendor/autoload.php");
use Helpers\Auth;
$auth = Auth::check();
?>

<!DOCTYPE html>
<html lang="en">
    
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Profile</title>
 <!--<link rel="stylesheet" href="css/bootstrap.min.css">-->
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>
    
<body>
    
   <div class="container">
     <!-- ==== HEADER NAME SECTION ====-->
     <h1 class="mt-5 mb-5">
        <?= $auth->name ?>
        <span class="fw-normal text-muted">
           (<?= $auth->role ?>)
        </span>
     </h1>
     <!-- === END OF HEADER NAME SECTION ===-->
     
       
     <!-- ==== ALERT SECTION ====-->
     <?php if(isset($_GET['error'])): ?>
        <div class="alert alert-warning">Cannot upload file</div>
     <?php endif ?>
     <!-- ==== END OF ALERT SECTION ====-->
      
       
     <!-- ==== PROFILE PHOTO SECTION ====--> 
     <?php if($auth->photo): ?>
        <img class="img-thumbnail mb-3" src="_actions/photos/<?= $auth->photo ?>" alt="Profile Photo" width="200">
     <?php endif ?>
     <!-- ==== END OF PROFILE PHOTO SECTION ====-->
       
     <!--======= PHOTO UPLOAD SECTION =======---> 
     <form action="_actions/upload.php" method="post" enctype="multipart/form-data">
        <div class="input-group mb-3">
           <input type="file" name="photo" class="form-control">
           <button class="btn btn-secondary">Upload</button>
        </div>
     </form>
     <!--======= END OF PHOTO UPLOAD SECTION =======---> 
     
     <!--============= DATA TABLE SECTION ================-->
     <ul class="list-group">
        <li class="list-group-item">
           <b>Email:</b> <?= $auth->email ?>
        </li>
        <li class="list-group-item">
           <b>Phone:</b> <?= $auth->phone ?>
        </li>
        <li class="list-group-item">
           <b>Address:</b> <?= $auth->address ?>
        </li>
     </ul>
 <br>

 <a href="_actions/logout.php" class="text-danger">Logout</a>
 </div>
</body>
</html>    
     
     


  