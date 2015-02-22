<?php

echo "start";
$mail = new PHPMailer();
$mail->IsSMTP();
$mail->Mailer = 'smtp';
$mail->SMTPAuth = true;
$mail->Host = 'smtp.gmail.com'; 
$mail->Port = 465;
$mail->SMTPSecure = 'ssl';


$mail->Username = "coryierso@gmail.com";
$mail->Password = "coryscott0141";

$mail->IsHTML(true); // if you are going to send HTML formatted emails
$mail->SingleTo = true; // if you want to send a same email to multiple users. multiple emails will be sent one-by-one.

$mail->From = "coryierso@gmail.com";
$mail->FromName = "coryierso";

$mail->addAddress("coryierso@gmail.com","Cory"");

$mail->Subject = "Testing PHPMailer with localhost";
$mail->Body = "Hi,<br /><br />This system is working perfectly.";

if(!$mail->Send())
    echo "Message was not sent <br />PHPMailer Error: " . $mail->ErrorInfo;
else
    echo "Message has been sent";

?>
