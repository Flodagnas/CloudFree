<?php
if (isset($_POST['Email'])) {

    // EDIT THE 2 LINES BELOW AS REQUIRED
    $email_to = "nyc.cloudfree@gmail.com";
    $email_subject = "New form submissions";

    function problem($error)
    {
        echo "We are very sorry, but there were error(s) found with the form you submitted. ";
        echo "These errors appear below.<br><br>";
        echo $error . "<br><br>";
        echo "Please go back and fix these errors.<br><br>";
        die();
    }

    // validation expected data exists
    if (
        !isset($_POST['nom']) ||
        !isset($_POST['prénom']) ||
        !isset($_POST['email']) ||
        !isset($_POST['projet']) ||
        !isset($_POST['description'])
    ) {
        problem('We are sorry, but there appears to be a problem with the form you submitted.');
    }

    $nom = $_POST['nom']; // required
    $prénom = $_POST['prénom']; // required
    $email = $_POST['email']; // required
    $projet = $_POST['projet']; // required
    $description = $_POST['description']; // required

    $error_message = "";
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';

    if (!preg_match($email_exp, $email)) {
        $error_message .= 'The Email address you entered does not appear to be valid.<br>';
    }

    $string_exp = "/^[A-Za-z .'-]+$/";

    if (!preg_match($string_exp, $name)) {
        $error_message .= 'The Name you entered does not appear to be valid.<br>';
    }

    if (strlen($description) < 2) {
        $error_message .= 'The Message you entered do not appear to be valid.<br>';
    }

    if (strlen($error_message) > 0) {
        problem($error_message);
    }

    $email_message = "Form details below.\n\n";

    function clean_string($string)
    {
        $bad = array("content-type", "bcc:", "to:", "cc:", "href");
        return str_replace($bad, "", $string);
    }

    $email_message .= "Nom: " . clean_string($nom) . "\n";
    $email_message .= "Prénom: " . clean_string($prénom) . "\n";
    $email_message .= "Email: " . clean_string($email) . "\n";
    $email_message .= "Projet: " . clean_string($projet) . "\n";
    $email_message .= "Message: " . clean_string($description) . "\n";

    // create email headers
    $headers = 'From: ' . $email . "\r\n" .
        'Reply-To: ' . $email . "\r\n" .
        'X-Mailer: PHP/' . phpversion();
    @mail($email_to, $email_subject, $email_message, $headers);
}
header('Location: /CloudFree/Templates/accueil.html');
exit();
?>