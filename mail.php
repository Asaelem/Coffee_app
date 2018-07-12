<?php
/**
 * Created by PhpStorm.
 * User: Grunkzilla
 * Date: 7/11/2018
 * Time: 9:29 PM
 */

    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $formcontent = "From $name \n Message: $message";
    $recipient = "asplund.alex@gmail.com";
    $subject = "Contact Mail";
    $mailheader = "From: $email \r\n";
    mail($recipient, $subject, $formcontent, $mailheader);
    echo "Thank you!";

?>