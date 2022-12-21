<?php

// funzione per generare password casuale 

function generatepassword($numchars){

    $number ='12345678910';
    $charsminuscole = 'abcdefghilmnopqrstuvzywx';  
    $charsmaiuscole = 'ABCDEFGHILMNOPQRSTUVZYWX';
    $specialchars = '*-+:_;.,!?=)(/&%$£^ì|';
    
    // inserisci dentro questa varibaile la somma di stringhe
    $sumchart = $number . $charsminuscole . $charsmaiuscole . $specialchars ;

    // ritorno una stringa di carattere casuali dalla stringa sumchart, di lunghezza inserita dall'input numchars
    return(substr(str_shuffle($sumchart),0,$numchars));
    
}


?>