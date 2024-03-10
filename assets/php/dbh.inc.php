<?php

$host = "sql.freedb.tech:3306";
$dbname = "freedb_hackathon24";
$dbusername = "freedb_emirprasovic";
$dbpassword = "abRtb@9g95z37Qh";

$connectionString = "mysql:host=$host;dbname=$dbname";

try {
    $pdo = new PDO($connectionString, $dbusername, $dbpassword);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOExcetion $e) {
    echo "Connection failed: " . $e->getMessage();
}