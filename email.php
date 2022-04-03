<?php
//get data from form  

$name = $_POST['name'];
$email= $_POST['email'];
$phone= $_POST['phone'];
$message= $_POST['message'];

$to = "theporchuganda@gmail.com";
$subject = "Mail From the porch uganda";
$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n Mobile number =" . $phone . "\r\n message =" . $message;
$headers = "From: noreply@theporchuganda.com" . "\r\n" .
"CC: somebodyelse@example.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:thankyou.html");
?>