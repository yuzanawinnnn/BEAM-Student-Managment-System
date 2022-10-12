<?php
session_start(); // can manage session data

include("../vendor/autoload.php");
use Libs\Database\MySQL;
use Libs\Database\UsersTable;
use Helpers\HTTP;

$email = $_POST['email']; // receive the $_superglobal's email and pwd data sent from index.php
$password = md5( $_POST['password'] );

$table = new UsersTable(new MySQL());
$user = $table->findByEmailAndPasword($email, $password);


if ($user) {//if $user is not false, do the following....
 if($table->suspended ==='1') {
//if suspended, redirect to index.php with URL query suspended=1
 HTTP::redirect("/index.php", "suspended=1");
 }
 //if email and pwd correct, keep the user session data and redirect to profile.php
 $_SESSION['user'] = $user;
 HTTP::redirect("/home.php");
} else { 
 //if incorrect, redirect to index.php with URL query incorrect=1
 HTTP::redirect("/index.php", "incorrect=1");
}

// take note the usage of '../' cuz current file is under '_actions' folder