
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
		$sql = "CREATE TABLE IF NOT EXISTS order_database (
			order_id INT AUTO_INCREMENT,
			user_id VARCHAR(50) ,
			med_name VARCHAR(50), 
			med_qty VARCHAR(50),
			order_date VARCHAR(50),
			total_amt VARCHAR(50),
		PRIMARY KEY(order_id),
		
		FOREIGN KEY (user_id) REFERENCES user_database(user_id) ON DELETE CASCADE 
		)";

		if ($conn->query($sql) === TRUE) {
		//echo "Table created successfully";
		} else {
		echo "Error creating table: " . $conn->error;
		}

		$query= "SELECT * FROM order_database ORDER BY order_id DESC ";

$result = mysqli_query($conn, $query);

$row = mysqli_fetch_array($result);
$lastid=$row['order_id'];
if ($lastid==" ")
{
	$orderid="ORD1";
}
else{
	$orderid =substr($lastid,3);
	$orderid =intval($orderid);
	$orderid = "ORD" .($orderid+1);
	 
	
}
		$ordername = filter_input(INPUT_GET,'med_name');
		$orderpass = filter_input(INPUT_GET,'med_qty');
		$ordernumber = filter_input(INPUT_GET,'order_date');
		
		
		$asql="SELECT amount FROM medicine_database WHERE medicine_name='$ordername'AND user_id='$userid'";
		$ret=mysqli_query($conn,$asql);

            if(mysqli_num_rows($ret)>0)
            {
				while($row=mysqli_fetch_assoc($ret))
				{
					$amount=$row['amount'];
					
				}
				$_SESSION['mediname'] = $ordername;
				$_SESSION['quantity'] = $orderpass;

				$amt=$amount*$orderpass;
			  	echo "<div id='card'><h2>Amount = ".$amt."</h2><form action='buy.php' method='get'><button type='submit' id='done'>Proceed</button></form></div>";
				  $sql = "INSERT INTO order_database (user_id, med_name, med_qty, order_date, total_amt) 
		VALUES ('$userid','$ordername', '$orderpass','$ordernumber','$amt')";


if ($conn->query($sql) === TRUE) {
    //echo "New record created successfully";
	echo "<div id='card'><p>Click on Proceed</p></div>";
		
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
         
            }
            if(mysqli_num_rows($ret)==0)
            {
                echo "<div id='card'><h1>No Medicine of such name  is thier....<br>First Please add the medicine details at <a href=add_medicine.php>Medicinals</a></h1><form action='user_home.php'><button type='submit' id='done'>Done</button></form></div>";
		
            }

		

		$conn->close();
		
		?>
		
</body>
	
	
	


</html>