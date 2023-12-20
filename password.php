<?php

include  __DIR__ . "/functions.php";
// Array per ottenere la password
$lettereMaiuscoleMinuscole = str_split('abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ');
$numeri = str_split('0123456789');
$simboli = str_split('!@#$%^&*()_+{}|:"<>?-=[]\';,./');

//Verifica se l'utente inserisce la password

if(isset($_GET["lunghezza"])){
   $lunghezza = $_GET["lunghezza"];
   $password = generaPassword($lettereMaiuscoleMinuscole, $numeri, $simboli, $lunghezza);
   echo "Password generata: $password";

} else{
    echo "Inserisce la lunghezza della password.";
}


?>

