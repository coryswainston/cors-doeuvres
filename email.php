<?php
  $name = htmlspecialchars($_POST('name'));
  $email = htmlspecialchars($_POST('email'));
  $message = htmlspecialchars($_POST('message'));
  $headers = "From: $email";

  mail("swainston.cory89@gmail.com", "Message from $name", $message, $headers);

  header('Location: /index.php?sent=true#contact');
 ?>
