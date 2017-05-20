<?php
	include 'include/header.php'; ?>

	
<h2><center>Contact Me</center></h2>
	
 <div class="contactcontainer">
  <form action="/action_page.php">
	<center>
	
	<div class = "socialpages">
		<a href="mailto:gwendolencrane@gmail.com"><i class="fi-mail"></i></a>  
		<a href="https://twitter.com/GwendolenCrane"><i class="fi-social-twitter"></i></a>
		<a href=""><i class="fi-social-facebook"></i></a>
		<br>
	</div>
	
    <label for="fname">Name</label>
    <input type="text" id="fname" name="firstname" placeholder="Your name">

    <label for="lname">Email Address</label>
    <input type="text" id="lname" name="lastname" placeholder="Your email">

    <label for="subject">Message</label>
    <textarea id="subject" name="subject" placeholder="Your message" style="height:200px"></textarea>

    <input type="submit" value="Submit">
	</center>
  </form>
</div> 


<?php
	include 'include/footer.php'; ?>

