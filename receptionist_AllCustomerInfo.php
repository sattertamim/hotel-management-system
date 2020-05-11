<?php 

	include 'Receptionist_Header.php';
	
	require '../controllers/receptionist_CustomerController.php';
	
	$customer_information = getAllCustomerInfo();
	
	//echo "<pre>";
	//print_r($customer_information);
	//echo "</pre>";
	
?>



				<!--All customer_information starts -->



<div >

	<h2 class="text" ><b><u> All Customers' Information of HOTEL TAJ : </u></b></h2>
	
<br/>
<br/>
<br/>
	
	<table class="table table-striped">
		<thead>
		
			<th></th>
			<th></th>
			
			<th><u> Customer ID </u></th>
			<th><u> Customer Name </u></th>
			<th><u> Customer Address </u></th>
			<th><u> Email Address </u></th>
			<th><u> Contact No. </u></th>
			<th><u> Booked Room_No. </u></th>
			<th><u> Payment Status </u></th>
		
			<th></th>
			
			<th></th>	
			<th></th>
			
		</thead>
		
		<tbody>
			<?php
				foreach($customer_information as $customer)
				{
					echo "<tr>";
						
						echo "<td>"."</td>";
						echo "<td>"."</td>";
							
							echo "<td>".$customer["customer_id"]."</td>";
							echo "<td>".$customer["customer_name"]."</td>";
							echo "<td>".$customer["customer_address"]."</td>";
							echo "<td>".$customer["email_address"]."</td>";
							echo "<td>".$customer["contact_no"]."</td>";
							echo "<td>".$customer["booked_room_no"]."</td>";
							echo "<td>".$customer["payment_status"]."</td>";
							
						echo "<td>"."</td>";
						
//**************************************************************************************************	
							echo '<td><a href="receptionist_ViewCustomerInfo.php?customer_id='.$customer["customer_id"].'" class="btn btn-primary">View</a></td>';
							
							echo '<td><a href="receptionist_EditCustomer.php?customer_id='.$customer["customer_id"].'" class="btn btn-success">Edit</a></td>';
						
							echo '<td><a href="receptionist_DeleteCustomer.php?customer_id='.$customer["customer_id"].'" class="btn btn-danger">Delete</a></td>';

						
					echo "</tr>";
			
				}
			?>
			
		</tbody>
		
	</table>
	
</div>



				<!-- customer_information ends -->



<?php include 'Receptionist_Footer.php';?>


