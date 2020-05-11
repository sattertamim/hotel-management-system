<?php 

	include 'main_header.php';
	
//	require_once("../controllers/receptionist_RoomController.php");
	
//(not sure, will it work ?	incase we dont have access to the Receptionist.
//***********************************************************************************************************	
	require_once("../controllers/manager_RoomController.php");

	
	$room_information = getAllRoomInfo();
	
?>

<!-- room_information starts -->

<!-- ********************************************************************************************************* -->
   <div id="first">
        <h1>WELCOME  TO <br> <span class="ct">HOTEL TAJ</span></h1>
        <p style="color:white">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus, consequatur.
        </p>
        <button class="bt">Read more</button>
    </div>
	
	<section id="aboutus">
<div class="container1">
  <div style="text-align:center">
    <h1 style="color:green">About Us</h1>
    <p>Swing by for a cup of coffee, or leave us a message:</p>
  </div>
  <div class="row">
    <div class="column1">
      <img src="../storage/room_image/medium_2.jpg" style="width:100%">
    </div>
    <div class="column1">
     <p>
		Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
		Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
		Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
		Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
	 </p>
    </div>
  </div>
</div>
</section>
             <section id="gallery">
       <h1>OUR SERVICES</h1>
        <div class="container">
            <img src="../storage/room_image/large_1.jpg" alt="">
            <h3>
                Small Room
            </h3>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est, inventore
            </p>
        </div>
        <div class="container">
             <img src="../storage/room_image/medium_2.jpg" alt="">
            <h3>
                Medium Room
            </h3>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est, inventore
            </p>
        </div>
        <div class="container">
             <img src="../storage/room_image/small_1.jpg" alt="">
            <h3>
                Large Room
            </h3>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est, inventore
            </p>
        </div>
    </section>
    
     <section id="client">
       <h1>OUR HAPPY CLIENTS</h1>
       <h4>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia, quae.</h4>
        <div class="cont">
            <img src="../storage/room_image/photo4.jpg" alt="">
            <h2>
                Jhon Doe
            </h2>
            <h3>Business Man</h3>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est, inventore?
            </p>
        </div>
        <div class="cont">
             <img src="../storage/room_image/photo2.jpg" alt="">
             <h2>David Smith</h2>
            <h3>
                Doctor
            </h3>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est, inventore?
            </p>
        </div>
        <div class="cont">
             <img src="../storage/room_image/ema.jpg" alt="">
             <h2>Ema Watson</h2>
            <h3>
                Actress
            </h3>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est, inventore?
            </p>
        </div>
         
    </section>   
<section id="contact">
<div class="container1">
  <div style="text-align:center">
    <h1 style="color:green">Contact Us</h1>
    <p>Swing by for a cup of coffee, or leave us a message:</p>
  </div>
  <div class="row">
    <div class="column1">
      <img src="../storage/room_image/medium_2.jpg" style="width:100%">
    </div>
    <div class="column1">
      <form action="/action_page.php">
        <label for="fname">Name</label>
        <input type="text" id="fname" name="firstname" placeholder="Your name..">
        <label for="lname">Email</label>
        <input type="text" id="email" name="lastname" placeholder="Your email..">
        <label for="subject">Subject</label>
        <textarea id="subject" name="subject" placeholder="Write something.." style="height:170px"></textarea>
        <input type="submit" value="Submit">
      </form>
    </div>
  </div>
</div>
</section>

	
<!-- room_information ends -->

<?php include 'main_footer.php';?>