<?php

//    $dsn = 'mysql:host=http://74.86.198.26/phpMyAdmin/spinawe_pokemon;dbname=pokemon';
//    $password = 'spinawe_phpclass';
//    $userName = 'cis239';
    
    $dsn = 'mysql:host=localhost; dbname=spinawe_pokemon';
    $userName ='root';
    $password = '';
    try{
        $db = new PDO($dsn, $userName, $password);
       
    }
    catch (PDOException $e){
        $error_message = $e->getMessage();
        echo $error_message;
        exit();
    }