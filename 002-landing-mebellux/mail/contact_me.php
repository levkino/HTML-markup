<?php

// Check for empty fields
if(
      empty($_POST['emailBody'])
//      || empty($_POST['email'])
//      || empty($_POST['phone'])
//      || empty($_POST['message'])
//      || !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)
){
   echo "No arguments Provided!";
   return false;
   }
   
//$name = strip_tags(htmlspecialchars($_POST['name']));
//$email_address = strip_tags(htmlspecialchars($_POST['email']));
//$phone = strip_tags(htmlspecialchars($_POST['phone']));
//$message = strip_tags(htmlspecialchars($_POST['message']));
$emailBody = strip_tags(htmlspecialchars($_POST['emailBody']));

// Create the email and send the message
$to = 'mebellux.spb@gmail.com';
//$to = 'gexo7777@gmail.com';

$email_subject = "Website Contact Form: Mebellux.shop";
$email_body = $emailBody;
$headers = "From: no-reply@mebellux.shop\n";
$headers .= "Content-Type: text/html; charset=UTF-8";
//$headers .= "Reply-To: $email_address";
mail($to,$email_subject,$email_body,$headers,   "-fno-reply@mebellux.shop");
echo 'done';
?>
