<?php
$server ="localhost";
$port   = "3307";
$username = "root";
$password = "";
$dbname = "ecomdb";

try {
    $conn = new PDO("mysql:host=$server;port=$port;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "Connected successfully"; // (optional, for testing)
} catch (Exception $e) {
    echo "Connection fail! " . $e->getMessage();
}
?>
