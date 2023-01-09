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
    $first_name = $_REQUEST['first_name'];
	$last_name = $_REQUEST['last_name'];
	$email = $_REQUEST['email'];
	$password = $_REQUEST['password'];

    if (empty($first_name) && empty($last_name) && empty($email) && empty($password) ) 
	{
        echo "You did not fill in the registration form correctly. Please try again.";
    } 
	else 
	{
		/* create a prepared statement */
		$stmt = $conn->prepare("INSERT INTO users(firstname, lastname, email, password) VALUES(?,?,?,?)");

		/* bind parameters for markers */
		$stmt->bind_param("ssss", $first_name, $last_name, $email, $password);

		/* execute query */
		$stmt->execute();
		
		header("Location: login.html");
		die();
	}
}
else
{
	echo "You did not fill in the registration form correctly. Please try again.";
}

// Closing the connection.
$conn->close();

?>