<?php

session_start();
session_regenerate_id();
if(!isset($_SESSION['user']))      // if there is no valid session
{
    header("Location: login.html");
	die();
}

header("Location: home.php");
die();

?>