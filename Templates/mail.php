<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <title>Envoi d'un message par formulaire</title>
    </head>
    <body>
        <?php
         if (isset($_POST['description']) && isset($_POST['email']) && isset($_POST['projet'])) {
            $entete  = 'MIME-Version: 1.0' . "\r\n";
            $entete .= 'Content-type: text/html; charset=utf-8' . "\r\n";
            $entete .= 'From:'.$_POST['email'] . "\r\n";
    
            $message = '<h1>Message envoyé depuis la page Contact de monsite.fr</h1>
            <p><b>Email : </b>' . $_POST['description'] . '<br>
            <b>Message : </b>' . htmlspecialchars($_POST['message']) . '</p>';
    
            $retour = mail('nyc.cloudfree@gmail.com', $_POST['projet'], $message, $entete);
            if($retour)
                echo '<p>Votre message a bien été envoyé.</p>';
        }
        ?>
    </body>
</html>