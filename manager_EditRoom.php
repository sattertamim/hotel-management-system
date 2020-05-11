<?php

	include 'manager_Header.php';
	
	require '../controllers/manager_RoomController.php';
	 
//*************************************************************************	 
	 $r_room_no=$_GET["room_no"];
	 
	 $room=getRoom($r_room_no);

?>



				<!-- edit room starts -->



<div class="center">
	<table>
	
	
				<!-- show room_image -->
				
				
				
<!--************************************************************************************************-->	
		<td>
			<img class="item-image" style="margin-right:20px" src="<?php echo $room["room_image"];?>"></img>
		
		</td>
<!--************************************************************************************************-->

		
		<td>
			<form method="post" action="../controllers/manager_RoomController.php" enctype="multipart/form-data" class="form-horizontal form-material">
			
				<div class="form-group">
				
					<h4 class="text"><b>Room Size(in Square):</b></h4> 
					<input type="text" name="size" value="<?php echo $room["size"];?>" class="form-control">
					
				</div>
				
				<div class="form-group">
				
					<h4 class="text"><b>Number of Bed :</b></h4> 
					<input type="text" name="num_of_bed" value="<?php echo $room["num_of_bed"];?>" class="form-control">
					
				</div>
				
<!--**************************************************************************************************-->			
				<div class="form-group">
					
					<h4 class="text"><b>Room Type :</b></h4> 
					<select name="room_type"  class="form-control">
						<option selected="selected"><?php echo $room["room_type"];?></option>
						<option> Small </option>
						<option> Medium </option>
						<option> Large </option>
						<option> VIP </option>
						<option> Deluxe </option>
						
					</select>		
				</div>	
				
				<div class="form-group">
				
					<h4 class="text"><b>Rent Price(per Day) :</b></h4> 
					<input type="text" name="rent_price" value="<?php echo $room["rent_price"];?>" class="form-control">
					
				</div>
				
<!--************************************************************************************************-->	
				<div class="form-group">
					
						<h4 class="text"><b>Room Status :</b></h4> 
						<select name="room_status"  class="form-control">
							<option selected="selected"><?php echo $room["room_status"];?></option>
							<option>(available) </option>
							<option> ***request*** </option>
							<option> reserved </option>
							<option> booked </option>
							<option>[out_of_order] </option>	
						</select>	
				</div>


			
				<!-- edit room_image -->
				
				
				
<!--************************************************************************************************-->			
				<div class="form-group">
			
					<h4 class="text"><b>Room Image :</b></h4> 
					<input type="file" name="room_image" class="form-control">
			
				</div>
<!--***************************************************************************************************-->

						
				<div class="form-group">
				
					<h4 class="text"><b>Customer ID :</b></h4> 
					<input type="text" name="customer_id" value="<?php echo $room["customer_id"];?>" class="form-control">
					
				</div>
				
				<div class="form-group">
				
					<h4 class="text"><b>Customer Name :</b></h4> 
					<input type="text" name="customer_name" value="<?php echo $room["customer_name"];?>" class="form-control">
					
				</div>
				
				
<!--**************************************************************************************************-->			
				<div class="form-group">
					
					<h4 class="text"><b>Payment Status :</b></h4> 
					<select name="payment_status"  class="form-control">
						<option selected="selected"><?php echo $room["payment_status"];?></option>
						<option> Complete </option>
						<option> (due) </option>
						<option> (partial) </option>
						<option> </option>
					</select>		
				</div>
			
<br/>
<br/>
<br/>
				
				<div class="form-group text-center">	

<!--***************************************************************************************************-->
					<input type="hidden" name="room_no" value="<?php echo $room["room_no"];?>" class="form-control">
					<input type="hidden" name="prev_image" value="<?php echo $room["room_image"];?>" class="form-control">
					
<!--***************************************************************************************************-->		
					<input type="submit" class="btn btn-success" name="edit_Room" value=" Edit/Update Room Info " class="form-control">
				</div>
				
			</form>
		</td>
		
	</table>	
	
</div>



				<!-- edit room ends -->



<?php include 'manager_Footer.php';?>


