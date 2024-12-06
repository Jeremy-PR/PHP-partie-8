<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    setcookie('login', 'sabatier');
    setcookie('mdp', 'jesuisagé');


   

    if(isset($_COOKIE['login'], )) {
        echo 'Votre login est  ' .$_COOKIE['login'];

}}
echo "<br>";

if(isset($_COOKIE['mdp'], )) {
    echo 'Votre mdp est  ' .$_COOKIE['mdp'];

}
?>
