<?php

$dsn = "mysql:host=localhost;dbname=worldcup";
$username = "root";
$password = "";

try {
    $pdo = new PDO($dsn, $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);  
} catch (PDOException $e) {
    echo "connection to database failed ". $e->getMessage();
}