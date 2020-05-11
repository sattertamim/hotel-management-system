<?php 
	  
	  
	  
	  require_once ('../controllers/guest_CustomerController.php');
	  
	  $r_customer_id = $_GET["customer_id"];
	  
	  $customer = deleteCustomer($r_customer_id);
	  

	  
?>