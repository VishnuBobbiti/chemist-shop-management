
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
			
			table {
			margin-left:10%;
			margin-top:0%;
			background-color:#BAEEEE;
		}
		th,td {
			font-size:18pt;
			padding:10pt;
			text-align:center;
		}
			
		</style>
	</head>
	
	<body>

	<?php
        if($_SESSION["adminid"] === ""){
          echo $_SESSION['adminid'];
          echo "login";
          header("Location: home.php ");
        }
      ?>
		
	<ul>
			<li id="titlehead"><p id="title">IIITDMJ CHEMIST SHOP</p></li>
			<li style=margin-right:10px;><a href="admin_logout.php">Logout</a></li>
			<li><a  href="admin_home.php">Menu</a></li>
	</ul>
	
	<h2 style="font-style:italic; font-size:30px;padding-left:30px;">View Admin</h2>
		

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
		
	
	
		$sql='SELECT * FROM admin_database';
		$ret=mysqli_query($conn,$sql);
            if(mysqli_num_rows($ret)>0)
            {
                    echo"<div id='dem'>";
					echo"<table border='1'><tr><th>ADMIN ID</th><th>ADMIN NAME</th><th>PHONE NUMBER</th><th>E-MAIL</th></tr>";
					while($row=mysqli_fetch_assoc($ret))
					{
						echo"<tr><td>{$row['admin_id']}</td><td>{$row['admin_name']}</td><td>{$row['admin_phone']}</td><td>{$row['admin_email']}</td></tr>";
					}
            
			echo"</table>";
                     
            echo"<form action='admin_home.php'><button type='submit' id='done' style='margin-left:10%;margin-top:20px'>Go Back</button></form>";
            echo"</div>";
            }
            if(mysqli_num_rows($ret)==0)
            {
                      echo "<div id='card'><h1>No Admins are thier to view....</h1><form action='admin_home.php'><button type='submit' id='done'>Done</button></form></div>";
		
            }
?>
    </body>
</html>
