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
        table{
          
   
    border-radius: 5px;
    border: 1px solid #aaa;
    padding: 0 15px;
    height: 42px;
    margin: 8px 0;
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
                    <h5 style="font-size:13px; color:grey;">1.4 Number of Siblings (Optional)</h5>
                    <h5 style="font-size:13px; color:grey;">Sibling I</h5>
                    
                    <div class="fields">
                    
                      <div class="input-field">
                            <label>ชือ/Name</label>
                            <input type="text" placeholder="Sibling Name" class="form__73sibname" name="73sibName">
                      </div>
                      <div class="input-field">
                            <label>Gender</label>
                            <select class="form__74gender" name="74Gender" >
                                <option disabled selected>Select gender</option>
                                <option>Male</option>
                                <option>Female</option>
                                <option>Others</option>
                                <option>Prefers not to say</option>
                            </select>
                        </div>
                        
                        <div class="input-field">
                            <label>Age</label>
                            <input type="number" placeholder="Age" min="1" max="100" name="75age" class="form__75age">
                        </div>
                           
                        <div class="input-field">
                            <label>อาชีพ/Occupation</label>
                            <input type="text" placeholder="Occupation" class="form__76occupation" name="76Occupation">
                        </div>
                        
                        <div class="input-field">
                            <label>Address</label>
                            <input type="text" placeholder="Contact" class="form__77address" name="77address" >
                        </div>
                
                        <div class="input-field">
                            <label>Remark</label>
                            <input type="text" placeholder="Contact" class="form__78remark" name="78Remark" required>
                        </div>
                        <div class="input-field">
                            <label>Location</label>
                            <input type="text" placeholder="Location" class="form__79loc" name="79loc" required>
                        </div>
                   
                        </div>
                      
                        
                    <h5 style="font-size:13px; color:grey;">Sibling II</h5>
                    <div class="fields">
                    
                      <div class="input-field">
                            <label>ชือ/Name</label>
                            <input type="text" placeholder="Sibling Name" class="form__80sibname" name="80sibName">
                      </div>
                      <div class="input-field">
                            <label>Gender</label>
                            <select class="form__81gender" name="81Gender" >
                                <option disabled selected>Select gender</option>
                                <option>Male</option>
                                <option>Female</option>
                                <option>Others</option>
                                <option>Prefers not to say</option>
                            </select>
                        </div>
                        
                        <div class="input-field">
                            <label>Age</label>
                            <input type="number" placeholder="Age" min="1" max="100" name="82age" class="form__82age">
                        </div>
                           
                        <div class="input-field">
                            <label>อาชีพ/Occupation</label>
                            <input type="text" placeholder="Occupation" class="form__83occupation" name="83Occupation">
                        </div>
                        
                        <div class="input-field">
                            <label>Address</label>
                            <input type="text" placeholder="Contact" class="form__84address" name="84address" >
                        </div>
                
                        <div class="input-field">
                            <label>Remark</label>
                            <input type="text" placeholder="Contact" class="form__85remark" name="85Remark" >
                        </div>
                        <div class="input-field">
                            <label>Location</label>
                            <input type="text" placeholder="Location" class="form__86loc" name="86loc" >
                        </div>
                       
                    </div>
               <h5 style="font-size:13px; color:grey;">Sibling III</h5>
                    <div class="fields">
                    
                      <div class="input-field">
                            <label>ชือ/Name</label>
                            <input type="text" placeholder="Sibling Name" class="form__87sibname" name="87sibName">
                      </div>
                      <div class="input-field">
                            <label>Gender</label>
                            <select class="form__88gender" name="88Gender" >
                                <option disabled selected>Select gender</option>
                                <option>Male</option>
                                <option>Female</option>
                                <option>Others</option>
                                <option>Prefers not to say</option>
                            </select>
                        </div>
                        
                        <div class="input-field">
                            <label>Age</label>
                            <input type="number" placeholder="Age" min="1" max="100" name="89age" class="form__89age">
                        </div>
                           
                        <div class="input-field">
                            <label>อาชีพ/Occupation</label>
                            <input type="text" placeholder="Occupation" class="form__90occupation" name="90Occupation">
                        </div>
                        
                        <div class="input-field">
                            <label>Address</label>
                            <input type="text" placeholder="Contact" class="form__91address" name="91address" >
                        </div>
                
                        <div class="input-field">
                            <label>Remark</label>
                            <input type="text" placeholder="Contact" class="form__92remark" name="92Remark" >
                        </div>
                        <div class="input-field">
                            <label>Location</label>
                            <input type="text" placeholder="Location" class="form__93loc" name="93loc" >
                        </div>
                       
                    </div>
                <h5 style="font-size:13px; color:grey;">Sibling IV</h5>
                    <div class="fields">
                    
                      <div class="input-field">
                            <label>ชือ/Name</label>
                            <input type="text" placeholder="Sibling Name" class="form__94sibname" name="94sibName">
                      </div>
                      <div class="input-field">
                            <label>Gender</label>
                            <select class="form__95gender" name="95Gender" >
                                <option disabled selected>Select gender</option>
                                <option>Male</option>
                                <option>Female</option>
                                <option>Others</option>
                                <option>Prefers not to say</option>
                            </select>
                        </div>
                        
                        <div class="input-field">
                            <label>Age</label>
                            <input type="number" placeholder="Age" min="1" max="100" name="96age" class="form__96age">
                        </div>
                           
                        <div class="input-field">
                            <label>อาชีพ/Occupation</label>
                            <input type="text" placeholder="Occupation" class="form__97occupation" name="97Occupation">
                        </div>
                        
                        <div class="input-field">
                            <label>Address</label>
                            <input type="text" placeholder="Contact" class="form__98address" name="98address" >
                        </div>
                
                        <div class="input-field">
                            <label>Remark</label>
                            <input type="text" placeholder="Contact" class="form__99remark" name="99Remark" >
                        </div>
                        <div class="input-field">
                            <label>Location</label>
                            <input type="text" placeholder="Location" class="form__100loc" name="100loc" >
                        </div>
                       
                    </div>
                    
                                    <h5 style="font-size:13px; color:grey;">Sibling V</h5>
                    <div class="fields">
                    
                      <div class="input-field">
                            <label>ชือ/Name</label>
                            <input type="text" placeholder="Sibling Name" class="form__101sibname" name="94sibName">
                      </div>
                      <div class="input-field">
                            <label>Gender</label>
                            <select class="form__102gender" name="102Gender" >
                                <option disabled selected>Select gender</option>
                                <option>Male</option>
                                <option>Female</option>
                                <option>Others</option>
                                <option>Prefers not to say</option>
                            </select>
                        </div>
                        
                        <div class="input-field">
                            <label>Age</label>
                            <input type="number" placeholder="Age" min="1" max="100" name="103age" class="form__103age">
                        </div>
                           
                        <div class="input-field">
                            <label>อาชีพ/Occupation</label>
                            <input type="text" placeholder="Occupation" class="form__104occupation" name="104Occupation">
                        </div>
                        
                        <div class="input-field">
                            <label>Address</label>
                            <input type="text" placeholder="Contact" class="form__105address" name="105address" >
                        </div>
                
                        <div class="input-field">
                            <label>Remark</label>
                            <input type="text" placeholder="Contact" class="form__106remark" name="106Remark" >
                        </div>
                        <div class="input-field">
                            <label>Location</label>
                            <input type="text" placeholder="Location" class="form__107loc" name="107loc" >
                        </div>
                       
                    </div>
               
                  </div> 
                <!-- ======================================================================================= -->
                <!---------------------------- End of Sibling Table Information ----------------------------->
                <!--------------------------------Table of Education ---------------------------------------->
                <br>   
                <h5 style="font-size:13px; color:grey;">1.5 Education Information (of student)</h5>
                    <h5 style="font-size:13px; color:grey;">Institution I</h5>
                    
                    <div class="fields">
                    
                      <div class="input-field">
                            <label>Name of Institution</label>
                            <input type="text" placeholder="Name of Institution" class="form__108institute" name="108institute">
                      </div>
                           
                      <div class="input-field">
                            <label>Level/Standard/Grade</label>
                            <input type="text" placeholder="Level/Standard/Grade" class="form__109level" name="109level">
                      </div>
                        
                      <div class="input-field">
                            <label>Year of Completion</label>
                            <input type="number" placeholder="Year of Completion " class="form__110year" name="110year" >
                      </div>
                
                      <div class="input-field">
                            <label>Remark</label>
                            <input type="text" placeholder="Contact" class="form__111remark" name="111Remark" >
                      </div>
                       
                    </div>
                <h5 style="font-size:13px; color:grey;">Institution II</h5>
                <div class="fields">
                    
                      <div class="input-field">
                            <label>Name of Institution</label>
                            <input type="text" placeholder="Name of Institution" class="form__112institute" name="108institute">
                      </div>
                           
                      <div class="input-field">
                            <label>Level/Standard/Grade</label>
                            <input type="text" placeholder="Level/Standard/Grade" class="form__113level" name="109level">
                      </div>
                        
                      <div class="input-field">
                            <label>Year of Completion</label>
                            <input type="number" placeholder="Year of Completion " class="form__114year" name="110year" >
                      </div>
                
                      <div class="input-field">
                            <label>Remark</label>
                            <input type="text" placeholder="Contact" class="form__111remark" name="115Remark" >
                      </div>
                       
                    </div>
                <h5 style="font-size:13px; color:grey;">Institution III</h5>
                <div class="fields">
                    
                      <div class="input-field">
                            <label>Name of Institution</label>
                            <input type="text" placeholder="Name of Institution" class="form__116institute" name="116institute">
                      </div>
                           
                      <div class="input-field">
                            <label>Level/Standard/Grade</label>
                            <input type="text" placeholder="Level/Standard/Grade" class="form__117level" name="117level">
                      </div>
                        
                      <div class="input-field">
                            <label>Year of Completion</label>
                            <input type="number" placeholder="Year of Completion " class="form__118year" name="118year" >
                      </div>
                
                      <div class="input-field">
                            <label>Remark</label>
                            <input type="text" placeholder="Contact" class="form__119remark" name="119Remark" >
                      </div>
                       
                    </div>
                      
                <h5 style="font-size:13px; color:grey;">Institution IV</h5>
                <div class="fields">
                    
                      <div class="input-field">
                            <label>Name of Institution</label>
                            <input type="text" placeholder="Name of Institution" class="form__120institute" name="120institute">
                      </div>
                           
                      <div class="input-field">
                            <label>Level/Standard/Grade</label>
                            <input type="text" placeholder="Level/Standard/Grade" class="form__121level" name="121level">
                      </div>
                        
                      <div class="input-field">
                            <label>Year of Completion</label>
                            <input type="number" placeholder="Year of Completion " class="form__122year" name="122year" >
                      </div>
                
                      <div class="input-field">
                            <label>Remark</label>
                            <input type="text" placeholder="Contact" class="form__123remark" name="123Remark" >
                      </div>
                       
                    </div>
                
                <h5 style="font-size:13px; color:grey;">Institution V</h5>
                <div class="fields">
                    
                      <div class="input-field">
                            <label>Name of Institution</label>
                            <input type="text" placeholder="Name of Institution" class="form__124institute" name="124institute">
                      </div>
                           
                      <div class="input-field">
                            <label>Level/Standard/Grade</label>
                            <input type="text" placeholder="Level/Standard/Grade" class="form__125level" name="125level">
                      </div>
                        
                      <div class="input-field">
                            <label>Year of Completion</label>
                            <input type="number" placeholder="Year of Completion " class="form__126year" name="126year" >
                      </div>
                
                      <div class="input-field">
                            <label>Remark</label>
                            <input type="text" placeholder="Contact" class="form__127remark" name="127Remark" >
                      </div>
                       
                    </div>
                    
               
               
                <!-- ===================================================================================== -->
                <!---------------------------- End of Table Institution Information ------------------------->
                <br>
                
                
                <!---------------------------------Table of xxxxxx ------------------------------------------>
                <br>   
                <h5 style="font-size:13px; color:grey;">1.6 โอกาสการได้รับการสนับสนุนเพื่อศึกษาต่อ (ถ้ามี) </h5>
             
                    
                    <div class="fields">
                    
                      <div class="input-field">
                            <label>หน่วยงาน/องค์กร / Department or organization: </label>
                            <input type="text" placeholder="Department or organization" class="form__128dept" name="128dept">
                      </div>
                         
                      <div class="input-field">
                            <label>ปีที่ได้รับการสนับสนุน / Year of supporting: </label>
                            <input type="number" placeholder="Year of supporting" class="form__129year" name="129year" >
                      </div>
                        
                         <div class="input-field">
                            <label>ประเภทของการสนับสนุน/ Type of supporting</label>
                            <input type="text" placeholder="Type of supporting" class="form__130supporttype" name="130supporttype">
                      </div>
                
                      <div class="input-field">
                            <label>จำนวนสมาชิกในครอบครัวที่ได้รับการสนับสนุน / Number of family who got supported</label>
                            <input type="text" placeholder="Number of family who got supported" class="form__131fam" name="131fam" >
                      </div>
                    <div class="input-field">
                            <label>แรงบันดาลใจในการอยากศึกษาต่อ /Aspiration for continue education </label>
                            <input type="text" placeholder="Aspiration for continue education" class="form__132asp" name="132asp" >
                    </div>
                    
                    <!----- HIDDEN DIV -------->
                        <div class="input-field">
                            <label style="color:white"></label>
                            <input type="text" placeholder="Annual Average Income" class="form__annualincome" name="annualllincome" hidden>
                        </div>  
                    <!----- HIDDEN DIV --------> 
                       
                    </div>       
               
                <!-- ======================================================================================= -->
                <!-------------------------------- End of Table Institution Information ------------------------------>
                <br>
                <br>
                <!----------------------------------Information in Thailand --------------------------------->
                <!--=======================================================================================-->
                <div class="details personal">  
                    <h3 style="font-size:20px; color:grey;">Information in Thailand</h3>
                     <h5 style="font-size:13px; color:grey;">2.1ข้อมูลการเข้าไทยตั้งแต่ครั้งแรก/Information at first arrive to Thailand (ตอบตามความสมัครใจ)</h5>
                       <div class="fields">
                          
                         <div class="input-field">
                            <label>เข้ามาในประเทศไทยครั้งแรกเมื่อไหร่/When was the first time of arriving to Thailand </label>
                            <input type="text" placeholder="first time in Thailand" class="form__133arrival" name="133arrival" required>
                         </div>
                        <div class="input-field">
                            <label>ช่องทางการเดินทางเข้าประเทศไทย/Port of arrival</label>
                            <input type="text" placeholder="Port of Arrival" name="form_134PortArr" class="134PortArr" required>
                        </div>
                           
                         <div class="input-field">
                            <label>คุณอาศัยอยู่กับใคร/Who do you travel with </label>
                            <input type="text" placeholder="Person you travelled with" class="form__135PortArr" name="135PortArr" required>
                        </div>
                           
                        <div class="input-field">
                            <label>ที่อยู่ (ระบุอำเภอและจังหวัด)/Address (District and Province)</label>
                            <input type="text" placeholder="Address" class="form__136Address" name="136Address" required>
                           </div>
                         
                    </div>
                    
                  </div> 
                 
                    <h5 style="font-size:13px; color:grey;">2.2 ข้อมูลเอกสารประจำตัวที่ออกโดยรัฐบาลไทย/  Information in the identity card or passport provided by government</h5>
                       <div class="fields">
                         
                         <div class="input-field">
                            <label>ชือ/Name</label>
                            <input type="text" placeholder="Name" class="form__137name" name="137Name" required>
                         </div>
                           
                         <div class="input-field">
                            <label>Nickname</label>
                            <input type="text" placeholder="Nickname" class="form__138nickname" name="138Nickame" required>
                         </div>
                        <div class="input-field">
                            <label>วนัเกิด/Date of Birth</label>
                            <input type="date" placeholder="Birth date" class="form__139dob" name="139DOB" required>
                        </div>        

                        <div class="input-field">
                            <label>Occupation</label>
                            <input type="text" placeholder="Occupation" class="form__140occpation" name="140occupation" required>
                        </div>
                        
                        <div class="input-field">
                            <label>Workplace (District)</label>
                            <input type="text" placeholder="Workplace(District)" class="form__141workplace" name="141workplace" required>
                        </div>
                           
                        <div class="input-field">
                            <label>Work Permit (if any)</label>
                            <input type="text" placeholder="Work Permit" class="form__142workpermit" name="142workpermit" required>
                        </div>
                        
                        <div class="input-field">
                            <label>Number of Work Permit</label>
                            <input type="number" placeholder="Number of Work Permit" class="form__143permitno" name="143permitno" required>
                        </div> 
                        <div class="input-field">
                            <label>Number of employee's Social Welfare Reg: card (if any)</label>
                            <input type="text" placeholder="Social Welfare Reg: card No." class="form__143SWRcard" name="143SWRcard" required>
                        </div>
                           <div class="input-field">
                            <label>ศาสนา/Religion</label>
                            <select class="form__144religion" name="144Religion" required>
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
                            <select class="form__145nationality" name="145Nationality" required>
                                <option disabled selected>Select Nationality</option>
                                <option>မြန်မာ(พม่า)</option>  
                                <option>ထိုင်း(ไทย)</option>    
                            </select>
                        </div>
                        
                        <div class="input-field">
                            <label>เช6อชาติ/Ethnicity</label>
                            <select class="form__146ethnicity" name="146Ethnicity" required>
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
                            <label>Father</label>
                            <input type="text" placeholder="Father's Name" class="form__147father" name="147father" required>
                        </div>
                           
                        <div class="input-field">
                            <label>Mother</label>
                            <input type="text" placeholder="Mother's Name" class="form__148mother" name="148mother" required>
                        </div>
                        <div class="input-field">
                            <label>Address in passport or identity card</label>
                            <input type="text" placeholder="Addressin passport or identity card" class="form__149address" name="149address" required>
                        </div>
                        <div class="input-field">
                            <label>Current Address</label>
                            <input type="text" placeholder="Current Address" class="form__150curaddress" name="150curaddress" required>
                        </div>
                        
                        <!----- HIDDEN DIV -------->
                        <div class="input-field">
                            <label style="color:white"></label>
                            <input type="text" placeholder="Annual Average Income" class="form__annualincome" name="annualllincome" hidden>
                        </div>  
                        <!----- HIDDEN DIV --------> 
                           
                         
                  </div>
                
                <h5 style="font-size:13px; color:grey;">2.2 ข้อมูลเอกสารประจำตัวที่ออกโดยรัฐบาลไทย/  Information in the identity card or passport provided by government</h5>
                       <div class="fields">
                         
                         <div class="input-field">
                            <label>ชือ/Name</label>
                            <input type="text" placeholder="Name" class="form__137name" name="137Name" required>
                         </div>
                           
                         <div class="input-field">
                            <label>Nickname</label>
                            <input type="text" placeholder="Nickname" class="form__138nickname" name="138Nickame" required>
                         </div>
                        <div class="input-field">
                            <label>วนัเกิด/Date of Birth</label>
                            <input type="date" placeholder="Birth date" class="form__139dob" name="139DOB" required>
                        </div>        

                        <div class="input-field">
                            <label>Occupation</label>
                            <input type="text" placeholder="Occupation" class="form__140occpation" name="140occupation" required>
                        </div>
                        
                        <div class="input-field">
                            <label>Workplace (District)</label>
                            <input type="text" placeholder="Workplace(District)" class="form__141workplace" name="141workplace" required>
                        </div>
                           
                        <div class="input-field">
                            <label>Work Permit (if any)</label>
                            <input type="text" placeholder="Work Permit" class="form__142workpermit" name="142workpermit" required>
                        </div>
                        
                        <div class="input-field">
                            <label>Number of Work Permit</label>
                            <input type="number" placeholder="Number of Work Permit" class="form__143permitno" name="143permitno" required>
                        </div> 
                        <div class="input-field">
                            <label>Number of employee's Social Welfare Reg: card (if any)</label>
                            <input type="text" placeholder="Social Welfare Reg: card No." class="form__143SWRcard" name="143SWRcard" required>
                        </div>
                           <div class="input-field">
                            <label>ศาสนา/Religion</label>
                            <select class="form__144religion" name="144Religion" required>
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
                            <select class="form__145nationality" name="145Nationality" required>
                                <option disabled selected>Select Nationality</option>
                                <option>မြန်မာ(พม่า)</option>  
                                <option>ထိုင်း(ไทย)</option>    
                            </select>
                        </div>
                        
                        <div class="input-field">
                            <label>เช6อชาติ/Ethnicity</label>
                            <select class="form__146ethnicity" name="146Ethnicity" required>
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
                            <label>Father</label>
                            <input type="text" placeholder="Father's Name" class="form__147father" name="147father" required>
                        </div>
                           
                        <div class="input-field">
                            <label>Mother</label>
                            <input type="text" placeholder="Mother's Name" class="form__148mother" name="148mother" required>
                        </div>
                        <div class="input-field">
                            <label>Address in passport or identity card</label>
                            <input type="text" placeholder="Addressin passport or identity card" class="form__149address" name="149address" required>
                        </div>
                        <div class="input-field">
                            <label>Current Address</label>
                            <input type="text" placeholder="Current Address" class="form__150curaddress" name="150curaddress" required>
                        </div>
                        
                        <!----- HIDDEN DIV -------->
                        <div class="input-field">
                            <label></label>
                            <input type="text" hidden>
                        </div>  
                        <!----- HIDDEN DIV --------> 
                           
                         
                  </div>
                <h5 style="font-size:13px; color:grey;">2.3 History of migration</h5>
                <h5 style="font-size:10px; color:grey;">Country I </h5>
                
                       <div class="fields">
                         
                         <div class="input-field">
                            <label>Country</label>
                            <input type="text" placeholder="Country" class="form__151country" name="151country" required>
                         </div>
                           
                         <div class="input-field">
                            <label>Province</label>
                            <input type="text" placeholder="Province" class="form__152province" name="152province" required>
                         </div>
                        <div class="input-field">
                            <label>District</label>
                            <input type="text" placeholder="District" class="form__153district" name="153district" required>
                        </div>        
                             
                        <div class="input-field">
                            <label>Sub-district</label>
                            <input type="text" placeholder="Sub-district" name="154subdistict" class="form__153subdistrict" required>
                        </div>
                        
                        <div class="input-field">
                            <label>year</label>
                            <input type="text" placeholder="Year" class="form__154year" name="154year" required>
                        </div>
                        <div class="input-field">
                            <label>Reason</label>
                            <input type="text" placeholder="Reason" class="form__155reason" name="155reason" required>
                           </div>  
                  </div>
                     <h5 style="font-size:10px; color:grey;">Country II </h5>
                
                       <div class="fields">
                         
                         <div class="input-field">
                            <label>Country</label>
                            <input type="text" placeholder="Country" class="form__156country" name="156country" required>
                         </div>
                           
                         <div class="input-field">
                            <label>Province</label>
                            <input type="text" placeholder="Province" class="form__157province" name="157province" required>
                         </div>
                        <div class="input-field">
                            <label>District</label>
                            <input type="text" placeholder="District" class="form__158district" name="158district" required>
                        </div>        
                             
                        <div class="input-field">
                            <label>Sub-district</label>
                            <input type="text" placeholder="Sub-district" name="159subdistict" class="form__159subdistrict" required>
                        </div>
                        
                        <div class="input-field">
                            <label>year</label>
                            <input type="text" placeholder="Year" class="form__160year" name="160year" required>
                        </div>
                        <div class="input-field">
                            <label>Reason</label>
                            <input type="text" placeholder="Reason" class="form__161reason" name="161reason" required>
                           </div>  
                  </div>
                     <h5 style="font-size:10px; color:grey;">Country III </h5>
                
                       <div class="fields">
                         
                         <div class="input-field">
                            <label>Country</label>
                            <input type="text" placeholder="Country" class="form__162country" name="162country" required>
                         </div>
                           
                         <div class="input-field">
                            <label>Province</label>
                            <input type="text" placeholder="Province" class="form__163province" name="163province" required>
                         </div>
                        <div class="input-field">
                            <label>District</label>
                            <input type="text" placeholder="District" class="form__164district" name="164district" required>
                        </div>        
                             
                        <div class="input-field">
                            <label>Sub-district</label>
                            <input type="text" placeholder="Sub-district" name="165subdistict" class="form__165subdistrict" required>
                        </div>
                        
                        <div class="input-field">
                            <label>year</label>
                            <input type="text" placeholder="Year" class="form__166year" name="166year" required>
                        </div>
                        <div class="input-field">
                            <label>Reason</label>
                            <input type="text" placeholder="Reason" class="form__167reason" name="167reason" required>
                           </div>  
                  </div>
                     <h5 style="font-size:10px; color:grey;">Country IV </h5>
                
                       <div class="fields">
                         
                         <div class="input-field">
                            <label>Country</label>
                            <input type="text" placeholder="Country" class="form__168country" name="168country" required>
                         </div>
                           
                         <div class="input-field">
                            <label>Province</label>
                            <input type="text" placeholder="Province" class="form__169province" name="169province" required>
                         </div>
                        <div class="input-field">
                            <label>District</label>
                            <input type="text" placeholder="District" class="form__170district" name="170district" required>
                        </div>        
                             
                        <div class="input-field">
                            <label>Sub-district</label>
                            <input type="text" placeholder="Sub-district" name="171subdistict" class="form__171subdistrict" required>
                        </div>
                        
                        <div class="input-field">
                            <label>year</label>
                            <input type="text" placeholder="Year" class="form__172year" name="172year" required>
                        </div>
                        <div class="input-field">
                            <label>Reason</label>
                            <input type="text" placeholder="Reason" class="form__173reason" name="173reason" required>
                           </div>  
                  </div>
                
                <h5 style="font-size:13px; color:grey;">2.4 Working Experience</h5>
                <h5 style="font-size:10px; color:grey;"> Work I </h5>
                
                       <div class="fields">
                         
                         <div class="input-field">
                            <label>Occupation</label>
                            <input type="text" placeholder="Occupation" class="form__174country" name="174occupation" required>
                         </div>
                           
                         <div class="input-field">
                            <label>Workplace</label>
                            <input type="text" placeholder="Workplace" class="form__175workplace" name="175workplace" required>
                         </div>
                        <div class="input-field">
                            <label>Year</label>
                            <input type="text" placeholder="Year" class="form__176year" name="176year" required>
                        </div>        
                             
                        <div class="input-field">
                            <label>Sub-district</label>
                            <input type="text" placeholder="Sub-district" name="177sub_district" class="form__177sub_district" required>
                        </div>
                        
                        <div class="input-field">
                            <label>District</label>
                            <input type="text" placeholder="District" class="form__178District" name="178District" required>
                        </div>
                        <div class="input-field">
                            <label>Province</label>
                            <input type="text" placeholder="Reason" class="form__179province" name="179province" required>
                        </div>  
                     </div>
                
                     <h5 style="font-size:10px; color:grey;"> Work II </h5>
                
                       <div class="fields">
                         
                         <div class="input-field">
                            <label>Occupation</label>
                            <input type="text" placeholder="Occupation" class="form__180country" name="180occupation" required>
                         </div>
                           
                         <div class="input-field">
                            <label>Workplace</label>
                            <input type="text" placeholder="Workplace" class="form__181workplace" name="181workplace" required>
                         </div>
                        <div class="input-field">
                            <label>Year</label>
                            <input type="text" placeholder="Year" class="form__182year" name="182year" required>
                        </div>        
                             
                        <div class="input-field">
                            <label>Sub-district</label>
                            <input type="text" placeholder="Sub-district" name="183sub_district" class="form__183sub_district" required>
                        </div>
                        
                        <div class="input-field">
                            <label>District</label>
                            <input type="text" placeholder="District" class="form__184District" name="184District" required>
                        </div>
                        <div class="input-field">
                            <label>Province</label>
                            <input type="text" placeholder="Reason" class="form__185province" name="185province" required>
                        </div>  
                     </div>
                    <h5 style="font-size:10px; color:grey;"> Work III </h5>
                
                       <div class="fields">
                         
                         <div class="input-field">
                            <label>Occupation</label>
                            <input type="text" placeholder="Occupation" class="form__186country" name="186occupation" required>
                         </div>
                           
                         <div class="input-field">
                            <label>Workplace</label>
                            <input type="text" placeholder="Workplace" class="form__187workplace" name="187workplace" required>
                         </div>
                        <div class="input-field">
                            <label>Year</label>
                            <input type="text" placeholder="Year" class="form__188year" name="188year" required>
                        </div>        
                             
                        <div class="input-field">
                            <label>Sub-district</label>
                            <input type="text" placeholder="Sub-district" name="189sub_district" class="form__189sub_district" required>
                        </div>
                        
                        <div class="input-field">
                            <label>District</label>
                            <input type="text" placeholder="District" class="form__190District" name="190District" required>
                        </div>
                        <div class="input-field">
                            <label>Province</label>
                            <input type="text" placeholder="Reason" class="form__191province" name="191province" required>
                        </div>  
                     </div>
                <h5 style="font-size:10px; color:grey;"> Work IV </h5>
                
                       <div class="fields">
                         
                         <div class="input-field">
                            <label>Occupation</label>
                            <input type="text" placeholder="Occupation" class="form__192country" name="192occupation" required>
                         </div>
                           
                         <div class="input-field">
                            <label>Workplace</label>
                            <input type="text" placeholder="Workplace" class="form__193workplace" name="193workplace" required>
                         </div>
                        <div class="input-field">
                            <label>Year</label>
                            <input type="text" placeholder="Year" class="form__194year" name="194year" required>
                        </div>        
                             
                        <div class="input-field">
                            <label>Sub-district</label>
                            <input type="text" placeholder="Sub-district" name="195sub_district" class="form__195sub_district" required>
                        </div>
                        
                        <div class="input-field">
                            <label>District</label>
                            <input type="text" placeholder="District" class="form__196District" name="196District" required>
                        </div>
                        <div class="input-field">
                            <label>Province</label>
                            <input type="text" placeholder="Reason" class="form__197province" name="197province" required>
                        </div>  
                     </div>
                <h5 style="font-size:10px; color:grey;"> Work V </h5>
                
                       <div class="fields">
                         
                         <div class="input-field">
                            <label>Occupation</label>
                            <input type="text" placeholder="Occupation" class="form__198country" name="198occupation" required>
                         </div>
                           
                         <div class="input-field">
                            <label>Workplace</label>
                            <input type="text" placeholder="Workplace" class="form__199workplace" name="199workplace" required>
                         </div>
                        <div class="input-field">
                            <label>Year</label>
                            <input type="text" placeholder="Year" class="form__200year" name="200year" required>
                        </div>        
                             
                        <div class="input-field">
                            <label>Sub-district</label>
                            <input type="text" placeholder="Sub-district" name="201sub_district" class="form__201sub_district" required>
                        </div>
                        
                        <div class="input-field">
                            <label>District</label>
                            <input type="text" placeholder="District" class="form__202District" name="202District" required>
                        </div>
                        <div class="input-field">
                            <label>Province</label>
                            <input type="text" placeholder="Reason" class="form__203province" name="203province" required>
                        </div>  
                     </div>
                <br>
                <h5 style="font-size:13px; color:grey;">2.5 Studied places of migration</h5>
                <h5 style="font-size:10px; color:grey;">Education I </h5>
                
                       <div class="fields">
                         
                         <div class="input-field">
                            <label>Name of Education</label>
                            <input type="text" placeholder="Name of Education" class="form__204edu" name="204edu" required>
                         </div>
                           
                         <div class="input-field">
                            <label>Level</label>
                            <input type="text" placeholder="Level" class="form__205level" name="205Level" required>
                         </div>
                        <div class="input-field">
                            <label>Year</label>
                            <input type="text" placeholder="Year" class="form__206year" name="206Year" required>
                        </div>        
                             
                        <div class="input-field">
                            <label>Year of Completion</label>
                            <input type="text" placeholder="Year of Completion" name="207Year_completed" class="form__207year_completed" required>
                        </div>
                        
                        <div class="input-field">
                            <label>Place (Name of School or Learning Center)</label>
                            <input type="text" placeholder="Place" class="form__208place" name="208Place" required>
                        </div>
                            
                  </div>
                <h5 style="font-size:10px; color:grey;">Education II </h5>
                
                       <div class="fields">
                         
                         <div class="input-field">
                            <label>Name of Education</label>
                            <input type="text" placeholder="Name of Education" class="form__209edu" name="209edu" required>
                         </div>
                           
                         <div class="input-field">
                            <label>Level</label>
                            <input type="text" placeholder="Level" class="form__210level" name="210Level" required>
                         </div>
                        <div class="input-field">
                            <label>Year</label>
                            <input type="text" placeholder="Year" class="form__211year" name="211Year" required>
                        </div>        
                             
                        <div class="input-field">
                            <label>Year of Completion</label>
                            <input type="text" placeholder="Year of Completion" name="212Year_completed" class="form__212year_completed" required>
                        </div>
                        
                        <div class="input-field">
                            <label>Place (Name of School or Learning Center)</label>
                            <input type="text" placeholder="Place" class="form__213place" name="213Place" required>
                        </div>
                            
                  </div>
                <h5 style="font-size:10px; color:grey;">Education III </h5>
                
                       <div class="fields">
                         
                         <div class="input-field">
                            <label>Name of Education</label>
                            <input type="text" placeholder="Name of Education" class="form__214edu" name="214edu" required>
                         </div>
                           
                         <div class="input-field">
                            <label>Level</label>
                            <input type="text" placeholder="Level" class="form__215level" name="215Level" required>
                         </div>
                        <div class="input-field">
                            <label>Year</label>
                            <input type="text" placeholder="Year" class="form__216year" name="216Year" required>
                        </div>        
                             
                        <div class="input-field">
                            <label>Year of Completion</label>
                            <input type="text" placeholder="Year of Completion" name="217Year_completed" class="form__217year_completed" required>
                        </div>
                        
                        <div class="input-field">
                            <label>Place (Name of School or Learning Center)</label>
                            <input type="text" placeholder="Place" class="form__218place" name="218Place" required>
                        </div>
                            
                  </div>
                <h5 style="font-size:10px; color:grey;">Education IV </h5>
                
                       <div class="fields">
                         
                         <div class="input-field">
                            <label>Name of Education</label>
                            <input type="text" placeholder="Name of Education" class="form__219edu" name="219edu" required>
                         </div>
                           
                         <div class="input-field">
                            <label>Level</label>
                            <input type="text" placeholder="Level" class="form__220level" name="220Level" required>
                         </div>
                        <div class="input-field">
                            <label>Year</label>
                            <input type="text" placeholder="Year" class="form__221year" name="221Year" required>
                        </div>        
                             
                        <div class="input-field">
                            <label>Year of Completion</label> 
                            <input type="text" placeholder="Year of Completion" name="222Year_completed" class="form__222year_completed" required>
                        </div>
                        
                        <div class="input-field">
                            <label>Place (Name of School or Learning Center)</label>
                            <input type="text" placeholder="Place" class="form__223place" name="223Place" required>
                        </div>
                            
                  </div>
                <h5 style="font-size:10px; color:grey;">Education V </h5>
                
                <div class="fields">
                         
                         <div class="input-field">
                            <label>Name of Education</label>
                            <input type="text" placeholder="Name of Education" class="form__224edu" name="224edu" required>
                         </div>
                           
                         <div class="input-field">
                            <label>Level</label>
                            <input type="text" placeholder="Level" class="form__225level" name="225Level" required>
                         </div>
                        <div class="input-field">
                            <label>Year</label>
                            <input type="text" placeholder="Year" class="form__226year" name="226Year" required>
                        </div>        
                             
                        <div class="input-field">
                            <label>Year of Completion</label>
                            <input type="text" placeholder="Year of Completion" name="227Year_completed" class="form__227year_completed" required>
                        </div>
                        
                        <div class="input-field">
                            <label>Place (Name of School or Learning Center)</label>
                            <input type="text" placeholder="Place" class="form__228place" name="228Place" required>
                        </div>
                            
                  </div>
                <br>
                <h5 style="font-size:13px; color:grey;">2.6 Training Experience</h5>
                <h5 style="font-size:10px; color:grey;">Topic I </h5>
                
                       <div class="fields">
                         
                         <div class="input-field">
                            <label>Topic</label>
                            <input type="text" placeholder="Name of Education" class="form__229edu" name="229edu" required>
                         </div>
                           
                         <div class="input-field">
                            <label>Organizaiton</label>
                            <input type="text" placeholder="Level" class="form__230level" name="230Level" required>
                         </div>
                        <div class="input-field">
                            <label>Place</label>
                            <input type="text" placeholder="Year" class="form__231year" name="231Year" required>
                        </div>        
                             
                        <div class="input-field">
                            <label>Year</label>
                            <input type="text" placeholder="Year of Completion" name="232Year_completed" class="form__232year_completed" required>
                        </div>
                        
                        <div class="input-field">
                            <label>Certificate(if provided)</label>
                            <input type="text" placeholder="Place" class="form__233place" name="233Place" required>
                        </div>
                            
                  </div>
                
                <h5 style="font-size:10px; color:grey;">Topic II </h5>
                
                       <div class="fields">
                         
                         <div class="input-field">
                            <label>Topic</label>
                            <input type="text" placeholder="Name of Education" class="form__234edu" name="234edu" required>
                         </div>
                           
                         <div class="input-field">
                            <label>Organizaiton</label>
                            <input type="text" placeholder="Level" class="form__235level" name="235Level" required>
                         </div>
                        <div class="input-field">
                            <label>Place</label>
                            <input type="text" placeholder="Year" class="form__236year" name="236Year" required>
                        </div>        
                             
                        <div class="input-field">
                            <label>Year</label>
                            <input type="text" placeholder="Year of Completion" name="237Year_completed" class="form__237year_completed" required>
                        </div>
                        
                        <div class="input-field">
                            <label>Certificate(if provided)</label>
                            <input type="text" placeholder="Place" class="form__238place" name="238Place" required>
                        </div>
                            
                  </div>
                <h5 style="font-size:10px; color:grey;">Topic III </h5>
                
                       <div class="fields">
                         
                         <div class="input-field">
                            <label>Topic</label>
                            <input type="text" placeholder="Name of Education" class="form__239edu" name="239edu" required>
                         </div>
                           
                         <div class="input-field">
                            <label>Organizaiton</label>
                            <input type="text" placeholder="Level" class="form__240level" name="240Level" required>
                         </div>
                        <div class="input-field">
                            <label>Place</label>
                            <input type="text" placeholder="Year" class="form__241year" name="241Year" required>
                        </div>        
                             
                        <div class="input-field">
                            <label>Year</label>
                            <input type="text" placeholder="Year of Completion" name="242Year_completed" class="form__242year_completed" required>
                        </div>
                        
                        <div class="input-field">
                            <label>Certificate(if provided)</label>
                            <input type="text" placeholder="Place" class="form__243place" name="243Place" required>
                        </div>
                            
                  </div>
                
                <h5 style="font-size:10px; color:grey;">Topic IV </h5>
                
                       <div class="fields">
                         
                         <div class="input-field">
                            <label>Topic</label>
                            <input type="text" placeholder="Name of Education" class="form__244edu" name="244edu" required>
                         </div>
                           
                         <div class="input-field">
                            <label>Organizaiton</label>
                            <input type="text" placeholder="Level" class="form__245level" name="245Level" required>
                         </div>
                        <div class="input-field">
                            <label>Place</label>
                            <input type="text" placeholder="Year" class="form__245year" name="245Year" required>
                        </div>        
                             
                        <div class="input-field">
                            <label>Year</label>
                            <input type="text" placeholder="Year of Completion" name="246Year_completed" class="form__246year_completed" required>
                        </div>
                        
                        <div class="input-field">
                            <label>Certificate(if provided)</label>
                            <input type="text" placeholder="Place" class="form__247place" name="247Place" required>
                        </div>
                            
                  </div>
                <h5 style="font-size:13px; color:grey;">2.7 Language Skill</h5>
                    <h5 style="font-size:13px; color:grey;">Language I</h5>
                    <div class="fields">
                    
                      <div class="input-field">
                            <label>Language</label>
                            <input type="text" placeholder="Language" class="form__248language" name="248language">
                      </div>
                      <div class="input-field">
                            <label>Listening</label>
                            <select class="form__2" name="102Gender" >
                                <option disabled selected>Select Proficiency</option>
                                <option>Fair</option>
                                <option>Good</option>
                                <option>Very Good</option>
                            </select>
                        </div>
                        <div class="input-field">
                            <label>Speaking</label>
                            <select class="form__102gender" name="102Gender" >
                                <option disabled selected>Select Proficiency</option>
                                <option>Fair</option>
                                <option>Good</option>
                                <option>Very Good</option>
                            </select>
                        </div>
                        <div class="input-field">
                            <label>Reading</label>
                            <select class="form__102gender" name="102Gender" >
                                <option disabled selected>Select Proficiency</option>
                                <option>Fair</option>
                                <option>Good</option>
                                <option>Very Good</option>
                            </select>
                        </div><div class="input-field">
                            <label>Writing</label>
                            <select class="form__102gender" name="102Gender" >
                                <option disabled selected>Select Proficiency</option>
                                <option>Fair</option>
                                <option>Good</option>
                                <option>Very Good</option>
                            </select>
                        </div>
                    </div>

                    <h5 style="font-size:13px; color:grey;">Language II</h5>
                    <div class="fields">
                    
                      <div class="input-field">
                            <label>Language</label>
                            <input type="text" placeholder="Sibling Name" class="form__101sibname" name="94sibName">
                      </div>
                      <div class="input-field">
                            <label>Listening</label>
                            <select class="form__102gender" name="102Gender" >
                                <option disabled selected>Select Proficiency</option>
                                <option>Fair</option>
                                <option>Good</option>
                                <option>Very Good</option>
                            </select>
                        </div>
                        <div class="input-field">
                            <label>Speaking</label>
                            <select class="form__102gender" name="102Gender" >
                                <option disabled selected>Select Proficiency</option>
                                <option>Fair</option>
                                <option>Good</option>
                                <option>Very Good</option>
                            </select>
                        </div>
                        <div class="input-field">
                            <label>Reading</label>
                            <select class="form__102gender" name="102Gender" >
                                <option disabled selected>Select Proficiency</option>
                                <option>Fair</option>
                                <option>Good</option>
                                <option>Very Good</option>
                            </select>
                        </div><div class="input-field">
                            <label>Writing</label>
                            <select class="form__102gender" name="102Gender" >
                                <option disabled selected>Select Proficiency</option>
                                <option>Fair</option>
                                <option>Good</option>
                                <option>Very Good</option>
                            </select>
                        </div>
                    </div>

                    <h5 style="font-size:13px; color:grey;">Language III</h5>
                    <div class="fields">
                    
                      <div class="input-field">
                            <label>Language</label>
                            <input type="text" placeholder="Sibling Name" class="form__101sibname" name="94sibName">
                      </div>
                      <div class="input-field">
                            <label>Listening</label>
                            <select class="form__102gender" name="102Gender" >
                                <option disabled selected>Select Proficiency</option>
                                <option>Fair</option>
                                <option>Good</option>
                                <option>Very Good</option>
                            </select>
                        </div>
                        <div class="input-field">
                            <label>Speaking</label>
                            <select class="form__102gender" name="102Gender" >
                                <option disabled selected>Select Proficiency</option>
                                <option>Fair</option>
                                <option>Good</option>
                                <option>Very Good</option>
                            </select>
                        </div>
                        <div class="input-field">
                            <label>Reading</label>
                            <select class="form__102gender" name="102Gender" >
                                <option disabled selected>Select Proficiency</option>
                                <option>Fair</option>
                                <option>Good</option>
                                <option>Very Good</option>
                            </select>
                        </div><div class="input-field">
                            <label>Writing</label>
                            <select class="form__102gender" name="102Gender" >
                                <option disabled selected>Select Proficiency</option>
                                <option>Fair</option>
                                <option>Good</option>
                                <option>Very Good</option>
                            </select>
                        </div>
                    </div>

                    <h5 style="font-size:13px; color:grey;">Language IV</h5>
                    <div class="fields">
                    
                      <div class="input-field">
                            <label>Language</label>
                            <input type="text" placeholder="Sibling Name" class="form__101sibname" name="94sibName">
                      </div>
                      <div class="input-field">
                            <label>Listening</label>
                            <select class="form__102gender" name="102Gender" >
                                <option disabled selected>Select Proficiency</option>
                                <option>Fair</option>
                                <option>Good</option>
                                <option>Very Good</option>
                            </select>
                        </div>
                        <div class="input-field">
                            <label>Speaking</label>
                            <select class="form__102gender" name="102Gender" >
                                <option disabled selected>Select Proficiency</option>
                                <option>Fair</option>
                                <option>Good</option>
                                <option>Very Good</option>
                            </select>
                        </div>
                        <div class="input-field">
                            <label>Reading</label>
                            <select class="form__102gender" name="102Gender" >
                                <option disabled selected>Select Proficiency</option>
                                <option>Fair</option>
                                <option>Good</option>
                                <option>Very Good</option>
                            </select>
                        </div><div class="input-field">
                            <label>Writing</label>
                            <select class="form__102gender" name="102Gender" >
                                <option disabled selected>Select Proficiency</option>
                                <option>Fair</option>
                                <option>Good</option>
                                <option>Very Good</option>
                            </select>
                        </div>
                    </div>

                    <h5 style="font-size:13px; color:grey;">Language V</h5>
                    <div class="fields">
                    
                      <div class="input-field">
                            <label>Language</label>
                            <input type="text" placeholder="Sibling Name" class="form__101sibname" name="94sibName">
                      </div>
                      <div class="input-field">
                            <label>Listening</label>
                            <select class="form__102gender" name="102Gender" >
                                <option disabled selected>Select Proficiency</option>
                                <option>Fair</option>
                                <option>Good</option>
                                <option>Very Good</option>
                            </select>
                        </div>
                        <div class="input-field">
                            <label>Speaking</label>
                            <select class="form__102gender" name="102Gender" >
                                <option disabled selected>Select Proficiency</option>
                                <option>Fair</option>
                                <option>Good</option>
                                <option>Very Good</option>
                            </select>
                        </div>
                        <div class="input-field">
                            <label>Reading</label>
                            <select class="form__102gender" name="102Gender" >
                                <option disabled selected>Select Proficiency</option>
                                <option>Fair</option>
                                <option>Good</option>
                                <option>Very Good</option>
                            </select>
                        </div><div class="input-field">
                            <label>Writing</label>
                            <select class="form__102gender" name="102Gender" >
                                <option disabled selected>Select Proficiency</option>
                                <option>Fair</option>
                                <option>Good</option>
                                <option>Very Good</option>
                            </select>
                        </div>
                    </div>
                    <br>
                    <h5 style="font-size:13px; color:grey;">Health Issue</h5>
    
                    <div class="fields">
                    
                      <div class="input-field">
                            <label>Height</label>
                            <input type="text" placeholder="Sibling Name" class="form__101sibname" name="94sibName">
                      </div>
                      <div class="input-field">
                            <label>Weight</label>
                            <input type="text" placeholder="Sibling Name" class="form__101sibname" name="94sibName">
                      </div>
                        <div class="input-field">
                            <label>Congenital/ Chronic disease </label>
                            <input type="text" placeholder="Sibling Name" class="form__101sibname" name="94sibName">
                      </div>
                        <div class="input-field">
                            <label>Drug Allergy </label>
                            <input type="text" placeholder="Sibling Name" class="form__101sibname" name="94sibName">
                      </div>
                      <div class="input-field">
                            <label>Food Allergy</label>
                            <input type="text" placeholder="Sibling Name" class="form__101sibname" name="94sibName">
                      </div>
                    </div>

                    <br>
                <div class="details personal"> 
                    <h3 style="font-size:13px; color:grey;">Information of Dropped Out</h5>
                    <h5 style="font-size:13px; color:grey;">3.1 basic information about dropped out from school</h5>
                    <div class="fields">
                    
                      <div class="input-field">
                            <label>1.ระดับการเรียนล่าสุด/ The last education level student studied</label>
                            <input type="text" placeholder="Sibling Name" class="form__101sibname" name="94sibName">
                      </div>
                      <div class="input-field">
                            <label>2.ปีสุดท้ายที่เข้าเรียน/ The year of last schooling</label>
                            <input type="text" placeholder="Sibling Name" class="form__101sibname" name="94sibName">
                      </div>
                        <div class="input-field">
                            <label>3.สถานศึกษาสุดท้ายที่เข้า/ The last school which student studied</label>
                            <input type="text" placeholder="Sibling Name" class="form__101sibname" name="94sibName">
                      </div>
                        
                    </div> 
                    <h5 style="font-size:13px; color:grey;">3.2 สาเหตุที่ออกจากระบบการศึกษา(โปรดกรอกข้อมูลลงในช่องว่างหรือทำเครื่องหมาย  ลงในช่อง) </h5>
                    <div class="fields">
                    
                      <div class="input-field">
                            <label>1.ระดับการเรียนล่าสุด/ The last education level student studied</label>
                            <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                            <label for="vehicle1"> ทำงาน</label><br>
                            <input type="checkbox" id="vehicle2" name="vehicle2" value="Car">
                            <label for="vehicle2"> แต่งงาน</label><br>
                            <input type="checkbox" id="vehicle3" name="vehicle3" value="Boat">
                            <label for="vehicle3"> เศรษฐกิจ สถานะทางการเงิน</label><br>
                            <input type="checkbox" id="vehicle3" name="vehicle3" value="Boat">
                            <label for="vehicle3"> วัฒนธรรม </label><br>
                            <input type="checkbox" id="vehicle3" name="vehicle3" value="Boat">
                            <label for="vehicle3"> การยอมรับ (ใบรับรองการศึกษา) </label><br>
                            <input type="checkbox" id="vehicle3" name="vehicle3" value="Boat">
                            <label for="vehicle3"> การเดินทาง  </label><br>
                            <input type="checkbox" id="vehicle3" name="vehicle3" value="Boat">
                            <label for="vehicle3"> สุขภาพ </label><br>
                            <input type="checkbox" id="vehicle3" name="vehicle3" value="Boat">
                            <label for="vehicle3"> อื่น ๆ โปรดระบุ </label><br>
                      </div>
 
                    </div>
                    <h5 style="font-size:13px; color:grey;">3.3 หากนักเรียนกำลังทำงานอยู่หลังจากที่หลุดออกจากระบบศึกษาโปรดระบุข้อมูลดังต่อไปนี้ /If student is working after dropping out from school, please provide following information. </h5>
                    <div class="fields">
                    
                      <div class="input-field">
                            <label>1.ประเภทงานที่ทำ / Type of work </label>
                            <input type="text" placeholder="Sibling Name" class="form__101sibname" name="94sibName">
                      </div>
                      <div class="input-field">
                            <label>2.ตำแหน่งงานที่ทำ / Job position </label>
                            <input type="text" placeholder="Sibling Name" class="form__101sibname" name="94sibName">
                      </div>
                      <div class="input-field">
                            <label>3.ชั่วโมงการทำงานต่ออาทิตย์/ Total working hours per week </label>
                            <input type="text" placeholder="Sibling Name" class="form__101sibname" name="94sibName">
                      </div>
                      <div class="input-field">
                            <label>4.ภาษาที่ใช้ในสถานที่ทำงาน / Language used at work </label>
                            <input type="text" placeholder="Sibling Name" class="form__101sibname" name="94sibName">
                      </div>
                      <div class="input-field">
                            <label>5.สถานที่ทำงาน / Place of work </label>
                            <input type="text" placeholder="Sibling Name" class="form__101sibname" name="94sibName">
                      </div>
                      <div class="input-field">
                            <label>6.รายได้ต่อเดือน / Monthly income </label>
                            <input type="text" placeholder="Sibling Name" class="form__101sibname" name="94sibName">
                      </div>
                      
                        
                    </div> 
                    <h5 style="font-size:13px; color:grey;">3.4 หากนักเรียนออกจากสถานศึกษาเพราะเหตุผลของการแต่งงาน โปรดระบุข้อมูลดังต่อไปนี้/ If student dropped out for the marriage, please provide the following information. </h5>
                    <div class="fields">
                    
                      <div class="input-field">
                            <label>1.อายุของนักเรียนขณะที่แต่งงาน /The age of student upon marriage:</label>
                            <input type="text" placeholder="Sibling Name" class="form__101sibname" name="94sibName">
                      </div>
                      <div class="input-field">
                            <label>2.ตำแหน่งงานที่ทำ / Job position </label>
                            <input type="text" placeholder="Sibling Name" class="form__101sibname" name="94sibName">
                      </div>
                      <div class="input-field">
                            <label>3.ชั่วโมงการทำงานต่ออาทิตย์/ Total working hours per week </label>
                            <input type="text" placeholder="Sibling Name" class="form__101sibname" name="94sibName">
                      </div>
                      <div class="input-field">
                            <label>4.ภาษาที่ใช้ในสถานที่ทำงาน / Language used at work </label>
                            <input type="text" placeholder="Sibling Name" class="form__101sibname" name="94sibName">
                      </div>
                      <div class="input-field">
                            <label>5.สถานที่ทำงาน / Place of work </label>
                            <input type="text" placeholder="Sibling Name" class="form__101sibname" name="94sibName">
                      </div>
                      <div class="input-field">
                            <label>6.รายได้ต่อเดือน / Monthly income </label>
                            <input type="text" placeholder="Sibling Name" class="form__101sibname" name="94sibName">
                      </div>
                      
                        
                    </div> 
                
                <!-- ==================================================================================== -->
                <!------------------------------ End of Info in Thailand--------------------------------->
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
