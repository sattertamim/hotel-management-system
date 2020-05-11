<?php 
	 
	 
	 
	 require '../controllers/receptionist_RoomController.php';
	 	 
	 $r_room_no=$_GET["room_no"];
	 
	 $room = deleteRoom($r_room_no);


	  
?>