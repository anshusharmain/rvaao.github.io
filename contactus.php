<?php
//get data from form  

$name = $_POST['name'];
$email= $_POST['email'];
$message= $_POST['message'];
$phonenumber= $_POST['phonenumber'];
$to = "rvaao@yahoo.com";
$subject = "Mail from rvaao contect page";
$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n Message =" . $message ."\r\n Phone Number = " . $phonenumber .";
$headers = "From: noreply@yoursite.com" . "\r\n" .
"CC: somebodyelse@example.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:index.html");
?>