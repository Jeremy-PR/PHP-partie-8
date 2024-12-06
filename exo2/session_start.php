<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=p, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<p>
        <?php
    
              
echo ' Tu es ' . $_SESSION['firstName']  . " " .  $_SESSION['lastName'] . ' et malheureusement tu as bien '
. $_SESSION['age'] . 'ans .';
        ?>
    </p>
</body>

</html>