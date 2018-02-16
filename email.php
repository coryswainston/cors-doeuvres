<?php

  require("sendgrid-php/lib/SendGrid.php");


  $name = htmlspecialchars($_POST['name']);
  $email = htmlspecialchars($_POST['email']);
  $message = htmlspecialchars($_POST['message']);

  $apiKey = getenv('SENDGRID_API_KEY');
  $sg = new \SendGrid($apiKey);
  $send_email = new SendGrid\Email();

  $send_email->addTo("swainston.cory89@gmail.com")
             ->setFrom("swainston.cory89@gmail.com")
             ->setSubject("Message from $name at $email")
             ->setHtml($message);

  $sg->send($send_email);

  header('Location: index.php?sent=true#contact');
  die();
 ?>
