<?php
/**
 * Created by PhpStorm.
 * User: Grunkzilla
 * Date: 7/12/2018
 * Time: 8:26 PM
 */

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$formcontent = "From: $name \n Message: $message";
$recipient = "asplund.alex@gmail.com";
$subject = "Contact";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader);
echo "Thank You!";

?>