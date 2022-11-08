<!DOCTYPE html>
<html>
<head>
 <title>Register</title>
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <!--<link rel="stylesheet" href="css/bootstrap.min.css">-->
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

<style>
 .wrap {
 width: 100%;
 max-width: 400px;
 margin: 40px auto;
 }
 </style>
    
</head>
    
<body class="text-center">
  
   <div class="wrap">
      <h1 class="h3 mb-3" style="font-family: cambria; color: #008181;">Register</h1>
     
       
      <!--============= ERROR ALERT SECTION =============--->
      <?php if (isset($_GET['error'])): ?> 
        <div class="alert alert-warning">Cannot create account. Please try again.</div>
      <?php endif ?>
       <!--========= END OF ERROR ALERT SECTION =========---> 
       
      <!--============ ACCOUNT CREATION FORM ============--->
      <form action="_actions/create.php" method="post" style="font-family: cambria; color: #008181;">
         <input type="text" name="name" class="form-control mb-2" placeholder="Name" required>
         <input type="email" name="email" class="form-control mb-2" placeholder="Email" required>
         <input type="text" name="phone" class="form-control mb-2" placeholder="Phone" required>
         <textarea name="address" class="form-control mb-2" placeholder="Address" required></textarea>
         <input type="password" name="password" class="form-control mb-2" placeholder="Password" required>
         <button type="submit" class="w-100 btn btn-lg" style="background-color:#008181; color:#FFFFFF;">Register</button>
     </form>
     <!--========= END OF ACCOUNT CREATION FORM =========--->
 <br>
       
 <!--=========== LOGIN LINK =============--->
<!-- <a href="index.php">Login</a>-->
 <!--=========END OF LOGIN LINK =========--->
       
 </div>
    
</body>
</html>
