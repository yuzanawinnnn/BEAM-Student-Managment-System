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
.input-field1 label{
    font-size: 12px;
    font-weight: 50;
    color: #2e2e2e;
    padding: 0 6px;
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


table {
 table-layout: fixed;
}


table, td, th, tr {
  border: 1px solid grey;
}
        table input{
            border:none;
        }
    </style>
</head>
<body>
    <div class="container">
        <header>Student Biography</header>
        
        <form action="_actions/createstudent.php" method="post">
            <div class="form.first">
                
                <!----------------------------------------Personal Information -------------------------------->
                <!--=========================================================================================-->
                <div class="details personal">  
                    <h3 style="font-size:20px; color:grey;">Personal Information</h3>
                       <div class="fields">
                         <div class="input-field">
                            <label>ชือ/Name</label>
                            <input type="text" placeholder="Enter your name" class="form__1name" name="Name" required>
                         </div>
                           
                         <div class="input-field">
                            <label>Surname</label>
                            <input type="text" placeholder="Enter your surname" class="form__2surname" name="Surame" required>
                         </div>
                           
                        <div class="input-field">
                            <label>Blood Group</label>
                            <select class="form__3blgp" name="BloodGp" required>
                                <option disabled selected>Select Blood Group</option>
                                <option>A</option>
                                <option>B</option>
                                <option>O</option>
                                <option>AB</option>
                            </select>
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
                                <option disabled selected>Select Religion</option>               
                                <option>Buddhist</option> 
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
                            <label>Status</label>
                            <input type="text" placeholder="Status" class="form__9status" name="Status" required>
                        </div>
                           
                        <div class="input-field">
                            <label>อาชีพ/Occupation</label>
                            <input type="text" placeholder="Occupation" class="form__10occupation" name="Occupation" required>
                        </div>
                        
                        <div class="input-field">
                            <label>Contact</label>
                            <input type="text" placeholder="Contact" class="form__11contact" name="Contact" required>
                        </div>
                        
                         <div class="input-field">
                            <label>Phone Number</label>
                            <input type="tel" class="form__12phone" name="phone" placeholder="123-45-678" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}" required>
                          </div>
                        
                           <div class="input-field">
                            <label>Email</label>
                            <input type="email" placeholder="Email" class="form__13email" name="email" required>
                          </div>
                           
                           <div class="input-field">
                            <label>Line/Facebook</label>
                            <input type="text" placeholder="Line/Facebook" class="form__14linefb" name="linefb" required>
                          </div>
                           
                           <div class="input-field">
                            <label>Profile Photo</label>
                            <input type="file" class="form__15control" name="photo" required>
                            <button class="btn btn-primary" style="width:80px; height: 35px;font-size:10px;">Upload Photo</button>
                          </div>
                           
                         
                  </div>
                  </div> 
                <!-- ======================================================================================= -->
                <!-------------------------------- End of Personal Information -------------------------------->
                <br>
                <br>
             
                <!-----------------------------------------Parent Information --------------------------------->
                <!--=========================================================================================-->
                <div class="details personal">  
                    <h3 style="font-size:20px; color:grey;">Parent Information</h3>
                       <div class="fields">
                         <div class="input-field">
                            <label>Father</label>
                            <input type="text" placeholder="Father's Name" class="form__16dadname" name="DadName" required>
                         </div>
                        <div class="input-field">
                            <label>อายุ/Age</label>
                            <input type="number" placeholder="Father's Age" min="1" max="100" name="DadAge" class="form__17dadage" required>
                        </div>
                           
                         <div class="input-field">
                            <label>Status</label>
                            <input type="text" placeholder="Father's Status" class="form__18status" name="DadStatus" required>
                        </div>
                           
                       <div class="input-field">
                            <label>ศาสนา/Religion</label>
                            <select class="form__19dadreligion" name="DadReligion" required>
                                <option disabled selected>Select Religion</option>               
                                <option>Buddhist</option> 
                                <option>Christian</option>  
                                <option>Muslim</option>  
                                <option>Brahmin-Hundu</option>  
                                <option>Sikh</option>
                            </select>
                        </div>
                   
                        <div class="input-field">
                            <label>สัญชาติ/Nationality</label>
                            <select class="form__20dadnationality" name="DadNationality" required>
                                <option disabled selected>Select Nationality</option>
                                <option>မြန်မာ(พม่า)</option>  
                                <option>ထိုင်း(ไทย)</option>    
                            </select>
                        </div>
                        
                        <div class="input-field">
                            <label>เช6อชาติ/Ethnicity</label>
                            <select class="form__21dadethnicity" name="DadEthnicity" required>
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
                            <input type="text" placeholder="Father's Occupation" class="form__22dadoccupation" name="DadOccupation" required>
                        </div>
                        
                        <div class="input-field">
                            <label>Annual Average Income</label>
                            <input type="text" placeholder="Annual Average Income" class="form__23annualincome" name="annualincome" required>
                        </div>
                        
                        <!----- HIDDEN DIV -------->
                        <!------------------------->
                        <div class="input-field">
                            <label style="color:white"></label>
                            <input type="text" placeholder="Annual Average Income" class="form__annualincome" name="annualllincome" hidden>
                        </div>
                        <!------------------------->
                        <!----- HIDDEN DIV -------->
                           
                        
                        <!----------------- MOTHER ------------------->
                        <div class="input-field">
                            <label>Mother</label>
                            <input type="text" placeholder="Mother's Name" class="form__24dadname" name="MomName" required>
                         </div>
                        <div class="input-field">
                            <label>อายุ/Age</label>
                            <input type="number" placeholder="Mother's Age" min="1" max="100" name="MomAge" class="form__25momage" required>
                        </div>
                           
                         <div class="input-field">
                            <label>Status</label>
                            <input type="text" placeholder="Mother's Status" class="form__26momstatus" name="MomStatus" required>
                        </div>
                           
                       <div class="input-field">
                            <label>ศาสนา/Religion</label>
                            <select class="form__27momreligion" name="MomReligion" required>
                                <option disabled selected>Select Religion</option>               
                                <option>Buddhist</option> 
                                <option>Christian</option>  
                                <option>Muslim</option>  
                                <option>Brahmin-Hundu</option>  
                                <option>Sikh</option>
                            </select>
                        </div>
                   
                        <div class="input-field">
                            <label>สัญชาติ/Nationality</label>
                            <select class="form__28momnationality" name="MomNationality" required>
                                <option disabled selected>Select Nationality</option>
                                <option>မြန်မာ(พม่า)</option>  
                                <option>ထိုင်း(ไทย)</option>    
                            </select>
                        </div>
                        
                        <div class="input-field">
                            <label>เช6อชาติ/Ethnicity</label>
                            <select class="form__29momethnicity" name="MomEthnicity" required>
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
                            <input type="text" placeholder="Mother's Occupation" class="form__30momoccupation" name="MomOccupation" required>
                        </div>
                        
                        <div class="input-field">
                            <label>Annual Average Income</label>
                            <input type="text" placeholder="Annual Average Income" class="form__31momannualincome" name="momannualincome" required>
                        </div>
                           
                        <!----- HIDDEN DIV -------->
                        <div class="input-field">
                            <label style="color:white"></label>
                            <input type="text" placeholder="Annual Average Income" class="form__annualincome" name="annualllincome" hidden>
                        </div>  
                        <!----- HIDDEN DIV -------->
                        <!---------------END OF MOTHER------------------------>
                        
                        <div class="input-field">
                            <label>Guardian</label>
                            <input type="text" placeholder="Guardian's Name" class="form__31Guarname" name="GuarName" required>
                         </div>
                        <div class="input-field">
                            <label>อายุ/Age</label>
                            <input type="number" placeholder="Guardian's Age" min="1" max="100" name="GuarAge" class="form__32Guarage" required>
                        </div>
                           
                         <div class="input-field">
                            <label>Status</label>
                            <input type="text" placeholder="Guardian's Status" class="form__33Guarstatus" name="GuarStatus" required>
                        </div>
                           
                       <div class="input-field">
                            <label>ศาสนา/Religion</label>
                            <select class="form__34Guarreligion" name="GuarReligion" required>
                                <option disabled selected>Select Religion</option>               
                                <option>Buddhist</option> 
                                <option>Christian</option>  
                                <option>Muslim</option>  
                                <option>Brahmin-Hundu</option>  
                                <option>Sikh</option>
                            </select>
                        </div>
                   
                        <div class="input-field">
                            <label>สัญชาติ/Nationality</label>
                            <select class="form__35Guarnationality" name="GuarNationality" required>
                                <option disabled selected>Select Nationality</option>
                                <option>မြန်မာ(พม่า)</option>  
                                <option>ထိုင်း(ไทย)</option>    
                            </select>
                        </div>
                        
                        <div class="input-field">
                            <label>เช6อชาติ/Ethnicity</label>
                            <select class="form__36Guarethnicity" name="GuarEthnicity" required>
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
                            <input type="text" placeholder="Guardian's Occupation" class="form__37Guaroccupation" name="GuarOccupation" required>
                        </div>
                        
                        <div class="input-field">
                            <label>Annual Average Income</label>
                            <input type="text" placeholder="Annual Average Income" class="form__38Guarannualincome" name="Guarannualincome" required>
                        </div>
                        
                        <!----- HIDDEN DIV -------->
                        <div class="input-field">
                            <label style="color:white"></label>
                            <input type="text" placeholder="Annual Average Income" class="form__annualincome" name="annualllincome" hidden>
                        </div>  
                        <!----- HIDDEN DIV -------->
                        <div class="input-field1">
                            <fieldset style="padding:0 2px;">
                                <legend style="font-size: 12px;">Relationship</legend>
                            <input type="radio" name="relation" id="Father" value="Father"/>
                            <label for="Father" style="">Father</label>
                            <input type="radio" name="relation" id="Mother" value="Mother"/>
                            <label for="Mother">Mother</label>
                            <input type="radio" name="relation" id="Other" value="Other"/>
                            <label for="Other">Other</label>
                                </fieldset>
                        </div>
                        
                        <div class="input-field">
                            <label>If you choose other, please specify</label>
                            <input type="text" placeholder="Specify Other" class="form__40Other" name="RelationOther" required>
                        </div>
                           
                        <!----- HIDDEN DIV -------->
                        <div class="input-field">
                            <label style="color:white"></label>
                            <input type="text" placeholder="Annual Average Income" class="form__annualincome" name="annualllincome" hidden>
                        </div>  
                        <!----- HIDDEN DIV -------->  
                           
                        <div class="input-field">
                            <label>Address in Country of Origin</label>
                            <input type="text" placeholder="Original Address" class="form__41mmadd" name="mmadd" required>
                        </div>
                        <div class="input-field">
                            <label>Current Address</label>
                            <input type="text" placeholder="Current Address" class="form__42curadd" name="Curadd" required>
                        </div>
                           
                        <!----- HIDDEN DIV -------->
                        <div class="input-field">
                            <label style="color:white"></label>
                            <input type="text" placeholder="Annual Average Income" class="form__annualincome" name="annualllincome" hidden>
                        </div>  
                        <!----- HIDDEN DIV --------> 
                           
                        <div class="input-field">
                            <label>Place of Information Collecting</label>
                            <input type="text" placeholder="Place" class="form__43placeinfo" name="placeinfo" required>
                        </div>
                        <div class="input-field">
                            <label>Data Collecting Date</label>
                            <input type="date" class="form__44infodate" name="InfoDate" required>
                        </div> 
                        <div class="input-field">
                            <label>Data Collecting Person</label>
                            <input type="text" placeholder="Name" class="form__45collector" name="Collector" required>
                        </div> 
                           
                  </div>
                  </div> 
                <!-- ==================================================================================== -->
                <!------------------------------ End of Parent Information --------------------------------->
                <br>
                <br>
                
                <!-----------------------------------Information of Place-------------------------------------->
                <!--=========================================================================================-->
                <div class="details personal">  
                    <h3 style="font-size:20px; color:grey;">Information of Place</h3>
                    <h4 style="font-size:15px; color:grey;">Information in Place of Birth</h4>
                    <h5 style="font-size:13px; color:grey;">1.1 Information at Birth</h5>
                       <div class="fields">
                         
                         <div class="input-field">
                            <label>ชือ/Name</label>
                            <input type="text" placeholder="Enter your name" class="form__46name" name="46Name" required>
                         </div>
                           
                         <div class="input-field">
                            <label>Nickname</label>
                            <input type="text" placeholder="Enter your nickname" class="form__47nickname" name="47Nickame" required>
                         </div>
                        <div class="input-field">
                            <label>วนัเกิด/Date of Birth</label>
                            <input type="date" placeholder="Enter birth date" class="form__48dob" name="48DOB" required>
                        </div>        
                           
                       <div class="input-field">
                            <label>ศาสนา/Religion</label>
                            <select class="form__49religion" name="49Religion" required>
                                <option disabled selected>Select Religion</option>               
                                <option>Buddhist</option> 
                                <option>Christian</option>  
                                <option>Muslim</option>  
                                <option>Brahmin-Hundu</option>  
                                <option>Sikh</option>
                            </select>
                        </div>
                   
                        <div class="input-field">
                            <label>สัญชาติ/Nationality</label>
                            <select class="form__50nationality" name="50Nationality" required>
                                <option disabled selected>Select Nationality</option>
                                <option>မြန်မာ(พม่า)</option>  
                                <option>ထိုင်း(ไทย)</option>    
                            </select>
                        </div>
                        
                        <div class="input-field">
                            <label>เช6อชาติ/Ethnicity</label>
                            <select class="form__51ethnicity" name="51Ethnicity" required>
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
                            <label>Number of Siblings</label>
                            <input type="number" placeholder="Number of Siblings" min="1" max="100" name="siblings" class="form__52sib" required>
                        </div>
                        
                        <div class="input-field">
                            <label>Address</label>
                            <input type="text" placeholder="Address" class="form__52address" name="52address" required>
                        </div>
                           
                        <!----- HIDDEN DIV -------->
                        <div class="input-field">
                            <label style="color:white"></label>
                            <input type="text" placeholder="Annual Average Income" class="form__annualincome" name="annualllincome" hidden>
                        </div>  
                        <!----- HIDDEN DIV --------> 
                           
                         
                  </div>
                    <br>
                      <h5 style="font-size:13px; color:grey;">1.2 Information in Identitiy Card</h5>
                       <div class="fields">
                         
                         <div class="input-field">
                            <label>ชือ/Name</label>
                            <input type="text" placeholder="Enter your name" class="form__53name" name="53Name" required>
                         </div>
                           
                         <div class="input-field">
                            <label>Nickname</label>
                            <input type="text" placeholder="Enter your nickname" class="form__54nickname" name="54Nickame" required>
                         </div>
                        <div class="input-field">
                            <label>วนัเกิด/Date of Birth</label>
                            <input type="date" placeholder="Enter birth date" class="form__55dob" name="55DOB" required>
                        </div>        
                           
                       <div class="input-field">
                            <label>ศาสนา/Religion</label>
                            <select class="form__56religion" name="56Religion" required>
                                <option disabled selected>Select Religion</option>               
                                <option>Buddhist</option> 
                                <option>Christian</option>  
                                <option>Muslim</option>  
                                <option>Brahmin-Hundu</option>  
                                <option>Sikh</option>
                            </select>
                        </div>
                   
                        <div class="input-field">
                            <label>สัญชาติ/Nationality</label>
                            <select class="form__57nationality" name="57Nationality" required>
                                <option disabled selected>Select Nationality</option>
                                <option>မြန်မာ(พม่า)</option>  
                                <option>ထိုင်း(ไทย)</option>    
                            </select>
                        </div>
                        
                        <div class="input-field">
                            <label>เช6อชาติ/Ethnicity</label>
                            <select class="form__58ethnicity" name="58Ethnicity" required>
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
                            <label>Number of Siblings</label>
                            <input type="number" placeholder="Number of Siblings" min="1" max="100" name="59siblings" class="form__59sib" required>
                        </div>
                        
                        <div class="input-field">
                            <label>Address</label>
                            <input type="text" placeholder="Address" class="form__60address" name="60address" required>
                        </div>
                           
                        <!----- HIDDEN DIV -------->
                        <div class="input-field">
                            <label style="color:white"></label>
                            <input type="text" placeholder="Annual Average Income" class="form__annualincome" name="annualllincome" hidden>
                        </div>  
                        <!----- HIDDEN DIV --------> 
                           
                         
                  </div>
                    <br>
                    
                      <h5 style="font-size:13px; color:grey;">1.3 Information of Guardian</h5>
                       <div class="fields">
                           
                       
                        <div class="input-field1">
                            <fieldset style="padding:0 2px;">
                                <legend style="font-size: 12px;">Relationship</legend>
                            <input type="radio" name="61relation" id="61Father" value="Father"/>
                            <label for="Father" style="">Father</label>
                            <input type="radio" name="61relation" id="61Mother" value="Mother"/>
                            <label for="Mother">Mother</label>
                            <input type="radio" name="61relation" id="61Other" value="Other"/>
                            <label for="Other">Other</label>
                                </fieldset>
                        </div>
                         <div class="input-field">
                            <label>If you choose other, please specify</label>
                            <input type="text" placeholder="Specify Other" class="form__62Other" name="62RelationOther" required>
                        </div>
                         
                         <div class="input-field">
                            <label>ชือ/Name</label>
                            <input type="text" placeholder="Enter Guardian's name" class="form__63name" name="63Name" required>
                         </div>
                           
                        <div class="input-field">
                            <label>อายุ/Age</label>
                            <input type="number" placeholder="Age" min="1" max="100" name="64GuarAge" class="form__64Guarage" required>
                        </div>   
                           
                        <div class="input-field">
                            <label>Martial Status</label>
                            <input type="text" placeholder="Martial Status" class="form__65status" name="65Status" required>
                        </div>
                           
                       <div class="input-field">
                            <label>ศาสนา/Religion</label>
                            <select class="form__66religion" name="66Religion" required>
                                <option disabled selected>Select Religion</option>               
                                <option>Buddhist</option> 
                                <option>Christian</option>  
                                <option>Muslim</option>  
                                <option>Brahmin-Hundu</option>  
                                <option>Sikh</option>
                            </select>
                        </div>
                   
                        <div class="input-field">
                            <label>สัญชาติ/Nationality</label>
                            <select class="form__67nationality" name="67Nationality" required>
                                <option disabled selected>Select Nationality</option>
                                <option>မြန်မာ(พม่า)</option>  
                                <option>ထိုင်း(ไทย)</option>    
                            </select>
                        </div>
                        
                        <div class="input-field">
                            <label>เช6อชาติ/Ethnicity</label>
                            <select class="form__68ethnicity" name="68Ethnicity" required>
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
                            <input type="text" placeholder="Guardian's Occupation" class="form__69Guaroccupation" name="69GuarOccupation" required>
                        </div>
                        
                        <div class="input-field">
                            <label>Annual Average Income</label>
                            <input type="text" placeholder="Annual Average Income" class="form__70Guarannualincome" name="70Guarannualincome" required>
                        </div>
                        
                         <div class="input-field">
                            <label>Address at Birth</label>
                            <input type="text" placeholder="Address at Birth" class="form__71add" name="71add" required>
                        </div>
                           
                         <div class="input-field">
                            <label>ความเกี่ยวข้อง </label>
                            <input type="text" placeholder="ความเกี่ยวข้อง " class="form__72temp" name="72temp" required>
                        </div>

                  </div>
                    <br>
                <!------------------------------------End of Info of Guardian ----------------------------------------->
                <!------------------------------------Table of sibling ------------------------------------------------>
                    <h5 style="font-size:13px; color:grey;">1.4 Number of Siblings</h5>
                    <div class="fields">
                        
                        <form>
  <table style="width:1000px; font-family:'Cambria', sans-serif; font-size:13px;">
    <thead>
      <tr style="">
        <th style="width:15px; height:20px;">
          No
        </th>
        <th>
          Name
        </th>
        <th>
          Sex
        </th>
          <th>
          Age
        </th>
        <th>
          Occupation
        </th>
        <th>
          Education (mention only grade/standard)
        </th>
          <th>
          Address (mention city and state only)
        </th>
        <th>
          Remark
        </th>
        <th>
          Location
        </th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>
           1
        </td>
        <td>
            <label class="visually-hidden" for="dhl_comment">Comment</label><input  class="tab_input" type="text" style="" id="dhl_comment">
        </td>
        <td>
           <label class="visually-hidden" for="dhl_comment">Comment</label><input type="text" id="dhl_comment">
        </td>
           <td>
            <label class="visually-hidden" for="dhl_comment">Comment</label><input type="text" id="dhl_comment">
        </td>
        <td>
           <label class="visually-hidden" for="dhl_comment">Comment</label><input type="text" id="dhl_comment">
        </td>
        <td>
          <label class="visually-hidden" for="dhl_comment">Comment</label><input type="text" id="dhl_comment"> </td>
           <td>
            <label class="visually-hidden" for="dhl_comment">Comment</label><input type="text" id="dhl_comment">   </td>
        <td>
            <label class="visually-hidden" for="dhl_comment">Comment</label><input type="text" id="dhl_comment">   </td>
        <td>
          <label class="visually-hidden" for="dhl_comment">Comment</label><input type="text" id="dhl_comment">   </td>
      </tr>
        
      <tr>
        <td>
           <label class="visually-hidden" for="dhl_comment">Comment</label><input type="text" id="dhl_comment">
        </td>
        <td>
            <label class="visually-hidden" for="dhl_comment">Comment</label><input type="text" id="dhl_comment">
        </td>
        <td>
           <label class="visually-hidden" for="dhl_comment">Comment</label><input type="text" id="dhl_comment">
        </td>
           <td>
            <label class="visually-hidden" for="dhl_comment">Comment</label><input type="text" id="dhl_comment">
        </td>
        <td>
           <label class="visually-hidden" for="dhl_comment">Comment</label><input type="text" id="dhl_comment">
        </td>
        <td>
          <label class="visually-hidden" for="dhl_comment">Comment</label><input type="text" id="dhl_comment"> </td>
           <td>
            <label class="visually-hidden" for="dhl_comment">Comment</label><input type="text" id="dhl_comment">   </td>
        <td>
            <label class="visually-hidden" for="dhl_comment">Comment</label><input type="text" id="dhl_comment">   </td>
        <td>
          <label class="visually-hidden" for="dhl_comment">Comment</label><input type="text" id="dhl_comment">   </td>
      </tr>
        
      <tr>
        <td>
           <label class="visually-hidden" for="dhl_comment">Comment</label><input type="text" id="dhl_comment">
        </td>
        <td>
            <label class="visually-hidden" for="dhl_comment">Comment</label><input type="text" id="dhl_comment">
        </td>
        <td>
           <label class="visually-hidden" for="dhl_comment">Comment</label><input type="text" id="dhl_comment">
        </td>
           <td>
            <label class="visually-hidden" for="dhl_comment">Comment</label><input type="text" id="dhl_comment">
        </td>
        <td>
           <label class="visually-hidden" for="dhl_comment">Comment</label><input type="text" id="dhl_comment">
        </td>
        <td>
          <label class="visually-hidden" for="dhl_comment">Comment</label><input type="text" id="dhl_comment"> </td>
           <td>
            <label class="visually-hidden" for="dhl_comment">Comment</label><input type="text" id="dhl_comment">   </td>
        <td>
            <label class="visually-hidden" for="dhl_comment">Comment</label><input type="text" id="dhl_comment">   </td>
        <td>
          <label class="visually-hidden" for="dhl_comment">Comment</label><input type="text" id="dhl_comment">   </td>
      </tr>
    </tbody>
  </table>
</form>
                           
                         
                    </div>
               
                  </div> 
                <!-- ======================================================================================= -->
                <!-------------------------------- End of Personal Information -------------------------------->
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
