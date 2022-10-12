<?php
include("vendor/autoload.php");
use Libs\Database\MySQL;
use Libs\Database\UsersTable;
use Helpers\Auth;

$table = new UsersTable(new MySQL());
$all = $table->getAll();
$auth = Auth::check();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Manage Users</title>
  <!--<link rel="stylesheet" href="css/bootstrap.min.css">-->

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>
    
<body>
  <div class="container">
    <div style="float: right">
      <a href="profile.php">Profile</a> |
      <a href="_actions/logout.php" class="text-danger">Logout</a>
    </div>
    <h1 class="mt-5 mb-5">
        Manage Users
        <span class="badge bg-danger text-white"><?= count($all) ?></span>
    </h1>
      
    <table class="table table-striped table-bordered">
        <tr><!--===== Table Header Row ====-->
           <th>ID</th>
           <th>Name</th>
           <th>Email</th>
           <th>Phone</th>
           <th>Role</th>
           <th>Actions</th>
        </tr><!--==== End of Table Header Row =====-->
        
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
            
           <td><!--=================== Function buttons cell =======================-->
               
              <?php if($auth->value > 1): ?> <!--==check if the user is admin or manager==-->
                <div class="btn-group dropdown">
                   <a href="#" class="btn btn-sm btn-outline-primary dropdown-toggle" data-bs-toggle="dropdown">Change Role</a>
                   <!-- CHANGE ROLE DROPDOWN -->
                   <div class="dropdown-menu dropdown-menu-dark">
                      <a href="_actions/role.php?id=<?= $user->id ?>&role=1" class="dropdown-item">User</a>
                      <a href="_actions/role.php?id=<?= $user->id ?>&role=2" class="dropdown-item">Manager</a>
                      <a href="_actions/role.php?id=<?= $user->id ?>&role=3" class="dropdown-item">Admin</a>
                   </div>
               <!-- SUSPENDED OR ACTIVE BUTTON -->  
               <?php if($user->suspended): ?>
                    <a href="_actions/unsuspend.php?id=<?= $user->id ?>" class="btn btn-sm btn-danger">Suspended</a>
               <?php else: ?>
                    <a href="_actions/suspend.php?id=<?= $user->id ?>" class="btn btn-sm btn-outline-success">Active</a>
               <?php endif ?>
                  
                <?php if($user->id !== $auth->id): ?>
                    <a href="_actions/delete.php?id=<?= $user->id ?>" class="btn btn-sm btn-outline-danger" onClick="return confirm('Are you sure?')">Delete</a>
                <?php endif ?>
                
               </div>
            <?php else: ?>
                   
            <?php endif ?>
            </td><!--===== End of Function buttons row =====-->
            
        </tr><!--==== End of Table Data Row ====-->
        
        <?php endforeach ?>
    </table>
 </div>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
