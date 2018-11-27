<?php
session_start();
?>

<p><?= 'Votre nom : ' . $_SESSION['lastName'] ?></p>
<p><?= 'Votre prénom : ' . $_SESSION['firstName'] ?></p>
<p><?= 'Votre âge : ' . $_SESSION['age'] ?></p>

<!DOCTYPE HTML>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />  
        <link rel="stylesheet" href="style.css" />
        <title>PHP partie 8- Variables superglobales, sessions et cookies</title>  
    </head>
    <body>
        
        
    </body>
</html>