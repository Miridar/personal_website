<?php

$dsn = "mysql:host=db.dw177.webglobe.com;dbname=steidler_cz";
$dbusername = "steidler_cz";
$dbpassword = "KDXfbdLBfS2JwzDOvpyl";

try {
    $pdo = new PDO($dsn, $dbusername, $dbpassword);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed: ". $e->getMessage();
}