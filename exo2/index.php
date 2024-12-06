<?php
session_start();

$firstName = "Marion";
$lastName = "Sabatier";
$age = "77";

$_SESSION['firstName'] = 'Marion';
$_SESSION['lastName'] = 'Sabatier';
$_SESSION['age'] = '77';
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page d'accueil</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <h1>Bienvenue sur la page d'accueil !</h1>



    <p><a href="./session_start.php">Voir les informations sur la deuxième page</a></p>

</body>

</html>