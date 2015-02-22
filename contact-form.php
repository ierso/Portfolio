<!DOCTYPE html> <html class=no-js> <head> <meta charset=utf-8> <title>Cory Pierson</title> <meta name=description content=""> <meta name=viewport content="width=device-width"> <link rel="shortcut icon" href=/67e7905b.favicon.ico> <!-- Place favicon.ico and apple-touch-icon.png in the root directory --> <link rel=stylesheet href=styles/c0c76c78.vendor.css> <link rel=stylesheet href=styles/882e05b6.main.css> <script src=scripts/vendor/fbe20327.modernizr.js></script>  <body> <!--[if lt IE 10]>
      <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]--> <nav class="navbar navbar-default"> <div class=container> <div class=navbar-header> <button type=button class="navbar-toggle collapsed" data-toggle=collapse data-target=#navbar aria-expanded=false aria-controls=navbar> <span class=sr-only>Toggle navigation</span> <span class=icon-bar></span> <span class=icon-bar></span> <span class=icon-bar></span> </button> <a class=navbar-brand href="./"> <img class=img-responsive src=images/26c66e74.logoOrange.png alt=logo> </a> </div> <div id=navbar class="navbar-collapse collapse"> <ul class="nav navbar-nav navbar-right"> <li><a href="./">Portfolio</a></li> <li><a href=resume.html>Resume</a></li> <li><a href=contact.html>Contact</a></li> </ul>  </div> </div> </nav> 
<div class="container">
<?php 

require_once('phpmailer/class.phpmailer.php');

$mail             = new PHPMailer(); // defaults to using php "mail()"

$mail->IsSendmail(); // telling the class to use SendMail transport

$mail->AddReplyTo($_POST["inputEmail"], $_POST["inputName"]);

$mail->SetFrom($_POST["inputEmail"], $_POST["inputName"]);



$mail->AddAddress("coryierso@gmail.com", "Cory Pierson");

$mail->Subject    = $_POST["inputSubject"];

$mail->MsgHTML( $_POST["inputMessage"]);

if(!$mail->Send()) {
  echo "Mailer Error: " . $mail->ErrorInfo;
} else {
  echo "Message sent!";
}

?>
</div>
<div class="container">
<hr> <div class=footer> <p>Cory Pierson © Copyright 2015</p> </div> </div> <script src=scripts/3ad5a5d3.vendor.js></script> <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. --> <script>(function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
      function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
      e=o.createElement(i);r=o.getElementsByTagName(i)[0];
      e.src='//www.google-analytics.com/analytics.js';
      r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
      ga('create','UA-XXXXX-X');ga('send','pageview');</script> <script src=scripts/b6c3df09.main.js></script>



