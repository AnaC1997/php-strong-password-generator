<?php

//ricevere come argumenti gli array e la lungheza che inserira l'utente
function generaPassword($caratteriPossibili, $lunghezza)
{
    $password = '';

    for ($i = 0; $i < $lunghezza; $i++) {
        $carattereCasuale = $caratteriPossibili[rand(0, strlen($caratteriPossibili))-1];
        $password .= $carattereCasuale;
    }

    return htmlspecialchars($password);
}


