<?php 

	include 'Receptionist_Header.php';
	
//*************************************************************************************	
	require_once ('../controllers/receptionist_CustomerController.php');
	require_once ('../controllers/receptionist_RoomController.php');
	
	
//*************************************************************************************	
	$room_information= getAllRoomInfo();
	
	
	$t_customer_information=count(getAllCustomerInfo());
	$t_room_information=count(getAllRoomInfo());
	
?>



				<!-- Receptionist_dashboard starts -->



<div>
	<table  align="center">
		<tr>
			<td>
			
				<div class="card">
				
				<span class="text-white"><u> Total Customers </u><br>
					<?php echo $t_customer_information;?>
				</span>
				
				</div>
				
			</td>
			
			<td>
			
				<div class="card">
				
				<span class="text-white"><u> Total Rooms </u><br>
					<?php echo $t_room_information;?>
				</span>
				
				</div>
				
			</td>
			
			<td>
				<div class="card">
				
				<span class="text-white"><u> Total Booking </u><br>
					5
				</span>
				
				</div>
				
			</td>
			
		</tr>
		
	</table>
	
</div>


<div class="center">

<br/>
<br/>

	<h2 class="text"><b><u> Recent Booking : </u></b></h2>
	
<br/>
<br/>
	
	<table class="table table-striped">
	
		<thead>
		
			<th><u> Room No. </u></th>
			<th><u> Room Status </u></th>
			<th><u> Customer ID </u></th>
			<th><u> Customer Name </u></th>
			<th><u> Payment Status </u></th>
			<th><u> Booking Date </u></th>
			
		</thead>
		
		<tbody>
		
			<?php
			
				foreach($room_information as $room)
				{
					
					echo "<tr>";
					
						echo "<td>".$room["room_no"]."</td>";
						echo "<td>".$room["room_status"]."</td>";
						echo "<td>".$room["customer_id"]."</td>";
						echo "<td>".$room["customer_name"]."</td>";
						echo "<td>".$room["payment_status"]."</td>";
						
					echo "<td>"."</td>";
					

						echo '<td><a href="receptionist_ViewRoomInfo.php?room_no='.$room["room_no"].'" class="btn btn-primary">View</a></td>';
						
					echo "</tr>";
					
				}
				
			?>
			
		</tbody>
		
	</table>
	
</div>



				<!-- Receptionist_dashboard ends -->




<?php include 'Receptionist_Footer.php'; ?>


