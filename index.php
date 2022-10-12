<!DOCTYPE html>
<html>
<head>
 <title>Home</title>
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <!--<link rel="stylesheet" href="css/bootstrap.min.css">-->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
 
<style>
 .container {
 width: 90%;
 max-width: 500px;
 margin: 100px auto;
 margin-bottom: 300px;
 padding: 80px;
 background: #FFFFFF;  
 border-radius: 10px;
 box-shadow: 16px 17px 33px 0px rgba(173,148,148,0.75);
-webkit-box-shadow: 16px 17px 33px 0px rgba(173,148,148,0.75);
-moz-box-shadow: 16px 17px 33px 0px rgba(173,148,148,0.75);
 }
 
body{
background: rgb(200,243,244);
background: linear-gradient(0deg, rgba(200,243,244,1) 25%, rgba(98,191,177,1) 100%);}

.button{box-shadow: 0 3px #999;}
.button:hover {background-color: #3e8e41;}
.button:hover span {padding-right: 25px;}
.button:active {
  background-color: #3e8e41;
  box-shadow: 0 5px #666;
  transform: translateY(4px);}
</style>
</head>
    
<body class="text-center">
   <!--================== "LOGIN FORM" ===================-->
   <!--===================================================-->
   <div class="border bg-light shadow container">
       <h1 class="h4 mb-3" style="font-family: cambria;text-shadow: 1px 0.5px grey; ">Migrant Child Database Project</h1>
      <h1 class="h5 mb-3" style="font-family: cambria;  color: #a7afaf;">Login Form</h1>
      
      <!--=========== "ALERT SECTION" ============-->
      <!--.......................................-->
      <!--if successfully registered, please login alert is displayed-->
              
      <!--if 'incorrect' URL Query is received back from login.php, show alert on top -->
      <?php if ( isset($_GET['incorrect']) ) : ?>
           <div class="alert alert-warning">Incorrect Email or Password</div>
      <?php endif ?>
       <!--.......................................-->
      <!--======== "END OF ALERT SECTION" ========-->
       
       
      <!--============"LOGIN SECTION"===============-->
      <!--- submit data will be send to _actions/login.php -->
      <!-- method='post' means data sent will be in the $_POST and $_REQUEST -->
      <form action="_actions/login.php" method="post">
          <div class="form-floating mb-1">
          <input type="email" name="email" class="form-control mb-2" placeholder="Email" id="email" required><label for="email" style="color:grey;">Email</label></div>
          <div class="form-floating mb-1">
          <input type="password" name="password" class="form-control mb-2" placeholder="Password" id="pwd" required><label for="pwd" style="color:grey;">Password</label></div>
          <button type="submit" class="w-100 btn btn-lg button" style="font-family: cambria; background-color:#008181;">Login</button>
      </form>
      <!--============"END OF LOGIN SECTION"===============-->
       
     <!-- <a href="register.php">Register</a> -->
    </div>
    <!--==========================================================-->
    <!--================== "END OF LOGIN FORM" ===================-->
    
</body>
</html>