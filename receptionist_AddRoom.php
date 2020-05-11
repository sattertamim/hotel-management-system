<?php 

	include 'Receptionist_Header.php';

?>



				<!-- AddRoom starts -->



	<div class="center">
	
		<form method="post" enctype="multipart/form-data" action="../controllers/receptionist_RoomController.php" class="form-horizontal form-material">
		
			<div class="form-group">
			
				<h4 class="text"><b>Room Size(in Square):</b></h4> 
				<input type="text" name="size"  class="form-control" value=" sqr ">
				
			</div>
			
			<div class="form-group">
			
				<h4 class="text"><b>Number of Bed :</b></h4> 
				<input type="text" name="num_of_bed"  class="form-control">
				
			</div>
			
<!--**************************************************************************************************-->			
				<div class="form-group">
					
					<h4 class="text"><b>Room Type :</b></h4> 
					<select name="room_type"  class="form-control">
						<option selected="selected">***Choose***</option>
						<option> Small </option>
						<option> Medium </option>
						<option> Large </option>
						<option> VIP </option>
						<option> Deluxe </option>
						
					</select>		
				</div>	

			<div class="form-group">
			
				<h4 class="text"><b>Rent Price(per Day) :</b></h4> 
				<input type="text" name="rent_price"  class="form-control" value=" /-bdt ">
				
			</div>
			
			<div class="form-group">
			
				<h4 class="text"><b>Room Status :</b></h4> 
				<input type="radio" name="room_status" value="(available)" > (available) <br/>
				<input type="radio" name="room_status" value="***request***" > ***request*** <br/>
				<input type="radio" name="room_status" value="reserved" > reserved <br/>
				<input type="radio" name="room_status" value="booked" > booked <br/>
				<input type="radio" name="room_status" value="[out_of_order]" > [out_of_order] <br/>
				
			</div>
			
			
			
				<!-- add room_image -->
				
				
				
<!--************************************************************************************************-->			
			<div class="form-group">
			
			<h4 class="text"><b>Room Image :</b></h4> 
			<input type="file" name="room_image" class="form-control">
			
			</div>
<!--************************************************************************************************-->

		
			<div class="form-group">
			
				<h4 class="text"><b>Customer ID :</b></h4> 
				<input type="text" name="customer_id"  class="form-control">
				
			</div>
			
			<div class="form-group">
			
				<h4 class="text"><b>Customer Name :</b></h4> 
				<input type="text" name="customer_name"  class="form-control">
				
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
					
			<div class="form-group text-center">				
<!--************************************************************************************************-->					
				<input type="submit" class="btn btn-success" name="add_Room" value=" Add Room " class="form-control">
				
			</div>
			
		</form>
		
	</div>	
			


				<!-- AddRoom ends -->



<?php include 'Receptionist_Footer.php';?>


