<?php

  require("sendgrid-php/lib/SendGrid.php");


  $name = htmlspecialchars($_POST['name']);
  $email = htmlspecialchars($_POST['email']);
  $message = htmlspecialchars($_POST['message']);


  $from = new SendGrid\Email(null, "swainston.cory89@gmail.com");
  $subject = "Message from $name at $email";
  $to = new SendGrid\Email(null, "swainston.cory89@gmail.com");
  $content = new SendGrid\Content("text/plain", $message);
  $mail = new SendGrid\Mail($from, $subject, $to, $content);

  $apiKey = getenv('SENDGRID_API_KEY');
  $sg = new \SendGrid($apiKey);

  $response = $sg->client->mail()->send()->post($mail);
  echo $response->statusCode();
  echo $response->headers();
  echo $response->body();

  header('Location: index.php?sent=true#contact');
  die();
 ?>
