<?php
	//session_start();
	if(!isset($_COOKIE['loggedinuser']))
	{
		header("Location:login.php");
	}
	 
	
?>
<?php
// define variables and set to empty values
$roomid = $roomtype = $prize = $status = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $roomid = test_input($_POST["roomid"]);
  $roomtype = test_input($_POST["roomtype"]);
  $prize = test_input($_POST["prize"]);
  $status = test_input($_POST["status"]);
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
<section id="room">
<h1>Room Manage</h1>
<div class="container">
  <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
  <div class="row">
    <div class="col-25">
      <label for="roomid">Room ID:</label>
    </div>
    <div class="col-75">
      <input type="text" id="roomid" name="roomid" placeholder="Room No..">
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="roomtype">Room Type:</label>
    </div>
    <div class="col-75">
      <input type="text" id="roomtype" name="roomtype" placeholder="Room Type..">
    </div>
  </div>
  
   <div class="row">
    <div class="col-25">
      <label for="prize">Room Prize:</label>
    </div>
    <div class="col-75">
      <input type="text" id="prize" name="prize" placeholder="Room Prize..">
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="status">Room Status:</label>
    </div>
    <div class="col-75">
      <input type="text" id="status" name="status" placeholder="Room Status..">
    </div>
  </div>
  <div class="row">
   <input type="button" value="Button">
<input type="reset" value="Reset">
<input type="submit" value="Submit">
  </div>
  </form>
</div>
<h2 style="color:white">Room Details:</h2>
 <label>room id:<?php echo $roomid;?></label>
 <label>room type:<?php echo $roomtype;?></label>
 <label>room prize:<?php echo $prize;?></label>
 <label>room status:<?php echo $status;?></label>

</section>
<form method="post" action="login.php">
			<table align="center">
								
				<tr><td colspan="2" align="center"><input type="submit" value="LOG-OUT" name="submit">
				    <br><span><?php 
					session_destroy(); 
					?></span></td>
				</tr>
				
			</table>
		</form>
</body>
</html>
