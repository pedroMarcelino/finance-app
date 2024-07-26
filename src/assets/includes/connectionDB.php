<?php
    $username = "pehm";
    $password = "1234";

    try {
        $conn = new PDO('mysql:host=localhost;dbname=db_finance', $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Connected successfully";
    } catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
        var_dump($e);
    }