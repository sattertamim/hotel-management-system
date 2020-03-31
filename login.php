<?php
	
	$uname="";
	$err_uname="";
	$pass="";
	$err_pass="";
	$err_invalid="";
	$has_error=false;
	
	if(isset($_POST['submit']))
	{	
		if(empty($_POST['uname']))
		{
			$err_uname="*Username Required";
			$has_error=true;
			
		}
		else
		{
			$uname=$_POST['uname'];
		}
		if(empty($_POST['pass']))
		{
			$err_pass="*Password Required";
			$has_error=true;
			
		}
		else
		{
			$pass=$_POST['pass'];
		}
		
		if(!$has_error)
		{
			if($uname == "admin" && $pass=="123")
			{
				//session_start();
				setcookie("loggedinuser",$uname,time()+60);
				//$_SESSION["loggedinuser"]=$uname;
				header("Location:RecieptionistPanel.php");
			}
			else
			{
				$err_invalid="Invalid Username Password";
				//echo $err_invalid;
			}
		}
		
	}
	if(isset($_POST['submit']))
	{	
		if(empty($_POST['uname']))
		{
			$err_uname="*Username Required";
			$has_error=true;
			
		}
		else
		{
			$uname=$_POST['uname'];
		}
		if(empty($_POST['pass']))
		{
			$err_pass="*Password Required";
			$has_error=true;
			
		}
		else
		{
			$pass=$_POST['pass'];
		}
		
		if(!$has_error)
		{
			if($uname == "user" && $pass=="1234")
			{
				//session_start();
				setcookie("loggedinuser",$uname,time()+60);
				//$_SESSION["loggedinuser"]=$uname;
				header("Location:room.php");
			}
			else
			{
				$err_invalid="Invalid Username Password";
				//echo $err_invalid;
			}
		}
		
	}
	
	if(isset($_POST['submit']))
	{	
		if(empty($_POST['uname']))
		{
			$err_uname="*Username Required";
			$has_error=true;
			
		}
		else
		{
			$uname=$_POST['uname'];
		}
		if(empty($_POST['pass']))
		{
			$err_pass="*Password Required";
			$has_error=true;
			
		}
		else
		{
			$pass=$_POST['pass'];
		}
		
		if(!$has_error)
		{
			if($uname == "foisal" && $pass=="124")
			{
				//session_start();
				setcookie("loggedinuser",$uname,time()+60);
				//$_SESSION["loggedinuser"]=$uname;
				header("Location:CustomerUser.php");
			}
			else
			{
				$err_invalid="Invalid Username Password";
				//echo $err_invalid;
			}
		}
		
	}
?>

<html>
	<head><title>Login</title></head>
	<style>
	
	body {
		background-image: url(image/background.jpg);
	background-image: cover;
	background-size: 100% 100%;
	text-align= center;
	}
	
	* {
  box-sizing: border-box;
}

input[type=text],input[type=password], select, textarea {
  width: 70%;
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
  font-size: 30px;
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
  width: 50%;
  margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}
	.error {
		color: blue;
		font-size: 30px;
	}
	</style>
	<body>
		<h1 style="color: white;text-align: center;">Welcome To<br> Hotel Taj</h1>
		<span><?php echo $err_invalid;?></span>
		<form method="post" action="" align="center">
			 <div class="row">
    <div class="col-25">
      <label>User Name: </label>
    </div>
    <div class="col-75">
      <input type="text" value="<?php echo $uname;?>" name="uname">
						<br><span class="error"><?php echo $err_uname;?></span>
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label>Password: </label>
    </div>
    <div class="col-75">
     <input class="pass" type="password" value="<?php echo $pass;?>" name="pass">
					<br><span class="error"><?php echo $err_pass;?></span></span>
    </div>
  </div>
  <div class="row">
	<input type="submit" value="LOGIN" name="submit">
  </div>
		</form>

	</body>
</html>