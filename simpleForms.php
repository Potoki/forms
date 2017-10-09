<?php 

 if (isset($_POST['contact_name']) && isset($_POST['contact_email']) && isset($_POST['contact_email'])) {
 	$contact_name = $_POST['contact_name'];
 	$contact_email = $_POST['contact_email'];
 	$contact_text = $_POST['contact_text'];
 	
 	if (!empty($contact_name) && !empty($contact_email) && !empty($contact_text)) {
 			if(strlen($contact_name)>25 || strlen($contact_email)>50 || strlen($contact_text)>100){
 					echo 'Sorry max lenght for some fields have been exceeded';
 				}else{
 		$to = 'potokipaul@gmail.com';
 		$subject = 'Contact form submitted';
 		$body = $contact_name."\n".$contact_text;
 		$headers = 'From: '.$contact_email;

 		if(@mail($to, $subject, $body, $headers)){
 			echo 'Thanks for subscribing. We\'ll be in touch with you soon.';
 		}else{
 			echo 'Sorry an error occured. Please try again later';
 		}
 	  }
 	}else{
		echo 'All fields are required';
 	}
 }

?>
<form action="simpleForms.php" method="POST">
	Name: <br>
	<input type="text" name="contact_name" maxlength="25"><br><br>
	Email: <br>
	<input type="text" name="contact_email" maxlength="50"><br><br>
	Message: <br>
	<textarea name="contact_text" rows="6" cols="30" maxlength="1000"></textarea><br><br>
	<input type="submit" value="Submit">
</form>