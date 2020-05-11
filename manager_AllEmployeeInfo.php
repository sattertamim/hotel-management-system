<?php 

	include 'manager_Header.php';
	
	require '../controllers/manager_EmployeeController.php';
	
	$employee_information = getAllEmployeeInfo();
	
	//echo "<pre>";
	//print_r($employee_information);
	//echo "</pre>";
	
?>



				<!--All employee_information starts -->



<div >

	<h2 class="text" ><b><u> All Employee' Information of HOTEL TAJ : </u></b></h2>
	
<br/>
<br/>
<br/>
	
	<table class="table table-striped">
		<thead>
		
			<th></th>
			<th></th>
			
			<th><u> Employee ID </u></th>
			<th><u> Employee Name </u></th>
			<th><u> Employee Address </u></th>
			<th><u> Email Address </u></th>
			<th><u> Contact No. </u></th>
			<th><u> employee_position </u></th>
			<th><u> Salary </u></th>
			<th><u> Payment Status </u></th>
		
			<th></th>
			
			<th></th>	
			<th></th>
			
		</thead>
		
		<tbody>
			<?php
				foreach($employee_information as $employee)
				{
					echo "<tr>";
						
						echo "<td>"."</td>";
						echo "<td>"."</td>";
							
							echo "<td>".$employee["employee_id"]."</td>";
							echo "<td>".$employee["employee_name"]."</td>";
							echo "<td>".$employee["employee_address"]."</td>";
							echo "<td>".$employee["email_address"]."</td>";
							echo "<td>".$employee["contact_no"]."</td>";
							echo "<td>".$employee["employee_position"]."</td>";
							echo "<td>".$employee["salary"]."</td>";
							echo "<td>".$employee["payment_status"]."</td>";
							
						echo "<td>"."</td>";
						
//**************************************************************************************************	
							echo '<td><a href="manager_ViewEmployeeInfo.php?employee_id='.$employee["employee_id"].'" class="btn btn-primary">View</a></td>';
							
							echo '<td><a href="manager_EditEmployee.php?employee_id='.$employee["employee_id"].'" class="btn btn-success">Edit</a></td>';
						
							echo '<td><a href="manager_DeleteEmployee.php?employee_id='.$employee["employee_id"].'" class="btn btn-danger">Delete</a></td>';

						
					echo "</tr>";
			
				}
			?>
			
		</tbody>
		
	</table>
	
</div>



				<!-- Employee_information ends -->



<?php include 'manager_Footer.php';?>


