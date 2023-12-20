<?php

include __DIR__ . "/functions.php";
// Array per ottenere la password
$lettereMaiuscoleMinuscole = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
$numeri = '0123456789';
$simboli = '!@#$%^&*()_+{}|:"<>?-=[]\';,./';


//Verifica se l'utente inserisce la password

if (isset($_GET["lunghezza"])){
    $lunghezza = $_GET["lunghezza"];

    $caratteriPossibili = "";

    if (isset($_GET["lettereMaiuscoleMinuscole"])) {
        $caratteriPossibili .= $lettereMaiuscoleMinuscole;
    }

    if (isset($_GET["numeri"])) {
        $caratteriPossibili .= $numeri;
    }

    if (isset($_GET["simboli"])) {
        $caratteriPossibili .= $simboli;
    }

    if ($caratteriPossibili) {
        $password = generaPassword($caratteriPossibili, $lunghezza);
        echo "Password generata: $password";
    } else {
        echo "Seleziona almeno un'opzione.";
    }
} else {
    echo "Inserisci la lunghezza della password.";
}



?>