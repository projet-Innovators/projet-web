<?php

$mailto = $_POST['mail_to'];
$mailSub = 'livraison';
$mailMsg = 'votre livraison a été effectué avec succés un livreur a proximité va vous contacter sur telephone';
require 'PHPMailer-master/PHPMailerAutoload.php';
$mail = new PHPMailer();
$mail->IsSmtp();
$mail->SMTPDebug = 0;
$mail->SMTPAuth = true;
$mail->SMTPSecure = 'ssl';
$mail->Host = "smtp.gmail.com";
$mail->Port = 465; // or 587
$mail->IsHTML(true);
$mail->Username = "";
$mail->Password = "";
$mail->SetFrom("");
$mail->Subject = $mailSub;
$mail->Body = $mailMsg;
$mail->AddAddress($mailto);

if (!$mail->Send()) {
    echo "Mail Not Sent to ";
} else {
    echo "Mail Sent";
}
?>





   

