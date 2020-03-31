<html>
	<head>
		<title>ROOM INFORMATION & Managing
		</title>
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
		<h3>To See the information of all ROOMS : <h3>
		<form method="post" action="ROOM-INFORMATION.php">
				<table align="center">
									
					<tr><td colspan="2" align="center"><input type="submit" value="ROOM-INFORMATION" name="submit">
					</tr>
				</table>	
					
		</form>
		
		<br>
		<br>
		<br>
		
		<h3> To Manage ROOM for Customer & To See the Status of all the ROOM : </h3>
				<form method="post" action="Room.php">
				<table align="center">
									
					<tr><td colspan="2" align="center"><input type="submit" value="ROOM-STATUS & MANAGE" name="submit">
					</tr>
				</table>
					
		</form>
		
		<br>
		<br>
		<br>
		
		<h3> For  go to the HOTEL TAJ RECIEPTIONIST-PANEL : </h3>
		<form method="pre" action="RecieptionistPanel.php">
			<table align="center">
								
				<tr><td colspan="2" align="center"><input type="submit" value="RecieptionistPanel" name="submit">
				</td></tr>
				
			</table>
		</form>
		
	</body>
</html>