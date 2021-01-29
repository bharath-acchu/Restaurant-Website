<?php
	if(isset($_POST['submit'])){
		$name=$_POST['name'];
		$email=$_POST['email'];
		$text=$_POST['text'];

		$mailTo='bharath.sdupuc@gmail.com'; // Receiver Email ID, Replace with your email ID
		$subject='Form Submission';
		$message="Name :".$name."\n"."Wrote the following :"."\n\n".$text."\n"."email :" .$email;
		$headers="From: acchubharathacchu16@gmail.com";


		//ini_set('SMTP','myserver');
		//ini_set('smtp_port',25);


		if(mail($mailTo, $subject, $message, $headers)){
			//echo "<h1>Sent Successfully! Thank you"." ".$name.", Visit Again !!</h1>";
		}
		else{
			//echo "Something went wrong!";
		}
	}
?>