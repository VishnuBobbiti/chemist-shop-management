
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
			
			* {
				box-sizing: border-box;
			}

			input[type=text], select, textarea,input[type=password],input[type=email],input[type=number],input[type=date] {
				margin-right:400px;
				text-align:center;
				width: 40%;
				padding: 12px;
				border: 1px solid #ccc;
				border-radius: 4px;
				resize: vertical;
			}

			label {
				font-size:18px;
				margin-left:450px;
				padding: 12px 12px 12px 0;
				display: inline-block;
			}

			input[type=submit] {
				background-color: #333333;
				color: white;
				padding: 12px 20px;
				border: none;
				border-radius: 4px;
				cursor: pointer;
				float: right;
			}

			input[type=submit]:hover {
				background-color: #778899;
			}

			.container {
			    
				border-radius: 5px;
				background-color: #BAEEEE;
				padding: 20px;
			}

			.col-25 {
				float: left;
				width: 50%;
				margin-top: 6px;
			}

			.col-75 {
				float: left;
				width: 50%;
				margin-top: 6px;
			}

			/* Clear floats after the columns */
			.row:after {
				content: "";
				display: table;
				clear: both;
			}

			/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
			@media screen and (max-width: 600px) {
				.col-25, .col-75, input[type=submit] {
					width: 100%;
					margin-top: 0;
				}
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
		
		
		
		<h2 style="font-style:italic; font-size:30px;padding-left:30px;">Enter Order Details</h2>
		
		<div style="text-align:center;"> <img src="image\addordericon.jpg" style="width: 8%" height="60cm">  </div>
		
		<div class="container">
			<form action="add_order_action.php" method = "get">
				
				<div class="row">
					<div class="col-25">
						<label for="lname">Medicine Name</label>
					</div>
					<div class="col-75">
						<input type="text" pattern=".{1,}" required name="med_name" placeholder="Enter medicine name...">
					</div>
				</div>
				
				<div class="row">
					<div class="col-25">
						<label for="lname">Quantity</label>
					</div>
					<div class="col-75">
						<input type="text" pattern=".{1,}" required name="med_qty" placeholder="Quantity...">
					</div>
				</div>
				
				
				
				<div class="row">
					<div class="col-25">
						<label for="lname">Date of order </label>
					</div>
					<div class="col-75">
						<input type="date" pattern=".{1,}" required name="order_date" placeholder=" Today date...">
					</div>
				</div>
				
				
				
				
				<div class="row">
					<input type="submit" style="margin-right:600px; margin-top:10px;" value="Submit">
				</div>
			</form>
			
			<marquee>Here You can Only order the medicine which are previously present in the medicines.If you are ordering a new medicine, first add the details of medicine at <a href=medicinals.php>"manage"</a> portion </marquee>
			<center><p><a href=medicinals.php>Add New medicine details</a></p></center>
		</div>
		
		
		
		
	</body>
	
	
	


</html>