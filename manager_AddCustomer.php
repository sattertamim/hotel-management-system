<?php 
	
	include 'manager_Header.php';
	
//***************************************************************************	
	include '../controllers/manager_RoomController.php';
	
	$room_information = getAllRoomInfo();
	  
?>



				<!-- AddCustomer starts -->



<div class="center">

	<form method="post" action="../controllers/manager_CustomerController.php" enctype="multipart/form-data" class="form-horizontal form-material">
		
					<div class="form-group">
					
						<h4 class="text"><b>Customer Name :</b></h4> 
						<input type="text" name="customer_name" class="form-control">
						
					</div>	
					
					<div class="form-group">
					
						<h4 class="text"><b>Customer Address :</b></h4> 
						<input type="text" name="customer_address" class="form-control">
						
					</div>
					
					<div class="form-group">
					
						<h4 class="text"><b>Email Address :</b></h4> 
						<input type="text" name="email_address" class="form-control" value="@gmail.com">
						
					</div>
					
					<div class="form-group">
					
						<h4 class="text"><b>Contact No :</b></h4> 
						<input type="text" name="contact_no" class="form-control" value="+880-1">
						
					</div>
					
					<div class="form-group">
					
						<h4 class="text"><b>Booked Room_No :</b></h4> 
						<input type="text" name="booked_room_no" class="form-control">
						
					</div>	
					
					<div class="form-group">
			
						<h4 class="text"><b>Payment Status :</b></h4> 
						
						<input type="radio" name="payment_status"  value="Complete" > Complete <br/>
						<input type="radio" name="payment_status"  value="(due)" > (due) <br/>
						<input type="radio" name="payment_status"  value="(partial)" > (partial) <br/>
							
					</div>
									
<br/>
<br/>
<br/>
	


				<!-- add customer_image -->
				
				
				
<!--************************************************************************************************-->			
					<div class="form-group">
					
						<h4 class="text"><b>Customer Image :</b></h4> 
						<input type="file" name="customer_image" class="form-control">
						
					</div>
<!--************************************************************************************************-->
				
				
					<div class="form-group text-center">
									
<!--*************************************************************************************************-->		
						<input type="submit" class="btn btn-success" name="add_Customer" value=" Add Customer " class="form-control">
						
					</div>
				
				</form>
			
</div>



				<!-- AddCustomer ends -->



<?php include 'manager_Footer.php';?>


