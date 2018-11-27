<?php
$showForm = true;
//création du cookie :
//setcookie(NOM DU COOKIE , VALEUR DU COOKIE , DUREE DU COOKIE);
// Si $_POST login et password existent, on créé COOKIE
if (isset($_POST['login']) && isset($_POST['password'])) {
    //On récupére via $_POST les données du formulaire
    setcookie('login', $_POST['login'], time() + 3600 * 24 * 31);
    setcookie('password', $_POST['password'], time() + 3600 * 24 * 31);
    $showForm = false;
}
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
        <h1>exercice_4 partie 8 php</h1>
        <p>Faire une page qui va récupérer les informations du cookie créé à l'exercice 3 et qui les affiches.</p>
        <?php
        if ($showForm == true) {
            ?>
            <form method="post" action="index.php">
                <p><label for="login">Votre login</label> : <input type ="text" name="login" id="login" placeholder="login" /></p>
                <p><label for="password">Votre mot de passe </label> : <input type ="text" name="password" id="password" placeholder="motdepasse" /></p>
                <p><input type="submit" value = "Envoyer" /></p>
            </form>
        <?php } else {
            ?>
            <p>Un cookie a été créé : <a href="cookie.php">voir le cookie !</a>
                <?php
            }
            ?>



    </body>
</html>