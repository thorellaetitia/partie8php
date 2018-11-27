<!DOCTYPE HTML>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />  
        <link rel="stylesheet" href="style.css" />
        <title>PHP partie 8- Variables superglobales, sessions et cookies</title>  
    </head>
    <body>
        <h1>exercice_4 partie 8 php</h1>
        <p>Faire un formulaire qui permet de récupérer le login et le mot de passe de l'utilisateur. 
            A la validation du formulaire, stocker les informations dans un cookie.
        </p> 
        <p><?= 'Votre login : ' . $_COOKIE['login']; ?></p>
        <p><?= 'Votre mot de passe : ' . $_COOKIE['password']; ?></p>
        <p><a href="index.php">RETOUR</a><p>
    </body>
</html>