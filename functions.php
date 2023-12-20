<?php

//ricevere come argumenti gli array e la lungheza che inserira l'utente
function generaPassword($arg1, $arg2, $arg3, $lunghezza)
{
    //Unisci gli array di caratteri in un unico array
    $caratteriPossibili = array_merge($arg1, $arg2, $arg3);
    $password = " "; // Inizializza la password come stringa vuota


    // Ciclo per generare la password con l'argumento lungheza che da l'utente
    for ($i = 0; $i < $lunghezza; $i++) {
        //Selezona casualmente un carattere dall'array di caratteri
        $carattereCasuale = $caratteriPossibili[array_rand($caratteriPossibili)];

        // Aggiungi il carattere alla password contattenandola alla stringa vuota
        $password .= $carattereCasuale;
    }

    return  htmlspecialchars($password);

};


function generaPasswordOption($arg1,$lunghezza)
{
    //Unisci gli array di caratteri in un unico array
    $caratteriPossibili = array_merge($arg1);
    $password = " "; // Inizializza la password come stringa vuota


    // Ciclo per generare la password con l'argumento lungheza che da l'utente
    for ($i = 0; $i < $lunghezza; $i++) {
        //Selezona casualmente un carattere dall'array di caratteri
        $carattereCasuale = $caratteriPossibili[array_rand($caratteriPossibili)];

        // Aggiungi il carattere alla password contattenandola alla stringa vuota
        $password .= $carattereCasuale;
    }

    return  htmlspecialchars($password);

}


