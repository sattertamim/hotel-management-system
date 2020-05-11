<?php 
	  
	  
	  
	  require_once ('../controllers/manager_EmployeeController.php');
	  
	  $r_employee_id = $_GET["employee_id"];
	  
	  $employee = deleteEmployee($r_employee_id);
	  

	  
?>