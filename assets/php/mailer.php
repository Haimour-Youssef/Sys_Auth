a<?php

namespace authentification;
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';



//Create an instance; passing `true` enables exceptions
function sendmeil($ClientMail, $code, $name = null, $phone = null)
{
    $mail = new PHPMailer(true);

    try {
        //Server settings
        $mail->SMTPDebug = SMTP::DEBUG_SERVER;                    //Enable verbose debug output
        $mail->isSMTP();                                          //Send using SMTP
        $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                 //Enable SMTP authentication
        $mail->Username   = 'example@gmail.com';              //SMTP username
        $mail->Password   = 'pop';                   //SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;          //Enable implicit TLS encryption
        $mail->Port       = 465;                                  //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
        $mail->SMTPOptions = array(
            'ssl' => array(
                'verify_peer' => false,
                'verify_peer_name' => false,
                'allow_self_signed' => true
            )
        );
        if ($name == null && $phone == null) {
            // cette block pour les inscription
             //Recipients
        $mail->setFrom('example@gmail.com', 'ICNS');
        // $mail->addAddress('joe@example.net', 'Joe User');     //Add a recipient
        $mail->addAddress("$ClientMail");                        //Name is optional
        $mail->addReplyTo('example@gmail.com', 'ICNS');
        // $mail->addAttachment('../confirmations/mailings/confirmation-presentiel/Frais_d_inscription.pdf', 'Frais d\'inscription.pdf'); 
        $mail->isHTML(true);                                     //Set email format to HTML 
        $mail->Subject = utf8_decode('FORMATION CERTIFIANTE MICRONUTRITION & CANCER');
        $mail->Body    = utf8_decode($code);
        $mail->AltBody = 'FORMATION CERTIFIANTE MICRONUTRITION & CANCER';
        }else{
            // cette block pour contactez nous
        $mail->setFrom("$ClientMail", "$name");
        // $mail->addAddress('joe@example.net', 'Joe User');     //Add a recipient
        $mail->addAddress("example@gmail.com");                        //Name is optional
        $mail->addReplyTo("$ClientMail", "$name");
        $mail->isHTML(true);                                     //Set email format to HTML 
        $mail->Subject = utf8_decode('FORMATION CERTIFIANTE MICRONUTRITION & CANCER');
        $mail->Body    = utf8_decode($code);
        $mail->AltBody = 'FORMATION CERTIFIANTE MICRONUTRITION & CANCER';
        }
       

        $mail->send();
        return 'true';
    } catch (Exception $e) {
        return "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}
