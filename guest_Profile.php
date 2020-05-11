<?php 

	  include 'guest_Header.php';
	  
	  require_once ('../controllers/guest_CustomerController.php');
	  
//********************************************************************************	  
	  require_once ('../controllers/guest_RoomController.php');
	  
	  $r_customer_id = $_GET["customer_id"];
	  
	  $customer=getCustomer($r_customer_id);

//********************************************************************************	 
	  $room_information = getAllRoomInfo();
	  
//for update info to edit page	  
//********************************************************************************
		$customer_information = getAllCustomerInfo();	                  
	  
?>



				<!-- ViewCustomerInfo starts -->



<div   class="center" >

					
		<h1 class="text text-center"><b><u>***GUEST-INFORMATION***</b></u></h1>
						
		
		<table>
			<tr>
		
		
				<!-- show customer_image -->
				
				
				
<!--************************************************************************************************-->	
			<td align="center">
				<img class="item-image"  src="<?php echo $customer["customer_image"];?>"></img>
				
				<?php
				
				echo '<div class="add-to-cart"><span><a href="guest_EditCustomer.php?customer_id='.$customer["customer_id"].'" class="btn btn-success" style="width:185px;font-family:consolas;margin-top:5px;">Edit/Update Info</a></span></div>';
		
				
				?>
				
			</td>
<!--************************************************************************************************-->			
	
	
			<td align="right">	

					<div class="form-group">
						<h3 class="text"><b>Customer ID	:	</b>
						<i><input type="button" name="customer_id" value="<?php echo $customer["customer_id"];?>" style="width:185px;font-family:consolas;margin-top:5px;" class="form-control"> </i></h3>	
					</div>	
							
							
					<div class="form-group" >
					
						<h4 class="text"><b>Customer Name :</b></h4> 
						<input type="button" name="customer_name" value="<?php echo $customer["customer_name"];?>" style="width:185px;font-family:consolas;margin-top:5px;" class="form-control">
						
					</div>	
					
					<div class="form-group">
					
						<h4 class="text"><b>__Customer Address :</b></h4> 
						<input type="button" name="customer_address" value="<?php echo $customer["customer_address"];?>" style="width:185px;font-family:consolas;margin-top:5px;" class="form-control">
						
					</div>
					
					<div class="form-group">
					
						<h4 class="text"><b>Email Address :</b></h4> 
						<input type="button" name="email_address" value="<?php echo $customer["email_address"];?>" style="width:185px;font-family:consolas;margin-top:5px;" class="form-control">
						
					</div>
					
					<div class="form-group">
					
						<h4 class="text"><b>Contact No :</b></h4> 
						<input type="button" name="contact_no" value="<?php echo $customer["contact_no"];?>" style="width:185px;font-family:consolas;margin-top:5px;" class="form-control">
						
					</div>
					
					<div class="form-group">
					
						<h4 class="text"><b>Booked Room_No :</b></h4> 
						<input type="button" name="booked_room_no" value="<?php echo $customer["booked_room_no"];?>" style="width:185px;font-family:consolas;margin-top:5px;" class="form-control">
						
					</div>	
					
<!--*************************************************************************************************-->			
					<div class="form-group">
						
						<h4 class="text"><b>Payment Status :</b></h4> 
						<input type="button" name="payment_status" value="<?php echo $customer["payment_status"];?>" style="width:185px;font-family:consolas;margin-top:5px;" class="form-control">						
						
					</div>
										


				
<br/>
<br/>
<br/>
									
					<div class="form-group text-center">

<!--*************************************************************************************************-->					
					<input type="hidden" name="customer_id" value="<?php echo $customer["customer_id"];?>" class="form-control">
					<input type="hidden" name="prev_image" value="<?php echo $customer["customer_image"];?>" class="form-control">	
					
<!--*************************************************************************************************-->								
					</div>
				
				
			</td>
		</tr>	
	</table>
		
</div>



				<!-- ViewCustomerInfo ends -->



<?php include 'guest_Footer.php';?>


