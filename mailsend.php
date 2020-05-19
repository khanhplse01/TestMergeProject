<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

if (isset($_POST['submit'])){
	$name= $_POST['name'];
    $email = $_POST['email'];
    $phone =  $_POST['phone'];
	$message= $_POST['message'];

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = 0;//SMTP::DEBUG_SERVER;  
    $mail->CharSet ="UTF-8";                    // Enable verbose debug output
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'yourmail@gmail.com';                     // SMTP username
    $mail->Password   = 'yourpass';                               // SMTP password
    $mail->SMTPSecure = 'tls';//PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

    //Recipients
    $mail->setFrom($email, $name);
    $mail->addAddress('Receive mail', 'Nguyen Truong');     // Add a recipient
    $mail->addAddress('email to send information that we receive ');               // Name is optional
    $mail->addReplyTo('replymail', 'Information');
    //$mail->addCC('cc@example.com');
    //$mail->addBCC('bcc@example.com');

    // Attachments
    //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    // Content

    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Yêu cầu tư vấn BDS Vivapark';
    $mail->Body    = 'Họ và tên: ' .$name  . "<br>". 'Email: ' .$email  ."<br>". 'Số điện thoại: ' .$phone ."<br>". 'Nội dung: ' .$message ;
    //$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    // echo '<script language="javascript">';
    // echo 'alert("Cảm ơn bạn đã liên hệ với chúng tôi. Chúng tôi sẽ liên hệ cho bạn sớm nhất.")';
    // echo '</script>';
    echo ("<script LANGUAGE='JavaScript'>
    window.alert('Cảm ơn bạn đã liên hệ với chúng tôi. Chúng tôi sẽ liên hệ cho bạn sớm nhất.');
    window.location.href='http://localhost/BDSProject';
    </script>");
} catch (Exception $e) {
    echo "Gửi không thành công !! ";
}}
else {
	echo "Gửi không thành công";
}