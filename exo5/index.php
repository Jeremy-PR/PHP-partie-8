<?php


?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire et Cookies</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1>Formulaire et Cookie</h1>

    <form action="cookie.php" method="POST">
        <label for="login"> Login : </label>
        <input type="text" name="login" id="login" required>

        <label for="mdp"> Mot de passe : </label>
        <input type="password" name="mdp" id="mdp" required>

        <input type="submit" value="Envoyer">
    </form>
</body>

</html>