<html>
<title>Chemist Shop Management</title>
<?php
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
				background-color: #00b300;
				color: white;
				padding: 12px 20px;
				border: none;
				border-radius: 4px;
				cursor: pointer;
			
			}
			
#btn{  
font-size: 25px;  
}  
			
		form.example input[type=text] {
  padding: 10px;
  font-size: 17px;
  border: 1px solid grey;
  display: inline;
  width: 100%;
  background: #f1f1f1;
  text-align:center;
 
}

form.example button[type=submit] {
	background-color: #000000;
				color: white;
				padding: 12px 20px;
				border: none;
				border-radius: 4px;
				cursor: pointer;
				float: right;
}

form.example button[type=submit]:hover {
  background: #0b7dda;
}

form.example::after {
  content: "";
  clear: both;
  display: inline;
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
			<li><a class="active" href="user_home.php">Dashboard</a></li>
		</ul>
		<div style="margin-top:5%">
		<form  class="example" action="search_medicine_action.php" method = "get">
		<div class="container">  
			<input type="text" required  name="search" placeholder="Enter medicine name ....." name="search"><br>
	</div>
			<button type="submit" style="margin-right:700px; margin-top:10px;" value="search">Search</button>
		</form>
		</div>
		
	</body>
</html>