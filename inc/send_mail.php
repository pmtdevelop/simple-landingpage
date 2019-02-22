<?php

define( 'ROOT', dirname(dirname(__FILE__)) . '/' );

require_once "./lib/PHPMailer/src/PHPMailer.php";
require_once "./lib/PHPMailer/src/Exception.php";
require_once "./lib/PHPMailer/src/OAuth.php";
require_once "./lib/PHPMailer/src/POP3.php";
require_once "./lib/PHPMailer/src/SMTP.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

function sendMail($mail_host,$mail_port,$title, $content,$nFrom, $mFrom,$mPass, $nTo, $mTo){


    $mail             = new PHPMailer();
    $body             = $content;
    $mail->IsSMTP();
    $mail->CharSet   = "utf-8";
    $mail->SMTPDebug  = 2;                     // enables SMTP debug information (for testing)
    $mail->SMTPAuth   = true;                    // enable SMTP authentication
    $mail->SMTPSecure = "ssl";                 // sets the prefix to the servier
    $mail->Host       = $mail_host;
    $mail->Port       = $mail_port;
    $mail->Username   = $mFrom;               // GMAIL username
    $mail->Password   = $mPass;               // GMAIL password
    $mail->SetFrom($mFrom, $nFrom);

    $mail->Subject    = $title;
    $mail->MsgHTML($body);
    $address = $mTo;
    $mail->AddAddress($address, $nTo);
    $mail->AddReplyTo('info@freetuts.net', 'Freetuts.net');
    if(!$mail->Send()) {
        return 0;
    } else {
        return 1;
    }
}

?>