<?php
include("../vendor/autoload.php");
use Libs\Database\MySQL;
use Libs\Database\UsersTable;
use Helpers\HTTP;

//data array to accept the input data
$data = [
 "name" => $_POST['name'] ?? 'Unknown',
 "email" => $_POST['email'] ?? 'Unknown',
 "phone" => $_POST['phone'] ?? 'Unknown',
 "address" => $_POST['address'] ?? 'Unknown',
 "password" => md5( $_POST['password'] ),
 "role_id" => 1,
];

//Create an Object of UsersTable using MySQL()
$table = new UsersTable(new MySQL());

if( $table ) {
 //if $table is not null, insert data into the DB table and redirect to index.php with URL Query "registered=true"
 $table->insert($data);
 HTTP::redirect("/collectors.php", "registered=true");
} else { //if not, redirect to register.php with URL Query "error=true"
 HTTP::redirect("/register.php", "error=true");
}