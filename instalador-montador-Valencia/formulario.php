<?php 
    $first_name = $_POST['your_name'];
    $subject = "Formulario Instaladores VLC";
    $message = $first_name . " wrote the following:" . "\n\n" . $_POST['your_message']. "\n\n" . $_POST['your_email'];
   
    mail('info@zebravinilos.com', 'Formulario Instaladores VLC', $message);
  header('Location: contact-thank-you.jpg');
exit();
?>