

<!-------------------------------------------------------------------------------------------------->
<?php 

	include 'main_header.php';
	
	include '../controllers/LoginPanelController.php';
	
	
?>


				
				<!--login starts -->

<body style="background-image:url(../storage/room_image/hotel.jpg);background-repeat: no-repeat;background-size: cover; background-size: 100% 100%; color: black; opacity: 0.7; font-weight: 700;">

		<div class="center-login">
		
			<h1 class="text text-center" style="font-weight: 700;color:red;">Login</h1>
			
			<form method="POST" action="login.php" class="form-horizontal form-material">
			
				<div class="form-group">
				
					<h3 class="text" style="font-weight: 700;color:red;">Username :</h3> 
					<input type="text" name="user_name" class="form-control" required>
				
				</div>
				
				<div class="form-group">
				
					<h3 class="text" style="font-weight: 700;color:red;">Password :</h3> 
					<input type="password" name="password" class="form-control" required>
					
				</div>


<!--************************************************************************************************** -->				
				<div class="form-group">
				
				<!--	<h4 class="text">Log in As :</h4> -->
					<input type="hidden" name="title" class="form-control" required>
					
				</div> 	
<!--************************************************************************************************** -->



				<!--button work-->				
				
				
				
				<div class="form-group text-center">
					
					<input type="submit" name="login" class="btn btn-danger" value="Login" class="form-control">
					
				</div>
				
				
				
				
				<div class="form-group text-center">
					
					<a href="signup.php" style="font-weight: 700;color:red;">Not registered yet? Sign Up</a>
					
				</div>
				
			</form>	
				
		</div>
		
</body>

				<!--login ends -->
				
				

<?php include 'main_footer.php';?>