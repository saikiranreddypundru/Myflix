<?php
	session_start();
	session_regenerate_id();
	if(!isset($_SESSION['user']))      // if there is no valid session
	{
		header('HTTP/1.1 500 Internal Server Booboo');
        header('Content-Type: application/json; charset=UTF-8');
		die(json_encode(array('message' => 'ERROR', 'code' => 1337)));
	}

	$server = "serverip/serveraddress";
	
	# query API to get top 10 movies from given genre
	$url = "";
	if (isset($_GET["genre"]))
	{
		$url = $server . 'top?genre=' . $_GET["genre"];
	}
	else
	{
		$url = $server . 'top';	
	}
	$json = file_get_contents($url); // put the contents of the file into a variable
	$movies = json_decode($json); // decode the JSON feed
		
	$results = array();

	// test movies list
	//$movies = array(211672, 157336, 293660, 118340, 76341, 135397, 22, 131631, 177572,87101);
	
	// loop through results and populate a JSON with title and image location
	foreach ($movies as $m_id) {
		# get image path
		$url = 'https://api.themoviedb.org/3/movie/' . strval($m_id) . '/images?api_key=*api_key*';
		$json = file_get_contents($url); // put the contents of the file into a variable
		$data = json_decode($json); // decode the JSON feed
		$img_path = "https://image.tmdb.org/t/p/w200/" . $data->backdrops[0]->file_path;
		
		# get movie title
		$url = 'https://api.themoviedb.org/3/movie/' . strval($m_id) . '?api_key=*api_key*';
		$json = file_get_contents($url); // put the contents of the file into a variable
		$data = json_decode($json); // decode the JSON feed

		array_push($results, array("title" => $data->title, "img" => $img_path));
	}
	
	print json_encode($results);
	die();
?>
