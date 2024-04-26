<?php
    $dsn = 'mysql:host=joecool;dbname=CSC3212_S24_abreshears_db';
    $username = 'abreshears';
    $password = '1394261';

    try {
        $db = new PDO($dsn, $username, $password);
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        include('database_error.php');
        exit();
    }
?>
