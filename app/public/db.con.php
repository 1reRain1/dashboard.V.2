<?php

$dsn = "mysql:host=db;dbname=dishboard";
$username = "user";
$password = "secret";

try {
    $db = new PDO($dsn, $username, $password);
    // Set PDO attributes for error handling
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
