<?php

$dsn = "mysql:host=localhost; dbname=project register;";
$dbusername ="root";
$dbpassword ="makelabs";

try {
    $pdo = new PDO($dsn, $dbusername, $dbpassword);
    $pdo -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e){
    echo "Connection Failed:" . $e-> getMessage();
}