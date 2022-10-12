<!DOCTYPE html>
<html>
<head>
 <title>Register</title>
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <!--<link rel="stylesheet" href="css/bootstrap.min.css">-->
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

    
</head>
    
<body class="">
  
   <div class="container">
      <h1 class="h3 mb-3 pt-3 text-center" style="font-family: cambria; color: #008181;">New Student Registration</h1>
       <br>
      <!--============= ERROR ALERT SECTION =============--->
      <?php if (isset($_GET['error'])): ?>
        <div class="alert alert-warning">Cannot create account. Please try again.</div>
      <?php endif ?>
       <!--========= END OF ERROR ALERT SECTION =========--->
       
      <!--============ ACCOUNT CREATION FORM ============--->
      <div style="display:center">
           <form action="_actions/createstudent.php" method="post" style="font-family: cambria; color: #008181;">
               <div style="flex-grow:1">
                   <input type="text" name="name" class="form-control mb-2" placeholder="ชือ/Name" required>
                   <input type="text" name="surname" class="form-control mb-2" placeholder="นามสกุล/Surname" required>
                   <input type="text" name="id" class="form-control mb-2" placeholder="ID" required>
                   <input type="date" name="dbo" class="form-control mb-2" placeholder="Date of Birth" required>
                   <input type="number" name="age" class="form-control mb-2" placeholder="อายุ/Age" min="1" required>
                   <select style="height: 50px; padding-left: 20px; padding-right: 20px; margin-bottom: 10px; float:left; font-family: cambria; color: #008181;"> 
                       <option>Gender</option>
                       <option>Male</option>  
                       <option>Female</option>  
                       <option>Others</option>  
                       <option>Prefer not to say</option>  
                   </select>
                   <select style="height: 50px; padding-left: 20px; padding-right: 20px; margin-bottom: 10px; float:left; font-family: cambria; color: #008181;"> 
                       <option>ศาสนา/Religion</option>
                       <option>Buddhist</option>  
                       <option>Christian</option>  
                       <option>Muslim</option>  
                       <option>Brahmin-Hundu</option>  
                       <option>Sikh</option>   
                   </select>
                   <select style="height: 50px; padding-left: 20px; padding-right: 20px; margin-bottom: 10px; float:left; font-family: cambria; color: #008181;"> 
                       <option>เช6อชาติ/Nationality</option>
                       <option>မြန်မာ(พม่า)</option>  
                       <option>ထိုင်း (ไทย)</option>  
                    </select>
                   <select style="height: 50px; padding-left: 20px; padding-right: 20px; margin-bottom: 10px; float:left; font-family: cambria; color: #008181;"> 
                       <option>เชื้อชาติ/Ethnicity</option>
                       <option>ကချင် (คะฉิ่น)</option>  
                       <option>ကယား (คายาห์)</option>  
                       <option>ကရင် (กะเหรี่ยง)</option>  
                       <option>ချင်း (ฉิ่น)</option>  
                       <option>မွန် (มอญ)</option> 
                       <option>ဗမာ (พม่า)</option>  
                       <option>ရခိုင် (ยะข่าย)</option>  
                       <option>ရှမ်း (ฉาน/ไทยใหญ่)</option>  
                       <option>ထားဝယ် (ทวาย/ชาวทวาย)</option>  
                       <option>ဂေါ်ရခါး (กูรข่า)</option>  
                       <option>နေပါလီ (เนปาล)</option>  
                       <option>ပအို့ဝ် (ปะโอ)</option>  
                       <option>အင်းသား (อิงตา)</option>  
                       <option>Other:</option>  
                   </select>
                   <input type="text" name="occupation" class="form-control mb-2" placeholder="อาชีพ/Occupation" required>
                  <input type="text" name="mobile" class="form-control mb-2" placeholder="เบอร์โทรศัพท์/Mobile" required>
                  <input type="email" name="date" class="form-control mb-2" placeholder="Email" required>
            
            <form action="_actions/upload.php" method="post" enctype="multipart/form-data">
           <input type="file" name="photo" class="form-control" style="length: 150px;">
                   <br>
           <button class="btn btn-secondary">Upload Profile Picture</button>
            </form>
     
               </div>
         
         <button type="submit" class="w-25btn btn-lg btn-primary" style="float:right; font-family: cambria; color: #008181;">Register</button>
       <!-- <a href="home.php" class="btn btn-outline-primary" style="height:48px; text-align:center;">GO TO MAIN PAGE</a>-->
     </form>
     <!--========= END OF ACCOUNT CREATION FORM =========--->

       
  </div>      
 </div>
    
</body>
</html>
