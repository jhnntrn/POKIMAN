<?php
    $dsn = 'mysql:host=joecool;dbname=CSC3212_S24_ccaldwell_db';
    $username = 'ccaldwell';
    $password = 'Co2(Fe3)O2Li4';

    try{
        $db = new PDO($dsn, $username, $password);
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        include('database_error.php');
        exit();
    }
?>