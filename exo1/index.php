<?php





?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./style.css">
</head>

<body>

    <p id=style>
        <?php


        echo 'Ci-joint ton User Agent => ' . $_SERVER['HTTP_USER_AGENT'];
        echo "<br> <br>";
        echo 'Voilà ton adresse Ip => ' . $_SERVER['SERVER_ADDR'];
        echo "<br> <br>";
        echo 'Et pour finir, le nom de ton serveur =>  ' . $_SERVER['SERVER_NAME'];

        ?>

    </p>




</body>

</html>