<?php 
	 
	 
	 
	 require '../controllers/manager_RoomController.php';
	 	 
	 $r_room_no=$_GET["room_no"];
	 
	 $room = deleteRoom($r_room_no);


	  
?>