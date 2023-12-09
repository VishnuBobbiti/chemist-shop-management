<html>
	<title>Chemist Shop Management</title>
<?php
// Start the session
session_start();
?>
	<head>
		<style>
			 
			#title{
				background-color:#333333;
				font-size:33px;
				
				
				color:white;
				margin-left:20px;
				margin-top:20px;
				margin-bottom:20px;
				
				}
				
			ul {
			list-style-type: none;
			margin: 0;
			padding: 0;
			overflow: hidden;
			background-color: #333333;
			}
			
			li {
				float: right;
			}
			
			#titlehead{
				float: left;
			}

			li a {
				display: block;
				color: white;
				font-size:20px;
				text-align: center;
				padding: 16px 20px;
				margin-top:10px;
				text-decoration: none;
			}

			li a:hover:not(.active) {
				background-color:#778899;
			}

			.active {
				background-color:#778899;
			}
			
			#home_img{
				padding-left:50px;
				padding-bottom:10px;
				
			}
			
			#bottom_posts{
				
				display: grid;
				grid-template-columns: auto auto auto;
				padding: 10px;
			
			}
			
			#img_title{
				
				display: grid;
				grid-template-columns: auto auto auto;
				padding: 5px;
			
			}
			
			#posts{
				padding: 20px;
				font-size: 30px;
				text-align: center;
			
			}
			
		</style>
	</head>
	
	<body style="background-color:#BAEEEE;">
		
		
		
		<ul>
			<li id="titlehead"><p id="title">IIITDMJ CHEMIST SHOP</p></li>
			<li style=margin-right:10px;><a href="admin_login.php">Admin</a></li>
			<li><a href="user_login.php">User</a></li>
			<li><a class="active" href="home.php">Home</a></li>
			<li><a href="aboutus_page.php">AboutUs</a></li>
		</ul>
		
		<div id=bottom_posts>
		
			<div id=posts>
				<h2 style="font-size:28px;"> Employee Info </h2>
				<div id=img_title>
					<img src="image\viewemployee.jpg"height=70 width=70>
					<p style="font-size:20px;"> Easy access the details of Employees</p>
				
				</div>
			
			</div>
			
			<div id=posts>
				<h2 style="font-size:28px;"> Medicine Details</h2>
				<div id=img_title>
					<img src="image\med.jpg" height=72 width=128>
					<p style="font-size:20px;">Medicines can be added and updated easily</p>
				
				</div>
			</div>
			
			<div id=posts>
				<h2 style="font-size:28px;"> Easy Access for Users </h2>
				<div id=img_title>
					<img src="image\searchimg.png">
					<p style="font-size:20px;">Any medicines can be accessed in few seconds</p>
				
				</div>
			</div>
		
		</div>
		
		
		
		
		<?php
		
		$servername = "localhost";
		$username = "root";
		$password = "";

		// Create connection
		$conn = new mysqli($servername, $username, $password);
		// Check connection
		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		} 

		// Create database
		$sql = "CREATE DATABASE IF NOT EXISTS pharmacydb";
		if ($conn->query($sql) === TRUE) {
			//echo "Database created successfully";
			
		
		
		$conn->close();
		}
		?>
		
	</body>
	
</html>