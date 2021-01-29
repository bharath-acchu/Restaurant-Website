<!DOCTYPE html>
<html lang="en">
<head>
	<title>Contact Us</title>
	<meta charset="utf-8">
	<style>
		body {
			overflow-x : hidden;

		
			
  
        
}
		}
	</style>
	
	<meta name="author" content="pixelhint.com">
	<meta name="description" content="Sublime Stunning free HTML5/CSS3 website template"/>
	<link rel="stylesheet" type="text/css" href="css/reset.css">
	<link rel="stylesheet" type="text/css" href="css/fancybox-thumbs.css">
	<link rel="stylesheet" type="text/css" href="css/fancybox-buttons.css">
	<link rel="stylesheet" type="text/css" href="css/fancybox.css">
	<link rel="stylesheet" type="text/css" href="css/animate.css">
	<link rel="stylesheet" type="text/css" href="css/contact.css">
</head>
<body>

	<section class="billboard light">
		<header class="wrapper light">
			<a href="./index.html">><img class="logo" src="img/logo.png" alt="Beijing Chinese Restaurant Logo"/></a>
			<nav>
				<ul>
					<li><a href="./index.html">Home</a></li>
					<li><a href="./menu.html">Menu</a></li>
					<li><a href="./karaoke.html">Karaoke/Party</a></li>
					<li><a href="./promotions.html">Promotions/Events</a></li>
					<li><a href="./index.php">Table Reservation</a></li>
					<li><a href="./contact.php">Contact Us</a></li>
				</ul>
			</nav>
		</header>

		<div class="caption light animated wow fadeInDown clearfix">
			<h1>Come talk to us</h1>
			<p>We always value your words.</p>
			<hr>
		</div>
		<div class="shadow"></div>
	</section><!--  End billboard  -->


	<section class="services wrapper">
		<ul class="clearfix">
			<li class="animated wow fadeInDown">
				<iframe width="600" height="450" frameborder="0" style="border:0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3885.1803033959723!2d77.60779461463696!3d13.151024214474468!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae192ddf1ae00d%3A0xa150c6dea93315c!2sSir%20M.%20Visvesvaraya%20Institute%20of%20Technology!5e0!3m2!1sen!2sin!4v1608017599171!5m2!1sen!2sin"></iframe>
				<span class="separator"></span>
			</li>
			<li class="animated wow fadeInDown"  data-wow-delay=".2s">
				<img class="icon" src="img/icon2.png" alt=""/>
				<span class="separator"></span>
				<h2>How to reach us:</h2>
				<p>Phone No. 9110430876/9945392424</p>
				<p>mail id:  carl.restaurant1623@gmail.com@gmail.com</p>
				<p>Address : Carl Restaurant, near yelhanka, Bangalore, 561203</p>
				<!-- Google maps embed here -->
			</li>
		</ul>
	</section><!--  End services  -->


	<section class="video">
		<img class="logo" src="img/logo.png" alt="Restaurant welcomes you" class="video_logo animated wow fadeInDown"/>
		<img src="img/video_logo.png" alt="" class="video_logo animated wow fadeInDown"/>
		<h3 class="animated wow fadeInDown">Please send us your opinions in the form below, thank you!</h3>

	</section><!--  End video  -->
	
	<!-- contact form -->


	<!-- php code-->
	<?php
	if(isset($_POST['submit'])){
		$name=$_POST['name'];
		$email=$_POST['email'];
		$text=$_POST['text'];

		$mailTo='bharath.sdupuc@gmail.com'; // Receiver Email ID, Replace with your email ID
		$subject='Form Submission';
		$message="Name :".$name."\n"."Wrote the following :"."\n\n".$text."\n"."email :" .$email;
		$headers="From: carl.restaurant1623@gmail.com";


		
		if(mail($mailTo, $subject, $message, $headers)){


			echo "<h3><center>Form Sent Successfully! Thank you"." ".$name.", Visit Again !!</center></h3>";
		}
		else{
			echo "<h3><center>Something went wrong!</center></h3>";
		}
	   }
    ?>






	<!--php code ends -->
	<section class="contact">
		<div id="form-main">
		  <div id="form-div">
		    <form class="form" id="form1" action=""  method="POST">
		      
		      <p class="name">
		        <input name="name" type="text" class="validate[required,custom[onlyLetter],length[0,100]] feedback-input" placeholder="Name" id="name" />
		      </p>
		      
		      <p class="email">
		        <input name="email" type="text" class="validate[required,custom[email]] feedback-input" id="email" placeholder="Email" />
		      </p>
		      
		      <p class="text">
		        <textarea name="text" class="validate[required,length[6,300]] feedback-input" id="comment" placeholder="Comment"></textarea>
		      </p>
		      
		      
		      <div class="submit">
		        <input type="submit" name= "submit" value="SEND" id="button-blue"/>
		        <div class="ease"></div>
		      </div>

			  
		    </form>
			
	    </div>
	</section>
	
	<footer>
		<div class="wrapper">
			<div class="rights">
				<p>All Rights Reserved 2020 - Carl Restaurant</p>
			</div>

			<nav>
				<ul>
					<li><a href="#">Home</a></li>
					<li><a href="./menu.html">Menu</a></li>
					<li><a href="./karaoke.html">Karaoke/Party</a></li>
					<li><a href="./promotions.html">Promotions/Events</a></li>
					<li><a href="./contact.html">Contact Us</a></li>
				</ul>
			</nav>
		</div>		
	</footer><!--  End footer  -->
	<script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/fancybox.js"></script>
    <script type="text/javascript" src="js/fancybox-buttons.js"></script>
    <script type="text/javascript" src="js/fancybox-media.js"></script>
    <script type="text/javascript" src="js/fancybox-thumbs.js"></script>
    <script type="text/javascript" src="js/wow.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
</body>
</html>

	


	


