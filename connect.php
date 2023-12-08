<?php 

    //Opprette kobling
    $kobling = new mysqli('localhost', 'root', 'Admina', 'termin');
    
    //sjekk om kobling virker
    if($kobling->connect_error) {
        die("Noe gikk galt: ". $kobling->connect_error);
    }

    //Angi UTF-8 som tegnsett
    $kobling->set_charset("utf8");

?>