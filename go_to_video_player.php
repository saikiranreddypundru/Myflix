<?php
	session_start();
	session_regenerate_id();
	if(!isset($_SESSION['user']))      // if there is no valid session
	{
		header("Location: login.html");
		die();
	}

	echo file_get_contents("play_video.html");
	die();
?>