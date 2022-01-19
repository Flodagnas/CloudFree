<?php

if(isset($_POST['envoi'])){ // si formulaire soumis
    echo "Nom: " . $_POST['nom'] . " Prénom: " . $_POST['prénom'] . " Email: " . $_POST['email'] . " Projet: " . $_POST['projet'] . " Description: " . $_POST['description'];
    $email = $_POST['email'];
    $subject = "Formulaire";
    $additional_params = "From:" . $email;
    $message = "Nom: " . $_POST['nom'] . " Prénom: " . $_POST['prénom'] . " Projet: " . $_POST['projet'] . " Description: " . $_POST['description'];
    mail("nyc.cloufree@gmail.com", $subject, $message, $additional_params);
    header('Location: \CloudFree\Templates\accueil.html');
    exit();
}

?>