<?php
	//session_start();
	if(!isset($_COOKIE['loggedinuser']))
	{
		header("Location:login.php");
	}
	 
	
?>
<?php
// define variables and set to empty values
$empid = $empname = $phone = $address = $salary = $position = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $empid = test_input($_POST["empid"]);
  $empname = test_input($_POST["empname"]);
  $phone = test_input($_POST["phone"]);
  $address = test_input($_POST["address"]);
   $salary = test_input($_POST["salary"]);
  $position = test_input($_POST["position"]);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
<html>
<head>
<style>

body {
	background-image: url(image/bacground1.jpg);
	background-size: 100% 100%;
	
}

ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

li {
  display: inline-block;
  text-align: center;
  float: right;
}

li a, .dropbtn {
  display: inline-block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover, .dropdown:hover .dropbtn {
  background-color: red;
}

li.dropdown {
  display: inline-block;
}
span {
	 color: red;
	 float: left;
	 font-size: 35px;
	 font-weight: 400;
	 padding-left: 15px;
}




* {
  box-sizing: border-box;
}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}

label {
  padding: 12px 12px 12px 0;
  color: white;
  display: inline-block;
  font-weight: 600;
}

input[type=button], input[type=submit], input[type=reset] {
  background-color: #4CAF50;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}

input[type=button], input[type=submit], input[type=reset]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
 
  padding: 20px;
}
h1 {
	text-align: center;
	color: white;
}
.col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
}

.col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

</style>
</head>
<body>
<section id="navber">
<ul>
 <span>Hotel Taj</span>
  <li><a href="room.php">Room Manage</a></li>
  <li><a href="employee.php">Employee Manage</a></li>
   <li><a href="manager_booking.php">Customer Manage</a></li>
 
</ul>
</section>
<section id="employee">
<h1>Employee Manage</h1>

<div class="container">
  <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
  <div class="row">
    <div class="col-25">
      <label for="empid">Employee ID:</label>
    </div>
    <div class="col-75">
      <input type="text" id="empid" name="empid" placeholder="Employee ID..">
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="empname">Employee Name:</label>
    </div>
    <div class="col-75">
      <input type="text" id="empname" name="empname" placeholder="Employee Name..">
    </div>
  </div>
  
   <div class="row">
    <div class="col-25">
      <label for="address">Employee Address:</label>
    </div>
    <div class="col-75">
      <input type="text" id="address" name="address" placeholder="Employee Address..">
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="phone">Phone No:</label>
    </div>
    <div class="col-75">
      <input type="text" id="phone" name="phone" placeholder="Phone No..">
    </div>
  </div>

 <div class="row">
    <div class="col-25">
      <label for="salary">Employee Salary:</label>
    </div>
    <div class="col-75">
      <input type="text" id="salary" name="salary" placeholder="Employee salary..">
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="position">Position:</label>
    </div>
    <div class="col-75">
      <input type="text" id="position" name="position" placeholder="Employee Position..">
    </div>
  </div>
  <div class="row">
   <input type="button" value="Button">
<input type="reset" value="Reset">
<input type="submit" value="Submit">
  </div>
  </form>
</div>
<h2 style="color:white">Employee Details:</h2>
 <label>Employee id:<?php echo $empid;?></label>
 <label>Employee name:<?php echo $empname;?></label>
 <label>Employee phone:<?php echo $phone;?></label>
 <label>Employee address:<?php echo $address;?></label>
 <label>Employee salary:<?php echo $salary;?></label>
 <label>Employee position:<?php echo $position;?></label>

</section>
</body>
</html>