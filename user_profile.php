<?php
session_start();
?>
<!DOCTYPE html>
<html>
<title>Chemist Shop Management</title>
<head>
	<style>
					
body {
	background-color:#BAEEEE;
}
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
				color:#BAEEEE;
				font-size:20px;
				text-align: center;
				padding: 16px 20px;
				margin-top:10px;
				text-decoration: none;
			}

			li a:hover:not(.active) {
				background-color: #778899;
			}

			.active {
				background-color: #778899;
			}
			
			.grid-container {
				display: grid;
				grid-template-columns: auto auto;
				grid-gap: 20px;
				padding: 10px;
			}
			
			.btn{
				background-color:#BAEEEE;
				border: none;
				color: #333333;
				padding-top:7px;
				text-align: center;
				margin-bottom:0px;
				font-size: 20px;
			}
			
			.btn:hover{
				box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);
			}
	
	
			

		
		.container {
			width:34%; 
			height:170px;
			box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);
			margin-left:37%;
			margin-top:5%;
			margin-right:5%;
			border-radius: 0px;			
			padding: 0px;
			background-color:#BAEEEE;
			}
			
			
			

button {	margin-left:25%;
			margin-top:10%;
			background-color:#BAEEEE;
			font-size:24pt;
			border-margin:0;
			width:100%;
		}

	</style>
</head>

<body>
	<?php
		
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname ="chemistshopdb";

		// Create connection
		$conn = new mysqli($servername, $username, $password, $dbname);
		// Check connection
		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		} 
		
		$userid = $_SESSION["userid"];
		
		$sql = "SELECT * FROM user_database WHERE user_id='$userid'";
		$result = $conn->query($sql);

		if ($result->num_rows > 0) {
			 while($row = $result->fetch_assoc()) {
        $a= $row["user_id"];$b=$row["user_name"];$d= $row["user_email"];$c= $row["user_phone"];
		}
		}
		
		 else {
			echo "8005";
		}
		
		?>
		<ul>
			<li id="titlehead"><p id="title">IIITDMJ CHEMIST SHOP</p></li>
			<li style=margin-right:10px;><a href="home.php">Logout</a></li>
			
			</ul>
			
			<h2 style=" font-size:30px;padding-left:30px;"><a href=user_home.php>HOME</a></h2>
		
	<div style="background-color:#BAEEEE;margin-left:0;margin-top:0;margin-bottom:0;margin-right:0">
	<h1><center>User Details</center></h1>
		
		<div class="container">
		<div class="row">
		<div class="column" style="background-color:transparent;">
		<h3>Name:<?php echo $b ?></h3>
		<h3>User ID:<?php echo $a ?></h3>
		<h3>phone number:<?php echo $c ?></h3>
		<h3>E-Mail:<?php echo $d ?></h3>
		</div>
		
		</div>
	</div>
	
		</div>
</body>
</html>