<?php

include __DIR__ . "/functions.php";
// Array per ottenere la password
$lettereMaiuscoleMinuscole = str_split('abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ');
$numeri = str_split('0123456789');
$simboli = str_split('!@#$%^&*()_+{}|:"<>?-=[]\';,./');

//Verifica se l'utente inserisce la password

if (isset($_GET["lunghezza"])) {
    $lunghezza = $_GET["lunghezza"];
    if ($password = generaPasswordOption($lettereMaiuscoleMinuscole, $lunghezza)) {
        echo "Password generata lettere: $password";
    } elseif ($password = generaPasswordOption($numeri, $lunghezza)) {
        echo "Password generata numeri: $password";
    } elseif ($password = generaPasswordOption($simboli, $lunghezza)) {
        echo "Password generata simboli: $password";
    } elseif ($password = generaPassword($lettereMaiuscoleMinuscole, $numeri, $simboli, $lunghezza)) {
        echo "Password generata: $password";
    }

} else {
    echo "Inserisce la lunghezza della password.";
}


?>