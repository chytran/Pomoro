<?php

    $dsn = 'mysql:host=localhost;dbname=bankingsystem';
    $username= 'root';
    //$password = 'pa55word';

    try {
        $db = new PDO($dsn, $username);

    } catch (PDOException $e){
        $error_message = 'Database Error';
        $error_message = .= $e->getMessage();
        echo $error_message;
        exit();
    }