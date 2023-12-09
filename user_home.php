<html>
<title>Chemist Shop Management</title>
<?php
session_start();
?>
	
	
		
	
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>CHEMIST SHOP</title>
        
        <style>

{
    margin: 0;
    box-sizing: border-box;
    padding: 0;
}
body{			
    
        background-color:#BAEEEE;
    display: flex;
}
.left {
    position=fixed;
    z-index:999;
    left: 0;
    top: 0;
    height: 100%;
    flex-basis: 14%;
    background-color: #222;
    color: #666;
    padding: 8px;
    
}

.dash {
    text-align: center;
    padding: 15px;
    border-bottom: 1px solid;
    font-weight: 900;
}
.list {
    list-style-type: none;
    display: flex;
    flex-direction: column;
    margin: 25px;
}
li {
    margin: 18px 0;
    font-size: 22px;
    font-weight: 700;
}
li a {
    text-decoration: none;
    color: #666;
}
li a:hover {
    text-decoration: underline;
    color: #999;
}
.med {
    margin: 40px 0;
    display: flex;
    align-items: center;
    justify-content: space-evenly;
    cursor: pointer;
}
.med img {
    border-radius: 50%;
    width: 45px;
    height: 42px;
}
.med:hover {
    transform: scale(1.1);
    color: #999;
    text-decoration: underline;
}
main{
    flex-basis: 86%;
}
header{
    background-color: #111;
    padding: 15px;
    color: #666;
}
.div-cards{
    display: flex;
    justify-content: space-evenly;
    margin-bottom: 280px;
}
.card {
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
    max-width: 300px;
    height: 150px;
    margin: 20px 30px;
    text-align: center;
    font-family: arial;
}

.title {
    color: grey;
    font-size: 18px;
}

button {
    border: none;
    outline: 0;
    display: inline-block;
    padding: 8px;
    color: white;
    background-color: #000;
    text-align: center;
    cursor: pointer;
    width: 100%;
    font-size: 18px;
}

a {
    text-decoration: none;
    font-size: 22px;
    color: black;
}

button:hover,
a:hover {
    opacity: 0.7;
}

            </style>
    </head>
	<?php
    
        if($_SESSION["userid"] === ""){
          echo $_SESSION['userid'];
          echo "login";
          header("Location: user_home.php ");
        }
      ?>
    <body>
        <nav class="left" >
            <h1 class="dash">DASHBOARD</h1>

            <ul class="list">
                <li><a href="aboutus_page.php">About us</a></li>
                <li><a href="feedback.php">feedback</a></li>
                <li><a href="#"></a></li>
                <li><a href="#"></a></li> <li><a href="#"></a></li> <li><a href="#"></a></li> <li><a href="#"></a></li><li><a href="#"></a></li><li><a href="#"></a></li><li><a href="#"></a></li>
                
            </ul>
            <div class="med">
                <img
                    src="image\logouticon.jpg"
                    alt="med"
                />
                <h4><a href="admin_logout.php"><font color="#778899">Logout</font></a></h4>
                
                
            </div>
            <div class="med">
                <img
                    src="image\userimage.png"
                    alt="med"
                />
                <h4><a href="user_profile.php"><font color="#778899">My Profile</font></a></h4>
                
                
            </div>
           
            
        </nav>
        <main>
            <header><h1>IIITDMJ Pharmacy</h1></header>
            <div class="div-cards">
                <div class="card">
                    <img
                        src="image\placeanorder.png"
                        alt="photo"
                        style="width: 100%" height="200cm"
                    />
                    <h1>Place an order</h1>
                    <p class="title">Here You can order medicines</p>
                    <p>IIITDMJ</p>
                    <div style="margin: 24px 0">
                        <p>
                            
                        </p>
                    </div>
                    <p><button type="button" class="btn" onclick="location.href='add_order.php'"> OPEN</button></p>
                </div>
                <div class="card">
                    <img
                        src="image\managemedicines.jpg"
                        alt="photo"
                        style="width: 100%" height="200cm"
                    />
                    <h1>Medicinals</h1>
                    <p class="title">Out of stock,Expired,Manage</p>
                    <p>IIITDMJ</p>
                    <div style="margin: 24px 0">
                        <p>
                            
                        </p>
                    </div>
                    <p><button  type="button" class="btn" onclick="location.href='medicinals.php'">OPEN</button></p>
                </div>
                <div class="card">
                    <img
                        src="image\salesreports.png"
                        alt="photo"
                        style="width: 100%" height="200cm"
                    />
                    <h1>Sales Reports</h1>
                    <p class="title">SALES REPORTS (Bills)</p>
                    <p>IIITDMJ</p>
                    <div style="margin: 24px 0">
                        <p>
                            
                        </p>
                    </div>
                    <p><button type="button" class="btn" onclick="location.href='view_bill.php'"> OPEN</button></p>
                </div>
            </div>
            <div class="div-cards">
                <div class="card">
                    <img
                        src="image\purchasereports.jpg"
                        alt="photo"
                        style="width: 100%" height="180cm"
                    />
                    <h1>Purchase Reports</h1>
                    <p class="title">PURCHASE REPORTS(Orders)</p>
                    <p>IIITDMJ</p>
                    <div style="margin: 24px 0">
                        <p>
                            
                        </p>
                    </div>
                    <p><button  type="button" class="btn" onclick="location.href='view_orders.php'">OPEN</button></p>
                </div>
                <div class="card">
                    <img
                        src="image\employees.jpg"
                        alt="photo"
                        style="width: 100%" height="180cm"
                    />
                    <h1>Employees</h1>
                    <p class="title">Manage Employees</p>
                    <p>IIITDMJ</p>
                    <div style="margin: 24px 0">
                        <p>
                            
                        </p>
                    </div>
                    <p><button type="button" class="btn" onclick="location.href='employee.php'">OPEN</button></p>
                </div>
                <div class="card">
                    <img
                        src="image\isueebill.jpg"
                        alt="photo"
                        style="width: 100%" height="180cm"
                    />
                    <h1>Issue Bills</h1>
                    <p class="title">ISSUE BILLS FOR CUSTOMERS</p>
                    <p>IIITDMJ</p>
                    <div style="margin: 24px 0">
                        <p>
                            
                        </p>
                    </div>
                    <p><button type="button" class="btn" onclick="location.href='bills_form.php'">OPEN</button></p>
                </div>
            </div>
        </main>
    </body>
</html>
