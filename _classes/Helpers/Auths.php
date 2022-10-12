<?php
namespace Helpers;
class Auths
{
static $loginUrl = '/index.php';

//check if the user's logged in 
static function check()
 {
 session_start();
 if(isset($_SESSION['student'])) {
 return $_SESSION['student'];
 } 
//if not logged in, redirect to index.php
 else {
 HTTP::redirect(static::$loginUrl);
 }
 }

}