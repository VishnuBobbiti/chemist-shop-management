<!DOCTYPE html>
<html>
  
<title>Chemist Shop Management</title>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
}

html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

.column {
  float: left;
  width: 33.3%;
  margin-bottom: 16px;
  padding: 0 8px;
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  margin: 8px;
}

.about-section {
  padding: 50px;
  text-align: center;
  background-color: #474e5d;
  color: white;
}

.container {
  padding: 0 16px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.button:hover {
  background-color: rgb(212, 18, 18);
}

@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}
</style>
</head>
<body>

<div class="about-section">
  <h1>About Us Page</h1>
  <p>THIS IS IIITDMJ CHEMIST SHOP .</p>
  <p>In the chemist shop management System project in PHP using MYSQL,
    the goal is to manage the requirements of chemist shop which is to be store 
    the details of medicines,orders,employees,bills in an organized manner.This project involves 
    storing and managing different types of data (i.e storing details of medicines,employees,orders and bill details ) .
     All this information is stored and entered by manager(user). </p>
</div>

<h2 style="text-align:center">Our Team</h2>
<div class="row">
  <div class="column">
    <div class="card">
      
      <div class="container">
        <h2>BOBBITI VISHNU KUMAR REDDY</h2>
        <p class="title">20BCS057</p>
        <p>9154425379</p>
        <p>20BCS057@iiitdmj.ac.in</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <div class="container">
        <h2>DIGAMBAR PATIL</h2>
        <p class="title">20BCS076</p>
        <p>9096277816</p>
        <p>20BCS076@iiitdmj.ac.in</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
      <div class="container">
        <h2>ANIL PATEL</h2>
        <p class="title">20BCS030</p>
        <p>7773868134</p>
        <p>20BCS030@iiitdmj.ac.in</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>
</div>

</body>
</html>
