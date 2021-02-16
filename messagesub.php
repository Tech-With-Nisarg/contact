<?php
//get data from form  
$name = $_POST['name'];
$email= $_POST['email'];
$phone= $_POST['phone'];
$subject1= $_POST['subject1'];
$message= $_POST['message'];

$to = "nisargshah933@gmail.com";
$subject = "Mail From website";
$txt ="Name: ". $name . "\r\n  Email: " . $email . "\r\n Email: " . $phone . "\r\n Email: " . $subject1 . "\r\n Message:" . $message;
$headers = "$email" . "\r\n" .
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:message-sent.html");
?>