<?php
  if(isset($_POST['submit']))
  {
    $name = $_POST['name'];
    $from = $_POST['email'];
    $message = $_POST['message'];
    $to = 'peckham.rob@gmail.com'; 
    $subject = 'Portfolio Contact Form';

    $body = "From: $name\n Message:\n $message";

    mail($to, $subject, $body)
  }
?>