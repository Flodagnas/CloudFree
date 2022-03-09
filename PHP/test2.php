<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Envoi d'un message par formulaire</title>
</head>

<body>
    <?php
    $retour = mail('nyc.cloudfree@gmail.com', 'Envoi depuis la page Contact', $_POST['description'], 'From : '.$_POST['email']);
    if ($retour) {
        echo '<p>Votre message a bien été envoyé.</p>';
    }
    ?>
</body>
</html>