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
			
			.grid-container {
				display: grid;
				grid-template-columns: auto auto;
				grid-gap: 20px;
				padding: 10px;
			}
			
			.btn{
				background-color:#BAEEEE;
				border: none;
				color: #424242;
				padding-top:7px;
				text-align: center;
				margin-bottom:0px;
				
				font-size: 20px;
			}
			
			.btn:hover{
				box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);
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
			<li><a class="active" href="admin_home.php">Admin</a></li>
			</ul>
		
		
		<h2 style="font-style:italic; font-size:35px;padding-left:30px;">Admin Menu</h2>
		
		
		<div class="grid-container">
			<div style="text-align:right;"> <img src="image\addemployeeicon.jpg"height=40 width=40>  </div>
			<div ><button type="button" class="btn" onclick="location.href='add_admin.php'">Add Admin</button></div>
			<div style="text-align:right;"><img src="image\viewemployee.jpg"height=40 width=40></div>  
			<div ><button type="button" class="btn" onclick="location.href='view_user.php'">View User</button></div>
			<div style="text-align:right;"> <img src="image\feedbackicon.jpg"height=40 width=40>  </div>
			<div ><button type="button" class="btn" onclick="location.href='view_feedback.php'">View Feedbacks</button></div>
			<div style="text-align:right;"> <img src="image\loginadmin.jpg"height=40 width=40>  </div>
			<div ><button type="button" class="btn" onclick="location.href='view_admin.php'">View Admins</button></div>
			<div style="text-align:right;"><img src="image\delete.png"></div>  			
			<div ><button type="button" class="btn" onclick="location.href='delete_admin.php'">Delete Admin</button></div>
		<div style="text-align:right;"><img src="image\deleteemployee.jpg"height=40 width=40></div>  
			<div ><button type="button" class="btn" onclick="location.href='delete_user.php'">Delete User</button></div>
			
		</div>
		
		
		
		
		
	</body>
	
	
	


</html>