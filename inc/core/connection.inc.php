<?php   
    $dbh = "mysql:host=localhost;dbname=login-poo";
    $dbuser = "root";
    $dbpw = "";

    try {
        $pdo = new PDO($dbh, $dbuser, $dbpw);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        echo "<h1>Connetcion failed: " . $e->getMessage();
        die();
    }