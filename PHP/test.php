<?php
    ini_set( 'display_errors', 1 );
    error_reporting( E_ALL );
    $from = $_POST['email'];
    $to = "nyc.cloudfree@gmail.com";
    $subject = "Formulaire";
    $message = "PHP Mail fonctionne parfaitement";
    $headers = "De :" . $from;
    mail($to,$subject,$message, $headers);
    echo "L'email a été envoyé.";
?>