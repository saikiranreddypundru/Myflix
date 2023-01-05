<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	
	<style>
		body {
			background: black;
			color: white;
		}
		
		.card {
			min-width: 150px;
			position: relative;
			transition: 0.2s linear;
			margin: 1em;
		}
		
		.card:hover {
			transform: scale(1.2);
			z-index: 10;
		}
		
		.card-body {
			color: black;
			padding: 0.1em;
		}
		
		.carousel-item {
			padding-left: 80px; 
			padding-right: 80px; 
		}
		
		.carousel-control-prev, .carousel-control-next {
			width: 5%;
			max-width: 60px;
			display: inline-block;
		}
		
		@media all and (max-width: 800px) {
			.carousel-control-prev, .carousel-control-next {
				position: relative;
			}
		}
	</style>
	
	
    <title>MyFlix</title>
  </head>
  <body>
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


//Run the Select query
printf("Reading data from table: \n");
$res = mysqli_query($conn, 'SELECT * FROM bananas');
while ($row = mysqli_fetch_assoc($res))
 {
    var_dump($row);
 }
?>
    <h1>MyFlix</h1>

	<!-- trending slider -->
	<div class="slider-box">
		<section class="container-fluid slider">
			<div>
				<p style="margin: 0;"><b>Trending</b></p>
			</div>
			
			<div id="carouselExampleIndicators1" class="carousel slide" data-bs-ride="carousel" data-bs-interval="false">  
			  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators1" data-bs-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Previous</span>
			  </button>
			  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators1" data-bs-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Next</span>
			  </button>
			
			  <div class="carousel-inner" style="position: relative; overflow: visible;">
				
				<div class="carousel-item active">
					<section style="display: flex;">
						<div class="card">
						  <img src="./thumbnails/img1.jpeg" class="card-img-top" alt="...">
						  <div class="card-body">

							<a href="#" class="btn btn-primary">Go somewhere</a>
							<p>Horror, Drama</p>
						  </div>
						</div>
						<div class="card">
						  <img src="./thumbnails/img1.jpeg" class="card-img-top" alt="...">
						  <div class="card-body">

							<a href="#" class="btn btn-primary">Go somewhere</a>
							<p>Horror, Drama</p>
						  </div>
						</div>
						<div class="card">
						  <img src="./thumbnails/img1.jpeg" class="card-img-top" alt="...">
						  <div class="card-body">

							<a href="#" class="btn btn-primary">Go somewhere</a>
							<p>Horror, Drama</p>
						  </div>
						</div>
						<div class="card">
						  <img src="./thumbnails/img1.jpeg" class="card-img-top" alt="...">
						  <div class="card-body">

							<a href="#" class="btn btn-primary">Go somewhere</a>
							<p>Horror, Drama</p>
						  </div>
						</div>
					</section>
				</div>

				<div class="carousel-item">
					<section style="display: flex;">
						<div class="card">
						  <img src="./thumbnails/img1.jpeg" class="card-img-top" alt="...">
						  <div class="card-body">

							<a href="#" class="btn btn-primary">Go somewhere</a>
							<p>Horror, Drama</p>
						  </div>
						</div>
						<div class="card">
						  <img src="./thumbnails/img1.jpeg" class="card-img-top" alt="...">
						  <div class="card-body">

							<a href="#" class="btn btn-primary">Go somewhere</a>
							<p>Horror, Drama</p>
						  </div>
						</div>
						<div class="card">
						  <img src="./thumbnails/img1.jpeg" class="card-img-top" alt="...">
						  <div class="card-body">

							<a href="#" class="btn btn-primary">Go somewhere</a>
							<p>Horror, Drama</p>
						  </div>
						</div>
						<div class="card">
						  <img src="./thumbnails/img1.jpeg" class="card-img-top" alt="...">
						  <div class="card-body">

							<a href="#" class="btn btn-primary">Go somewhere</a>
							<p>Horror, Drama</p>
						  </div>
						</div>
					</section>
				</div>
				<div class="carousel-item">
					<section style="display: flex;">
						<div class="card">
						  <img src="./thumbnails/img1.jpeg" class="card-img-top" alt="...">
						  <div class="card-body">

							<a href="#" class="btn btn-primary">Go somewhere</a>
							<p>Horror, Drama</p>
						  </div>
						</div>
						<div class="card">
						  <img src="./thumbnails/img1.jpeg" class="card-img-top" alt="...">
						  <div class="card-body">

							<a href="#" class="btn btn-primary">Go somewhere</a>
							<p>Horror, Drama</p>
						  </div>
						</div>
						<div class="card">
						  <img src="./thumbnails/img1.jpeg" class="card-img-top" alt="...">
						  <div class="card-body">

							<a href="#" class="btn btn-primary">Go somewhere</a>
							<p>Horror, Drama</p>
						  </div>
						</div>
						<div class="card">
						  <img src="./thumbnails/img1.jpeg" class="card-img-top" alt="...">
						  <div class="card-body">

							<a href="#" class="btn btn-primary">Go somewhere</a>
							<p>Horror, Drama</p>
						  </div>
						</div>
					</section>
				</div>
			  </div>
			</div>
		</section>
	</div>


	<!-- genre slider -->
	<div class="slider-box">
		<section class="container-fluid slider">
			<div>
				<p style="margin: 0;"><b>Drama</b></p>
			</div>
			
			<div id="carouselExampleIndicators2" class="carousel slide" data-bs-ride="carousel"data-bs-interval="false">  			  
			  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators2" data-bs-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Previous</span>
			  </button>
			  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators2" data-bs-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Next</span>
			  </button>
			  
			  <div class="carousel-inner" style="position: relative; overflow: visible;">
				
				<div class="carousel-item active">
					<section style="display: flex;">
						<div class="card">
						  <img src="./thumbnails/img1.jpeg" class="card-img-top" alt="...">
						  <div class="card-body">

							<a href="#" class="btn btn-primary">Go somewhere</a>
							<p>Horror, Drama</p>
						  </div>
						</div>
						<div class="card">
						  <img src="./thumbnails/img1.jpeg" class="card-img-top" alt="...">
						  <div class="card-body">

							<a href="#" class="btn btn-primary">Go somewhere</a>
							<p>Horror, Drama</p>
						  </div>
						</div>
						<div class="card">
						  <img src="./thumbnails/img1.jpeg" class="card-img-top" alt="...">
						  <div class="card-body">

							<a href="#" class="btn btn-primary">Go somewhere</a>
							<p>Horror, Drama</p>
						  </div>
						</div>
						<div class="card">
						  <img src="./thumbnails/img1.jpeg" class="card-img-top" alt="...">
						  <div class="card-body">

							<a href="#" class="btn btn-primary">Go somewhere</a>
							<p>Horror, Drama</p>
						  </div>
						</div>
					</section>
				</div>

				<div class="carousel-item">
					<section style="display: flex;">
						<div class="card">
						  <img src="./thumbnails/img1.jpeg" class="card-img-top" alt="...">
						  <div class="card-body">

							<a href="#" class="btn btn-primary">Go somewhere</a>
							<p>Horror, Drama</p>
						  </div>
						</div>
						<div class="card">
						  <img src="./thumbnails/img1.jpeg" class="card-img-top" alt="...">
						  <div class="card-body">

							<a href="#" class="btn btn-primary">Go somewhere</a>
							<p>Horror, Drama</p>
						  </div>
						</div>
						<div class="card">
						  <img src="./thumbnails/img1.jpeg" class="card-img-top" alt="...">
						  <div class="card-body">

							<a href="#" class="btn btn-primary">Go somewhere</a>
							<p>Horror, Drama</p>
						  </div>
						</div>
						<div class="card">
						  <img src="./thumbnails/img1.jpeg" class="card-img-top" alt="...">
						  <div class="card-body">

							<a href="#" class="btn btn-primary">Go somewhere</a>
							<p>Horror, Drama</p>
						  </div>
						</div>
					</section>
				</div>
				<div class="carousel-item">
					<section style="display: flex;">
						<div class="card">
						  <img src="./thumbnails/img1.jpeg" class="card-img-top" alt="...">
						  <div class="card-body">

							<a href="#" class="btn btn-primary">Go somewhere</a>
							<p>Horror, Drama</p>
						  </div>
						</div>
						<div class="card">
						  <img src="./thumbnails/img1.jpeg" class="card-img-top" alt="...">
						  <div class="card-body">

							<a href="#" class="btn btn-primary">Go somewhere</a>
							<p>Horror, Drama</p>
						  </div>
						</div>
						<div class="card">
						  <img src="./thumbnails/img1.jpeg" class="card-img-top" alt="...">
						  <div class="card-body">

							<a href="#" class="btn btn-primary">Go somewhere</a>
							<p>Horror, Drama</p>
						  </div>
						</div>
						<div class="card">
						  <img src="./thumbnails/img1.jpeg" class="card-img-top" alt="...">
						  <div class="card-body">

							<a href="#" class="btn btn-primary">Go somewhere</a>
							<p>Horror, Drama</p>
						  </div>
						</div>
					</section>
				</div>
			  </div>
			</div>
		</section>
	</div>


	<!-- genre 2 slider -->
	<div class="slider-box">
		<section class="container-fluid slider">
			<div>
				<p style="margin: 0;"><b>Horror</b></p>
			</div>
			
			<div id="carouselExampleIndicators3" class="carousel slide" data-bs-ride="carousel" data-bs-interval="false">  			  
			  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators3" data-bs-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Previous</span>
			  </button>
			  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators3" data-bs-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Next</span>
			  </button>

			  <div class="carousel-inner" style="position: relative; overflow: visible;">
				
				<div class="carousel-item active">
					<section style="display: flex;">
						<div class="card">
						  <img src="./thumbnails/img1.jpeg" class="card-img-top" alt="...">
						  <div class="card-body">

							<a href="#" class="btn btn-primary">Go somewhere</a>
							<p>Horror, Drama</p>
						  </div>
						</div>
						<div class="card">
						  <img src="./thumbnails/img1.jpeg" class="card-img-top" alt="...">
						  <div class="card-body">

							<a href="#" class="btn btn-primary">Go somewhere</a>
							<p>Horror, Drama</p>
						  </div>
						</div>
						<div class="card">
						  <img src="./thumbnails/img1.jpeg" class="card-img-top" alt="...">
						  <div class="card-body">

							<a href="#" class="btn btn-primary">Go somewhere</a>
							<p>Horror, Drama</p>
						  </div>
						</div>
						<div class="card">
						  <img src="./thumbnails/img1.jpeg" class="card-img-top" alt="...">
						  <div class="card-body">

							<a href="#" class="btn btn-primary">Go somewhere</a>
							<p>Horror, Drama</p>
						  </div>
						</div>
					</section>
				</div>

				<div class="carousel-item">
					<section style="display: flex;">
						<div class="card">
						  <img src="./thumbnails/img1.jpeg" class="card-img-top" alt="...">
						  <div class="card-body">

							<a href="#" class="btn btn-primary">Go somewhere</a>
							<p>Horror, Drama</p>
						  </div>
						</div>
						<div class="card">
						  <img src="./thumbnails/img1.jpeg" class="card-img-top" alt="...">
						  <div class="card-body">

							<a href="#" class="btn btn-primary">Go somewhere</a>
							<p>Horror, Drama</p>
						  </div>
						</div>
						<div class="card">
						  <img src="./thumbnails/img1.jpeg" class="card-img-top" alt="...">
						  <div class="card-body">

							<a href="#" class="btn btn-primary">Go somewhere</a>
							<p>Horror, Drama</p>
						  </div>
						</div>
						<div class="card">
						  <img src="./thumbnails/img1.jpeg" class="card-img-top" alt="...">
						  <div class="card-body">

							<a href="#" class="btn btn-primary">Go somewhere</a>
							<p>Horror, Drama</p>
						  </div>
						</div>
					</section>
				</div>
				<div class="carousel-item">
					<section style="display: flex;">
						<div class="card">
						  <img src="./thumbnails/img1.jpeg" class="card-img-top" alt="...">
						  <div class="card-body">

							<a href="#" class="btn btn-primary">Go somewhere</a>
							<p>Horror, Drama</p>
						  </div>
						</div>
						<div class="card">
						  <img src="./thumbnails/img1.jpeg" class="card-img-top" alt="...">
						  <div class="card-body">

							<a href="#" class="btn btn-primary">Go somewhere</a>
							<p>Horror, Drama</p>
						  </div>
						</div>
						<div class="card">
						  <img src="./thumbnails/img1.jpeg" class="card-img-top" alt="...">
						  <div class="card-body">

							<a href="#" class="btn btn-primary">Go somewhere</a>
							<p>Horror, Drama</p>
						  </div>
						</div>
						<div class="card">
						  <img src="./thumbnails/img1.jpeg" class="card-img-top" alt="...">
						  <div class="card-body">

							<a href="#" class="btn btn-primary">Go somewhere</a>
							<p>Horror, Drama</p>
						  </div>
						</div>
					</section>
				</div>
			  </div>
			</div>
		</section>
	</div>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
	
	<script>
	/*
	$.get( "test.php", function( data ) {
	  $( "body" )
		.append( "Name: " + data.name ) // John
		.append( "Time: " + data.time ); //  2pm
	}, "json" );
	*/
	$(".btn-primary").click(function() {
		console.log("hi");
		window.open("other.html", "_self");
	});
	
	</script>
  </body>
</html>