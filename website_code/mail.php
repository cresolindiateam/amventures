<?php

$to = "shubhamshrivastava245@gmail.com";
$subject = "Response from web";
$message = "I am thankful";
$headers = "From: shubhamshrivastava245@gmail.com";

if(mail($to, $subject, $message, $headers )){
	echo "success";

	else{
		echo "can not send";
	}
}

?>