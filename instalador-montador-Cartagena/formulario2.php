<?php 
	$headers = "From: info@zebravinilos.com\r\n";
	$headers .= "Reply-To: webmaster@example.com\r\n";
	$headers .= "X-Mailer: PHP/".phpversion();

    $first_name = $_POST['your_name'];
    $subject = "Formulario Instaladores ";
    $message = $first_name . " wrote the following:" . "\n\n" . $_POST['your_message']. "\n\n" . $_POST['your_email'];
   
    mail('info@zebravinilos.com', 'Formulario Instaladores ALC y/o Mur 2-0', $message, $headers);
  header('Location: contact-thank-you.jpg');
exit();
?>