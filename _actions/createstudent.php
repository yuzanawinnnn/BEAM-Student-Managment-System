<?php
include("../vendor/autoload.php");
use Libs\Database\MySQL;
use Libs\Database\StudentsTable;
use Helpers\HTTP;

$data = [
 "Name" => $_POST['Name'] ?? 'Unknown',
 "Tid" => $_POST['Tid'] ?? 'Unknown',
 "DOB" => $_POST['DOB'] ?? 'Unknown',
 "Age" => $_POST['Age'] ?? 'Unknown',
 "Gender" => $_POST['Gender'] ?? 'Unknown',
 "Religion" => $_POST['Religion'] ?? 'Unknown',
 "Nationality" => $_POST['Nationality'] ?? 'Unknown',
 "Ethnicity" => $_POST['Ethnicity']?? 'Unknown',
"Occupation" => $_POST['Occupation'] ?? 'Unknown',
"Loc_Thai" => $_POST['Loc_Thai']?? 'Unknown',
    
   
    
 
];

$table = new StudentsTable(new MySQL());

if( $table ) {
 //if successfully registered/ $table is not null, insert data into the DB table and redirect to index.php with URL Query "registered=true"
 $table->insert($data);
 HTTP::redirect("/students.php", "registered=true");
} else { //if not, redirect to register.php with URL Query "error=true"
 HTTP::redirect("/addstudents.php", "error=true");
}