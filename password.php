<?php
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

//ricevere come argumenti gli array e la lungheza che inserira l'utente
function generaPassword($arg1, $arg2, $arg3, $lunghezza){
    //Unisci gli array di caratteri in un unico array
    $caratteriPossibili = array_merge($arg1, $arg2, $arg3);
    $password = " "; // Inizializza la password come stringa vuota


    // Ciclo per generare la password con l'argumento lungheza che da l'utente
    for ($i = 0; $i < $lunghezza; $i++){
        //Selezona casualmente un carattere dall'array di caratteri
        $carattereCasuale = $caratteriPossibili[array_rand($caratteriPossibili)];

        // Aggiungi il carattere alla password contattenandola alla stringa vuota
        $password .= $carattereCasuale;
    }

    return $password;

}
?>

