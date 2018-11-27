
<?php
session_start();

$_SESSION['lastName'] = 'thorel';
$_SESSION['firstName'] = 'laeti';
$_SESSION['age'] = 29;
?>


<!DOCTYPE HTML>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />  
        <link rel="stylesheet" href="style.css" />
        <title>PHP partie 8- Variables superglobales, sessions et cookies</title>  
    </head>
    <body>
        <h1>exercice_2 partie 8 php</h1>
        <p>Sur la page index, faire un liens vers une autre page. Passer d'une page à l'autre le contenu des variables lastname, firstname et age grâce aux sessions. Ces variables auront été définies directement dans le code.
            Il faudra afficher le contenu de ces variables sur la deuxième page.
        </p>
        <p>
            <a href="user.php">Mon lien</a>
        </p>

    </body>
</html>