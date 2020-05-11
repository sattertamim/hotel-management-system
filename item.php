<?php
	
	include 'main_header.php';
	
//	require_once("../controllers/receptionist_RoomController.php");
	
//(not sure, will it work ?	incase we dont have access to the Receptionist.
//***********************************************************************************************************	
	require_once("../controllers/manager_RoomController.php");	
	
	 $r_room_no=$_GET["room_no"];
	 
	 $room=getRoom($r_room_no);
	 
?>

<!--item starts -->

<!--************************************************************************************************ -->
	<div class="center">
		
				<h1 class="text text-center"><b><u>***ROOM INFORMATION***</b></u></h1>

		<table >
			
			<tr>
				<td align="center">
					<img class="item-image" src="<?php echo $room["room_image"];?>"></img>
					
					<div class="add-to-cart"><span><a href="signup.php" class="btn btn-primary" style="width:185px;font-family:consolas;margin-top:5px;">Sign-Up to Book Now !</a></span></div>
					<div class="add-to-cart"><span><a href="login.php" class="btn btn-success" style="width:185px;font-family:consolas;margin-top:5px;">Book Now</a></span></div>
				</td>
				
				
				<td align="right">	

					<div class="form-group">
						<h3 class="text"><b>Room No	:</b>
						<i><input type="button" name="room_no" value="<?php echo $room["room_no"];?>" style="width:185px;font-family:consolas;margin-top:5px;" class="form-control"> </i></h3>	
					</div>
					
					<div class="form-group">
						<h4 class="text"><b>Room Size(in Square):</b></h4>
						<input type="button" name="size" value="<?php echo $room["size"];?>" style="width:185px;font-family:consolas;margin-top:5px;" class="form-control">	
					</div>
					
					<div class="form-group">
						<h4 class="text"><b>Number of Bed :</b></h4>
						<input type="button" name="num_of_bed" value="<?php echo $room["num_of_bed"];?>" style="width:185px;font-family:consolas;margin-top:5px;" class="form-control"> 	
					</div>
					
					<div class="form-group">
						<h4 class="text"><b>Room Type :</b></h4>
						<input type="button" name="room_type" value="<?php echo $room["room_type"];?>" style="width:185px;font-family:consolas;margin-top:5px;" class="form-control"> 	
					</div>
					
					<div class="form-group">
					
						<h4 class="text"><b>Rent Price(per Day):</b></h4> 
						<input type="button" name="rent_price" value="<?php echo $room["rent_price"];?>" style="width:185px;font-family:consolas;margin-top:5px;" class="form-control">
						
					</div>
					
					<div class="form-group">
					
						<h4 class="text"><b>Room Status :</b></h4> 
						<input type="button" name="room_status" value="<?php echo $room["room_status"];?>" style="width:185px;font-family:consolas;margin-top:5px;" class="form-control">
						
					</div>
													
<br/>
<br/>
<br/>
									
					<div class="form-group text-center">

<!--*************************************************************************************************-->					
					<input type="hidden" name="room_no" value="<?php echo room["room_no"];?>" class="form-control">
					<input type="hidden" name="prev_image" value="<?php echo $room["room_image"];?>" class="form-control">	
					
<!--*************************************************************************************************-->								
					</div>
				
				
			</td>
		</tr>	
	</table>
		
</div>




<!--item ends -->

<?php include 'main_footer.php';?>