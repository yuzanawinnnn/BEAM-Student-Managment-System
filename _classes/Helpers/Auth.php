<?php
namespace Helpers;
class Auth
{
static $loginUrl = '/index.php';

//check if the user's logged in 
static function check()
 {
 session_start();
 if(isset($_SESSION['user'])) {
 return $_SESSION['user'];
 } 
//if not logged in, redirect to index.php
 else {
 HTTP::redirect(static::$loginUrl);
 }
 }

}