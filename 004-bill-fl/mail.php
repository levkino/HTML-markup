<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require('phpmailer/src/Exception.php');
require('phpmailer/src/PHPMailer.php');
require('phpmailer/src/SMTP.php');

// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);
$mail->CharSet = 'UTF-8';

try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = '';                     // SMTP username
    $mail->Password   = '';                               // SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

    //Recipients
    $mail->setFrom('vasya.derenko@gmail.com', '4bill');
    $mail->addAddress('sakhnodw@gmail.com ', '');

    // Content
    $mail->isHTML(true); // Set email format to HTML
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $site = isset($_POST['site']) ? $_POST['site'] : '';
    $company = isset($_POST['company-name']) ? $_POST['company-name'] : '';
    $message = isset($_POST['message']) ? $_POST['message'] : '';
    $money_circulation = isset($_POST['money-circulation']) ? $_POST['money-circulation'] : '';
    $payment_decision = $_POST['payment-decision'];

    $mail->Subject = 'Заявка с сайта 4bill';
    $mail->Body    = "
    <h2> Заявка с сайта 4bill</h2> 
    <hr/>
    <h2> Имя,Фамилия: $name </h2> </br>
    <hr/>
    <h2> E-mail: $email </h2> </br>
    <hr/>
    <h2> Телефон: $phone </h2> 
    <hr/>
    <h2> Сайт: $site </h2> 
    <hr/>
    <h2> Название компании: $company </h2> 
    <hr/>
    <h2> Ежемесячный оборот: $money_circulation </h2> 
    <hr/>
    <h2> Платежные решения в которых заинтересован: $payment_decision </h2> 
    <hr/>
    <h2> Сообщение: $message </h2>
    ";
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}