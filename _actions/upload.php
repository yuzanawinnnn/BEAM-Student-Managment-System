<?php
include("../vendor/autoload.php");
use Libs\Database\MySQL;
use Libs\Database\UsersTable;
use Helpers\HTTP;
use Helpers\Auth;

$auth = Auth::check();
$table = new UsersTable(new MySQL());
$name = $_FILES['photo']['name'];
$error = $_FILES['photo']['error'];
$tmp = $_FILES['photo']['tmp_name'];
$type = $_FILES['photo']['type'];

//if there is error, redirect to profile.php with URL Query with error=file
if($error) {
 HTTP::redirect("/profile.php", "error=file");
}

// check if the type is jpeg or png, if yes, save the photo to photo folder and redirect to profile.php
if($type === "image/jpeg" or $type === "image/png") {
 $table->updatePhoto($auth->id, $name);
 move_uploaded_file($tmp, "photos/$name");
 $auth->photo = $name;
 HTTP::redirect("/profile.php");
} //if not image type, redirect to profile.php
else {
 HTTP::redirect("/profile.php", "error=type");
}