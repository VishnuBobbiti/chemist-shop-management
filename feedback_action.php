
<html>
<title>Chemist Shop Management</title>
<?php
// Start the session
session_start();
?>
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
				color: white;
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
				padding: 10px;
			
			}
			
			#posts{
				padding: 20px;
				font-size: 30px;
				text-align: center;
			
			}
			#card{
				background-color:#FFFFEF;
				margin:150px;
				height:150px:
				border-radius:5px;
				box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);
				text-align:center;
				font-size:24px;
				padding:25px;
				margin-left:200px;
				margin-right:200px;
			}
			
			#done{
				background-color: #333333;
				color: white;
				padding: 12px 20px;
				border: none;
				border-radius: 4px;
				cursor: pointer;
			
			}
			
		</style>
	</head>
	
	<body>
		
		
	<?php
        if($_SESSION["userid"] === ""){
          echo $_SESSION['userid'];
          echo "login";
          header("Location: home.php ");
        }
      ?>
		<ul>
			<li id="titlehead"><p id="title">IIITDMJ CHEMIST SHOP</p></li>
			<li style=margin-right:10px;><a href="user_logout.php">Logout</a></li>
			<li><a  href="user_home.php">Dashboard</a></li>
		</ul>

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
		$sql = "CREATE TABLE IF NOT EXISTS feedback_database (
			feedback_id INT AUTO_INCREMENT,
			user_id VARCHAR(50),
			username VARCHAR(50), 
			mobile_number VARCHAR(50),
			email VARCHAR(50),
			feedback VARCHAR(1000),
			PRIMARY KEY(feedback_id),
			FOREIGN KEY (user_id) REFERENCES user_database(user_id)
		)";

		if ($conn->query($sql) === TRUE) {
		//echo "Table medicine_database created successfully";
		} else {
		echo "Error creating table: " . $conn->error;
		}
		$query= "SELECT * FROM feedback_database ORDER BY feedback_id DESC ";

		$result = mysqli_query($conn, $query);
		
		$row = mysqli_fetch_array($result);
		$lastid=$row['feedback_id'];
		if ($lastid==" ")
		{
			$orderid="FDB1";
		}
		else{
			$orderid =substr($lastid,3);
			$orderid =intval($orderid);
			$orderid = "FDB" .($orderid+1);
			 
			
		}
		
		$medname = filter_input(INPUT_GET,'username');
		$qty = filter_input(INPUT_GET,'mobile_number');
		$exdate = filter_input(INPUT_GET,'email');
		$amt = filter_input(INPUT_GET,'feedback');
		


		$sql = "INSERT INTO feedback_database (user_id,username,mobile_number, email,feedback) 
		VALUES ('$userid','$medname', '$qty','$exdate','$amt')";


		if ($conn->query($sql) === TRUE) {
		//echo "New record created successfully";
		echo "<div id='card'><p>Feedback Sent Successfully </p><form action='user_home.php' method='get'><button type='submit' id='done'>Done</button></form></div>";
		
		
		
		} else {
			echo "Error: " . $sql . "<br>" . $conn->error;
		}

		$conn->close();
		
		?>
		
</body>
	
	
	


</html>