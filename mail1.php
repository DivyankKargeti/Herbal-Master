<?php 

 if(isset($_POST['submit']))
 {
 	$name = $_POST['fname'];
 	$cont = $_POST['lname'];
 	$email = $_POST['email'];
 	$msg = $_POST['message'];

 	$to = 'hdrdivyank@gmail.com';
 	$subject1 = 'Herbal Garden | Form Submission';
 	$message1 = "Name: ".$name."\n"."Message:".$msg."\n"."Contact No:".$cont;
 	$header  = "From: ".$email;

 	if(mail($to, $subject1, $message1, $header))
 	{
 		?>
 		<script>alert('Message Sent Successfully,Thanks for contacting me!');
     window.open('index.html','_self'); 
 	</script>
 		<?php
     	}
 	else
 	{
 		echo "wrong";
 	}
 }
 ?>