<?php

$host = "mysqlflix.mysql.database.azure.com";
$username = 'nani';
$password = ',r"_5?r)y#Xcpd]p';
$db_name = "apple";

//Initializes MySQLi
$conn = mysqli_init();

mysqli_ssl_set($conn,NULL,NULL, "DigiCertGlobalRootCA.crt.pem", NULL, NULL);

// Establish the connection
mysqli_real_connect($conn, $host, $username, $password, $db_name, 3306, NULL, MYSQLI_CLIENT_SSL);

//If connection failed, show the error
if (mysqli_connect_errno())
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // collect value of input field
	$email = $_REQUEST['email'];
	$password = $_REQUEST['password'];

    if (empty($email) && empty($password) ) {
        echo "data is empty";
    } else {
		/* create a prepared statement */
		$stmt = $conn->prepare("SELECT * FROM users WHERE email=? AND password=?");

		/* bind parameters for markers */
		$stmt->bind_param("ss", $email, $password);

		/* execute query */
		$stmt->execute();
		
		$result = $stmt->get_result(); // get the mysqli result
		
		// If user exists
		if ($row = $result->fetch_assoc())
		{
			// Start the session
			session_start();
			$_SESSION['user'] = $email;
			header('Location: '. 'home.php');
			die();
		}
		else 
		{
			// back to login
			header( "Location: login.html" );
			die();
		}
	}
	
}

// Closing the connection.
$conn->close();

?>