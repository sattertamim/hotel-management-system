<?php
	//session_start();
	if(!isset($_COOKIE['loggedinuser']))
	{
		header("Location:login.php");
	}
	 
	
?>

<html>
	<head>
		<title>RECIEPTIONIST PLATFORM</title>
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
		<h2> Welcome to RECIEPTIONIST-PANEL	 <h2>
	
	<br>	
	
	.............
	
			<h1> RECIEPTIONIST Information : </h1>
		
			
				<table border="3">
					<tr>
						<td>	Name:	</td>
						<td>SAIFUL ISLAM </td>
						
					</tr>
					
					<tr>
						<td>	ID:	</td>
						<td>001111</td>
					</tr>
				
					<tr>
						<td>	ADDRESS:	</td>
						<td>104/-North Khilgaon ,Dhaka,Bangladesh.</td>
														
					</tr>
					
					<tr>
						<td>	Email:	</td>
						<td>abc@gmail.com </td>
					
					</tr>
				
				</table>
				
				<br>
				<br>
				<br>
				
				<h3> To See Room Information And Manage ROOM : </h3>
				
			<form method="post" action="RoomInformation&Manage.php">
				<table align="center">
								
					<tr><td colspan="2" align="center"><input type="submit" value="ROOM-INFORMATION&STATUS" name="submit">
					</tr>
				
				</table>
			</form>

				<br>
				<br>
				<br>
				
				<h3> To see Customer information : </h3>

			<form method="post" action="CustomerInformation.php">
				<table align="center">
								
					<tr><td colspan="2" align="center"><input type="submit" value="CUSTOMER INFORMATION&STATUS" name="submit">
					</tr>
				
				</table>
			</form>


	<h2>.............<h2>
		
		<br>
		<br>
		<br>
			
		<h3> For logging-out & go to the Log-In Panel: </h3>
	
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