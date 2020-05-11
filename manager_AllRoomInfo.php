<?php 

	include 'manager_Header.php';
	
	include '../controllers/manager_RoomController.php';
	
	$room_information= getAllRoomInfo();
	
?>



				<!-- All room_information starts -->



<div >

	<h2 class="text"><b><u> All Rooms' Information of HOTEL TAJ : </u></b></h2>
	
<br/>
<br/>
<br/>	
	
	<table class="table table-striped" >
	
		<thead>
		
			<th></th>
			<th></th>
			
			<th><u> Room No. </u></th>
			<th><u> Room_Size(in Square) </u></th>
			<th><u> Number of Bed </u></th>
			<th><u> Room Type </u></th>
			<th><u> Rent_Price(per Day) </u></th>
			<th><u> Room Status	</u></th>
			<th><u> Customer ID </u></th>
			<th><u> Customer Name </u></th>
			<th><u> Payment Status </u></th>
		
			<th></th>
			
			<th></th>		
			<th></th>
					
		</thead>
		
		<tbody>
		
			<?php
				foreach($room_information as $room)
				{
					echo "<tr>";
						
					echo "<td>"."</td>";
					echo "<td>"."</td>";
						
						echo "<td>".$room["room_no"]."</td>";
						echo "<td>".$room["size"]."</td>";
						echo "<td>".$room["num_of_bed"]."</td>";
						echo "<td>".$room["room_type"]."</td>";
						echo "<td>".$room["rent_price"]."</td>";
						echo "<td>".$room["room_status"]."</td>";
						echo "<td>".$room["customer_id"]."</td>";
						echo "<td>".$room["customer_name"]."</td>";
						echo "<td>".$room["payment_status"]."</td>";
						
					echo "<td>"."</td>";
					
//**************************************************************************************************												
						echo '<td><a href="manager_ViewRoomInfo.php?room_no='.$room["room_no"].'" class="btn btn-primary">View</a></td>';
						
						echo '<td><a href="manager_EditRoom.php?room_no='.$room["room_no"].'" class="btn btn-success">Edit</a></td>';
						
						echo '<td><a href="manager_DeleteRoom.php?room_no='.$room["room_no"].'" class="btn btn-danger">Delete</td>';
						
					echo "</tr>";
				}
			?>
			
		</tbody>
		
	</table>
	
</div>



				<!-- All room_information ends -->



<?php include 'manager_Footer.php';?>


