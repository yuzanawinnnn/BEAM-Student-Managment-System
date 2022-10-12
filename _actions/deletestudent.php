<?php
include("../vendor/autoload.php");
use Libs\Database\MySQL;
use Libs\Database\StudentsTable;
use Helpers\HTTP;
use Helpers\Auth;
$auth = Auth::check();
$table = new StudentsTable(new MySQL());
$ID = $_GET['ID'];
$table->stu_delete($ID);
HTTP::redirect("/students.php");