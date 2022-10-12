<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!----======== CSS ======== -->
    <link rel="stylesheet" href="style1.css">
     
    <!----===== Iconscout CSS ===== -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

    
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600&display=swap');
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Cambria', sans-serif;
}
body{
    min-height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
    background: rgb(200,243,244);
background: linear-gradient(0deg, rgba(200,243,244,1) 25%, rgba(98,191,177,1) 100%);}


.container{
   
  
    position: relative;
    max-width: 900px;
    width: 100%;
    border-radius: 6px;
    padding: 30px;
    margin: 20px;
    background-color: #fff;
    box-shadow: 0 5px 10px rgba(0,0,0,0.1);
}
.container header{
    text-align: center;
    font-size: 30px;
    font-weight: 600;
    color: #333;
}
.container header::before{
    content: "";
   
    left: 0;
    bottom: -2px;
    height: 3px;
    width: 27px;
    border-radius: 8px;
    background-color: #4070f4;
}
.container form{
    position: relative;
    margin-top: 16px;
    min-height: 490px;
    background-color: #fff;
    overflow: hidden;
}
.container form .form{
    position: absolute;
    background-color: #fff;
    transition: 0.3s ease;
}
.container form .form.second{
    opacity: 0;
    pointer-events: none;
    transform: translateX(100%);
}
form.secActive .form.second{
    opacity: 1;
    pointer-events: auto;
    transform: translateX(0);
}
form.secActive .form.first{
    opacity: 0;
    pointer-events: none;
    transform: translateX(-100%);
}
.container form .title{
    display: block;
    margin-bottom: 8px;
    font-size: 16px;
    font-weight: 500;
    margin: 6px 0;
    color: #333;
}
.container form .fields{
    display: flex;
    align-items: center;
    justify-content: space-between;
    flex-wrap: wrap;
}
form .fields .input-field{
    display: flex;
    width: calc(100% / 3 - 15px);
    flex-direction: column;
    margin: 4px 0;
}
.input-field label{
    font-size: 12px;
    font-weight: 500;
    color: #2e2e2e;
}
.input-field input, select{
    outline: none;
    font-size: 14px;
    font-weight: 400;
    color: #333;
    border-radius: 5px;
    border: 1px solid #aaa;
    padding: 0 15px;
    height: 42px;
    margin: 8px 0;
}
.input-field input :focus,
.input-field select:focus{
    box-shadow: 0 3px 6px rgba(0,0,0,0.13);
}
.input-field select,
.input-field input[type="date"]{
    color: #707070;
}
.input-field input[type="date"]:valid{
    color: #333;
}
.container form button, .backBtn{
    display: flex;
    align-items: center;
    justify-content: center;
    height: 45px;
    max-width: 200px;
    width: 100%;
    border: none;
    outline: none;
    color: #fff;
    border-radius: 5px;
    margin: 25px 0;
    background-color: #008181;
    transition: all 0.3s linear;
    cursor: pointer;
}
.container form .btnText{
    font-size: 14px;
    font-weight: 400;
}
form button:hover{
    background-color: #265df2;
}
form button i,
form .backBtn i{
    margin: 0 6px;
}
form .backBtn i{
    transform: rotate(180deg);
}
form .buttons{
    display: flex;
    align-items: center;
}
form .buttons button , .backBtn{
    margin-right: 14px;
}

@media (max-width: 750px) {
    .container form{
        overflow-y: scroll;
    }
    .container form::-webkit-scrollbar{
       display: none;
    }
    form .fields .input-field{
        width: calc(100% / 2 - 15px);
    }
}

@media (max-width: 550px) {
    form .fields .input-field{
        width: 100%;
    }
}

        body{ background: rgb(200,243,244);
background: linear-gradient(0deg, rgba(200,243,244,1) 25%, rgba(98,191,177,1) 100%);}
    </style>
</head>
<body>
    <div class="container">
        <header>Student Biography</header>
        

        <form action="_actions/createstudent.php" method="post">
            <div class="form.first">
                
                <!---------------     Personal Information -------------------->
                <!--========================================================-->
                <div class="details personal">  
                    <h3 style="font-size:20px; color:grey;">Personal Information</h3>
                       <div class="fields">
                         <div class="input-field">
                            <label>ชือ/Name</label>
                            <input type="text" placeholder="Enter your name" class="form__1name" name="Name" required>
                         </div>
                
                        <div class="input-field">
                            <label>ID</label>
                            <input type="text" placeholder="Student ID" class="form__3ID"  name="Tid" required>
                        </div>

                        <div class="input-field">
                            <label>วนัเกิด/Date of Birth</label>
                            <input type="date" placeholder="Enter birth date" class="form__4dob" name="DOB" required>
                        </div>        

                        <div class="input-field">
                            <label>อายุ/Age</label>
                            <input type="number" placeholder="Enter your age" min="1" max="100" name="Age" class="form__5age" required>
                        </div>

                        <div class="input-field">
                            <label>Gender</label>
                            <select class="form__6gender" name="Gender" required>
                                <option disabled selected>Select gender</option>
                                <option>Male</option>
                                <option>Female</option>
                                <option>Others</option>
                                <option>Prefers not to say</option>
                            </select>
                        </div>
                           
                       <div class="input-field">
                            <label>ศาสนา/Religion</label>
                            <select class="form__6religion" name="Religion" required>
                                <option disabled selected>Select Religion</option>               <option>Buddhist</option> 
                                <option>Christian</option>  
                                <option>Muslim</option>  
                                <option>Brahmin-Hundu</option>  
                                <option>Sikh</option>
                            </select>
                        </div>
                   
                        <div class="input-field">
                            <label>สัญชาติ/Nationality</label>
                            <select class="form__7nationality" name="Nationality" required>
                                <option disabled selected>Select Nationality</option>
                                <option>မြန်မာ(พม่า)</option>  
                                <option>ထိုင်း(ไทย)</option>    
                            </select>
                        </div>
                        
                        <div class="input-field">
                            <label>เช6อชาติ/Ethnicity</label>
                            <select class="form__8ethnicity" name="Ethnicity" required>
                                <option disabled selected>Select Ethnicity</option>
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
                        </div>
                           
                        <div class="input-field">
                            <label>อาชีพ/Occupation</label>
                            <input type="text" placeholder="Enter Occupation" class="form__9occupation" name="Occupation" required>
                        </div>

                       

                       
                           <div class="input-field">
                            <label>ทอยปู่ ัจจุบนั/Current address</label>
                            <input type="text" placeholder="Current address" class="form__9occupation"name="Loc_Thai" required>
                          </div>
                           
                         
                    </div>
                  </div> 
                <!-- ========================================= -->
                <!---------- End of Personal Information -------->
                <br>
                <br>
             
                
                        
               </div> 
                    
                
                    <!----------- Submit Button ---------->
                    <button type="submit" class="nextBtn">
                        <span class="btnText">Submit</span>
                    </button>
                    <!------------------------------------->
                <div>    
                
            </div>

            
        </form>
    </div>

    <!--<script src="script.js"></script>-->
</body>
</html>
