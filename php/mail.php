<?php
//get data from form  
$name = $_POST['name'];
$email= $_POST['email'];
$message= $_POST['message'];
$to = "monir.neat@mail.com";
$subject = "Mail From website";
$txt ="Name = ". $name . "\r\n  Email = " . $email ."Project = ". $project . "\r\n Message =" . $message;
$headers = "From: contact@an7dro1.com" . "\r\n" .
"CC: arshirahaman0192343@gmail.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:thankyou.html");
?>