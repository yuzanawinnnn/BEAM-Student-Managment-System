<?php
session_start();
unset( $_SESSION['user'] ); // remove the session data and redirect to index.php
header('location: ../index.php');

?>