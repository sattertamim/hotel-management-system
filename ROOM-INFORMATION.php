<html>
	<head>
		<title>ROOM INFORMATION
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
	<h3>here all the Information of the total ROOMs of HOTEL TAJ . <h3>
	
	<br>
	<br>
	<br>
	
	<h1> Information Of All ROOM : <h1>
	
	<br>

		
		<table border="3" align ="center" >
			<tr>
				<td>	ROOM SL#	</td>
				<td>	ROOM NO.	</td>
				<td>	SIZE(in square)	</td>
				<td>	NUMBER OF BED	</td>		
				<td>	ROOM-tYPE	</td>
			
			</tr>
			
			<tr>
				<td>01</td>
				<td>0011</td>
				<td>500 sqr</td>
				<td>1</td>
				<td rowspan="5">SMALL</td>
			
			</tr>
		
			<tr>
				<td>02</td>
				<td>0012</td>
				<td>500 sqr</td>
				<td>1</td>
			
			</tr>
			
			<tr>
				<td>03</td>
				<td>0013</td>
				<td>600 sqr</td>
				<td>2</td>
			
			</tr>
			
			<tr>
				<td>04</td>
				<td>0014</td>
				<td>600 sqr</td>
				<td>2</td>
			
			</tr>
			
			<tr>
				<td>05</td>
				<td>0015</td>
				<td>600 sqr</td>
				<td>2</td>
			
			</tr>
			
			<tr>
				<td>06</td>
				<td>0021</td>
				<td>800 sqr</td>
				<td>2</td>
				<td rowspan="5">MEDIUM</td>
			
			</tr>
			
			<tr>
				<td>07</td>
				<td>0022</td>
				<td>800 sqr</td>
				<td>2</td>
			
			</tr>
			
			<tr>
				<td>08</td>
				<td>0023</td>
				<td>900 sqr</td>
				<td>2</td>
			
			</tr>
					
			<tr>
				<td>09</td>
				<td>0024</td>
				<td>900 sqr</td>
				<td>2</td>
			
			</tr>

			<tr>
				<td>10</td>
				<td>0025</td>
				<td>900 sqr</td>
				<td>2</td>
			
			</tr>

			<tr>
				<td>11</td>
				<td>0031</td>
				<td>1000 sqr</td>
				<td>3</td>
				<td rowspan="5">LARGE</td>
			
			</tr>	

			<tr>
				<td>12</td>
				<td>0032</td>
				<td>1000 sqr</td>
				<td>3</td>
			
			</tr>

			<tr>
				<td>13</td>
				<td>0033</td>
				<td>1000 sqr</td>
				<td>3</td>
			
			</tr>

			<tr>
				<td>14</td>
				<td>0034</td>
				<td>1200 sqr</td>
				<td>4</td>
			
			</tr>	

			<tr>
				<td>15</td>
				<td>0035</td>
				<td>1200 sqr</td>
				<td>4</td>
			
			</tr>			
		</table>
		
		<br>
		<br>
		<br>
		<h3> For  go to the HOTEL TAJ HOMEPAGE : </h3>
		<form method="pre" action="CustomerUser.php">
			<table align="center">
								
				<tr><td colspan="2" align="center"><input type="submit" value="HOMEPAGE" name="submit">
				</tr>
				
			</table>
		</form>
		
		<h3> For logging-out & go to the Log-In Panel: </h3>
	
		<form method="post" action="LoginPanel.php">
			<table align="center">
								
				<tr><td colspan="2" align="center"><input type="submit" value="LOG-OUT" name="submit">
				  
				</tr>
				
			</table>
		</form>
		
	</body>
</html>